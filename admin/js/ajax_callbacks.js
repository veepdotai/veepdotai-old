function ajax_upload(blob, filename) {
    var upload = document.createElement('a');

    upload.href="#";
    upload.innerHTML = "✅";
    upload.addEventListener("click", function(e){
        e.preventDefault();

        var fd = new FormData();
        fd.append('action', 'upload');
        fd.append('security', MyAjax.security);
        fd.append('whatever', 100);
        fd.append('veepdotai-ai-record-audio_data', blob, filename);

        self = this;
        jQuery.ajax({
            url: MyAjax.ajaxurl,
            data: fd,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data){
                //alert('Got this from the server: ' + data);
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

function ajax_edcal_generate_article(e) {
    e.preventDefault();

    var fd = new FormData();
    fd.append('action', 'generate_article');
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
            response = get_json(data);
            post = response.choices[0].text;
            setValue(".veepdotai-ai-section-edcal1-title", post.title);
            setValue(".veepdotai-ai-section-edcal1-description", post.description, "textarea");
            setValue(".veepdotai-ai-section-edcal1-content", post.content, "textarea");
            setValue(".veepdotai-ai-section-edcal1-themes", post.themes);
            setValue(".veepdotai-ai-section-edcal1-hashtags", post.hashtags);
            setValue(".veepdotai-ai-section-edcal1-keywords", post.keywords);
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
            response = get_json(data);
            post = response.choices[0].text;
            setValue(".veepdotai-ai-section-edstrat0-strategy", post, "textarea");
        }	
    })
}
