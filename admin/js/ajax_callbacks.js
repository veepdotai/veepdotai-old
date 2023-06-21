function ajax_transcribe(blob, filename) {
    var upload = document.createElement('a');

    upload.href="#";
    upload.innerHTML = "✅";
    upload.addEventListener("click", function(e){
        e.preventDefault();

        var fd = new FormData();
        fd.append('action', 'transcribe');
        fd.append('security', MyAjax.security);

        // This information is required to indicate where does the audio come from
        id = this.parentElement.parentElement.parentElement.id;
        fd.append('audio', id);

        content_id = null;
        try {
            content_id = jQuery('#veepdotai-content-id')[0].value;
        } catch (e) {
            console.log("No content-id available.");
        }
        if (! content_id) {
            fd.append('veepdotai-ai-record-audio_data', blob, filename);
        }

        self = this;
        jQuery.ajax({
            url: MyAjax.ajaxurl,
            data: fd,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data){
                console.log(new Date() + ": returns from the server");
                id = self.parentElement.parentElement.parentElement.id;
                textarea = jQuery('#' + id + ' textarea')[0];
                textarea.innerHTML = data;
                textarea.setAttribute('readonly', 'readonly');
            }	
        })

		/*
		var xhr=new XMLHttpRequest();
		xhr.onload=function(e) {
		    if (this.readyState === 4) {
		        console.log("Server returned: ",e.target.responseText);
		    }
		};
		xhr.open("POST", MyAjax.ajaxurl, true);
		xhr.send(fd);
		*/

    });

    return upload;
}

/**
 * Fix json by removing prohibited chars then returns valid json
 * @param { text } data 
 * @returns json object
 */
function get_json(data) {
    result = data
            .replace(/{(\s|\n)*/g, "{")
            .replace(/(\s|\n)*}/g, "}")
            .replace(/\[(\s|\n)*/g, "[")
            .replace(/(\s|\n)]/g, "]")
            .replace(/(\s|\n)*],(\s|\n)*/g, "],")
            .replace(/\",\n\s*\"/g, "\",\"")
            .replace(/\n/g, "\\n");

    return JSON.parse(data);
}

function ajax_edcal_publish_article(e) {
    e.preventDefault();

    var fd = new FormData();
    fd.append('action', 'publish_article');
    fd.append('security', MyAjax.security);

    self = this;
    jQuery.ajax({
        url: MyAjax.ajaxurl,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data) {
            console.log(new Date() + ": edcal_generate_article returns from the server");
            response = data;
            window.location = data;
        }	
    })

}

function ajax_edcal_generate_image(e) {
    e.preventDefault();

    function setValue(selector, value, widgetType = 'text') {
        try {
            if ("textarea" === widgetType) {
                jQuery(selector)[0].innerHTML = value.replace(/EOL/g,'\n');
            } else {
                jQuery(selector)[0].value = value;
            }
        } catch (e) {

        }
    }

    function process(ajaxurl, fd) {
        jQuery.ajax({
            url: ajaxurl,
            data: fd,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data) {
                console.log(new Date() + ": edcal_generate_image returns from the server");
                response = JSON.parse(data);
                setValue(".veepdotai-ai-section-edcal1-img-href", response[0].media);
            }	
        })    
    }
    
    var fd = new FormData();
    fd.append('action', 'generate_image');
    fd.append('security', MyAjax.security);
    prompt = "";

    try {
        prompt = jQuery('.veepdotai-ai-section-edcal1-img-prompt')[0].value;
        fd.append('prompt', prompt);
        process(MyAjax.ajaxurl, fd);
    } catch (e) {
        console.log("No prompt id.");
        alert('Pas de prompt disponible pour l\'image. Indiquez des mots-clés pour permettre une recherche sur la base d\'images.');
    }

}

function ajax_edcal_generate_article(e) {
    e.preventDefault();

    var fd = new FormData();
    fd.append('action', 'generate_article');
    fd.append('security', MyAjax.security);
    contentId = "";
    try {
        contentId = document.getElementById('veepdotai-content-id').value;
    } catch (e) {
        console.log("No content id.");
    }
    fd.append('content_id', contentId);

    function setValue(selector, value, widgetType = 'text') {
        try {
            if ("textarea" === widgetType) {
                jQuery(selector)[0].innerHTML = value.replace(/EOL/g,'\n');
            } else {
                jQuery(selector)[0].value = value;
            }
        } catch (e) {

        }
    }

    self = this;
    jQuery.ajax({
        url: MyAjax.ajaxurl,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data) {
            console.log(new Date() + ": edcal_generate_article returns from the server");
            response = JSON.parse(data);
            post = response.choices[0].text;
            linkedin = post.linkedin ? post.linkedin.replace(/<img[^\>]*alt="(.*?)"[^\>]*>/g,"$1") : "";
            setValue(".veepdotai-ai-section-edcal1-title", post.title);
            setValue(".veepdotai-ai-section-edcal1-description", post.description, "textarea");
            setValue(".veepdotai-ai-section-edcal1-content", post.content, "textarea");
            setValue(".veepdotai-ai-section-edcal1-linkedin", linkedin, "textarea");
            setValue(".veepdotai-ai-section-edcal1-themes", post.themes);
            setValue(".veepdotai-ai-section-edcal1-hashtags", post.hashtags);
            setValue(".veepdotai-ai-section-edcal1-keywords", post.keywords);
            setValue(".veepdotai-ai-section-edcal1-img-prompt", post['image']);

            console.log('The article has been generated.');
        }	
    })
}

function ajax_edstrat_generate_editorial_strategy(e) {
    e.preventDefault();

    var fd = new FormData();
    fd.append('action', 'generate_editorial_strategy');
    fd.append('security', MyAjax.security);
    fd.append('content_id', document.getElementById('veepdotai-content-id').value);

    function setValue(selector, value, widgetType = 'text') {
        try {
            if ("textarea" === widgetType) {
                jQuery(selector)[0].innerHTML = value;
            } else {
                jQuery(selector)[0].value = value;
            }
        } catch (e) {

        }
    }

    self = this;
    jQuery.ajax({
        url: MyAjax.ajaxurl,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data) {
            //response = get_json(data);
            response = JSON.parse(data);
            post = response.choices[0].text;
            strategy = post.split(/\r?\n/).filter(line => line.trim() !== '').join('\n');
            setValue(".veepdotai-ai-section-edstrat0-strategy", strategy, "textarea");
        }	
    })
}
