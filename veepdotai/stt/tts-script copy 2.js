const synth = window.speechSynthesis;

function speak(voices, text) {
    if (synth.speaking) {
        console.error("speechSynthesis.speaking");
        return;
    }

    const utterThis = new SpeechSynthesisUtterance(text);

    utterThis.onend = function (event) {
        console.log("SpeechSynthesisUtterance.onend");
    };

    utterThis.onerror = function (event) {
        console.error("SpeechSynthesisUtterance.onerror");
    };

    selectedVoice = 'Thomas';
    let voice = null;
    for (let i = 0; i < voices.length; i++) {
        if (voices[i].name === selectedVoice) {
            voice = voices[i];
            break;
        }
    }
  
//    utterThis.voice = voice;
//    utterThis.pitch = 1;
//    utterThis.rate = 1;
    return synth.speak(utterThis);
}

function setSpeech() {
    return new Promise(
        function (resolve, reject) {
            let synth = window.speechSynthesis;
            let id;

            id = setInterval(() => {
                if (synth.getVoices().length !== 0) {
                    resolve(synth.getVoices());
                    clearInterval(id);
                }
            }, 10);
        }
    )
}

let s = setSpeech();
s.then((voices) => {
    speak(voices, 'Bonjour Jean-Christophe');
});



