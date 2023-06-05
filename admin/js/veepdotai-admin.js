(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 $( window ).load(function() {

		var last = "";
	 	var input = jQuery.find("#context"); 
		if (input && input.length > 0) {
			input[0].addEventListener("keyup", function(e) {
				if ('Enter' == e.key) {
					last = "";
				} else {
					var re = /exécute/i;

					// Gets the last line because the user may have been back and insert a char somewhere
					var lines = this.value.split('\n');
					last = lines[lines.length - 1];

					if (last.match(re)) {
						console.log("match exécute");
						window.location = "https://www.google.com";
					} else {
						console.log(e.key);
					}
				}
			});			
		}

		try {
			jQuery("#veep_id_vocal textarea")[0].setAttribute('readonly', 'readonly');
		} catch (e) {
			// We are not on the interview page
		}

		init_loading_page();
		init_sections();

	});

})( jQuery );

function init_loading_page() {
	var $loading = jQuery('#loadingDiv').hide();
	jQuery(document)
		.ajaxStart(function () {
			$loading.show();
		})
		.ajaxStop(function () {
			$loading.hide();
		});
}

/**
 * Init tabs to make form filling easier
 */
  function init_sections() {
	if (jQuery('.veep_section').length > 0) {
		toggle_display(jQuery('.veep_section')[0].id);
	}
  }

  function hide_sections() {
	sections = jQuery('.veep_section');
	if (sections) {
		menus = jQuery('ul.tabs_questions li');
		if (menus) {

			for (i = 0; i < sections.length; i++) {
				sections[i].style.display = 'none';
				if (i < menus.length) {
					menus[i].classList.remove('displayed');
				}
			}
		}
	}
  }

  function toggle_display(eltName) {
	hide_sections();

	try {
		section = jQuery('#' + eltName)[0];
		menu = jQuery('#' + eltName + '_menu')[0];
		if (section.style.display == 'none') {
			section.style = 'display: block';
			menu.classList.add('displayed');
		} else {
			section.style = 'display: none';
		}
	} catch (e) {
		// I know. A better architecture sould be welcome.
		// These elements don't exist. Just ignore them.
		// Interesting when in vocal or in entretien page.
	}
  }

  /**
   * Prompts helper
   */
  function fillWithSameValues(o) {
	function getValueByClassName(className) {
		return document.getElementsByClassName(className)[0].value;
	}
	function setValueByClassName(className, value) {
		document.getElementsByClassName(className)[0].value = value;
		return document.getElementsByClassName(className)[0].value;
	}

	var value = o.checked;
	var sections = jQuery('.veep_section');
	prompt_pre = getValueByClassName('veepdotai-ai-section0-text-prompt-pre');
	prompt_post = getValueByClassName('veepdotai-ai-section0-text-prompt-post');
	for(i = 1; i < sections.length; i++) {
		var cn = 'veepdotai-ai-section' + i + '-text-prompt-';
		if (value == true) {
			//alert('Value is on');
			setValueByClassName(cn + 'pre', prompt_pre);
			setValueByClassName(cn + 'post', prompt_post);
		} else {
			//alert('Value is off');
			setValueByClassName(cn + 'pre', '');
			setValueByClassName(cn + 'post', '');
		}
	}

  }

  /**
   * Voice synthesis 
   */
  function getVoice(lang) {
    let voices = getVoices();
	let voice = null;
	for(let i = 0; i < voices.length; i++ ) {
		if (lang == voices[i].lang) {
			console.log('Found voice: ' + lang);
			voice = voices[i];
			break;
		}
	}

	return voice;
  }

  function getVoices() {
    let voices = speechSynthesis.getVoices();
    if(!voices.length){
      // some time the voice will not be initialized so we can call spaek with empty string
      // this will initialize the voices 
      let utterance = new SpeechSynthesisUtterance("");
      speechSynthesis.speak(utterance);
      voices = speechSynthesis.getVoices();
    }
    return voices;
  }
  
  function speak(_text, voice, rate = 1, pitch = 1, volume = 1) {
	let text = "";
	if (_text == undefined || _text == null || _text == "") {
		text = "Ceci est un test."
	} else {
		text = _text;
	}

	console.log('Text: ' + text);
	let voiceContext = new SpeechSynthesisUtterance();
    voiceContext.volume = volume; // From 0 to 1
    voiceContext.rate = rate; // From 0.1 to 10
    voiceContext.pitch = pitch; // From 0 to 2
    voiceContext.text = text;
    voiceContext.lang = 'fr-FR';
    voiceContext.lang = 'Thomas';
    voiceContext.voice = getVoice('fr-FR');
    speechSynthesis.speak(voiceContext);  
  }
  
  function start(text = '') {
    console.log('Focus');
 
    if ('speechSynthesis' in window) {
        console.log('Speech Synthesis is Supported 😞'); 

        let voices = getVoices();
        let rate = 1, pitch = 1, volume = 1;
		let talks = text.split(/\.|\?|\!|\.{3}/);
		for (let i = 0; i < talks.length; i++) {
			if (talks[i] != "") {
				console.log('Talks[' + i + ']: ' + talks[i]);
				speak(talks[i], voices[5], rate, pitch, volume );
			}
		}
    } else {
        console.log('Speech Synthesis Not Supported 😞'); 
    }
  }

  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

  /*
  var recognition = null;
  var target = null;
  if (/interview/.test(window.location)) {	
    recognition = new webkitSpeechRecognition();
	recognition.continuous = true;
	recognition.interimResults = true;
	recognition.onstart = () => {
		console.log("Speech recognition service has started.");
	};

	recognition.onend = () => {
		console.log("Speech recognition service disconnected. Restarting.");
		recognition.start();
	};

	recognition.onresult = function(event) {
		if (target != null) {
			if (target.nodeName == 'INPUT') {
				target.value = "";
			} else {
				target.innerHTML = "";
			}
			var msg = null;
			for(var i=0; i < event.results.length; i++){
			console.log(i + "/" + event.results.length + ": " + event.results[i])
				msg = event.results[i][0].transcript;
				if (target.nodeName == 'INPUT') {
					target.value += msg;
				} else {
					target.innerHTML += msg;
				}
			}	
		}
	}

	recognition.start = function(event) {};

	recognition.start();
  }

  function start_listening(output) {
	  target = output;
	  recognition.stop();
  }

  function stop(obj) {
	console.log("Stopping...");
	recognition.stop();
  }

*/