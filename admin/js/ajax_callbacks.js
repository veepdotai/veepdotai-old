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
                textarea.disabled = false;
                textarea.innerHTML = data;
                textarea.disabled = true;
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

function ajax_edcal_generate_article(e) {
    e.preventDefault();

    var fd = new FormData();
    fd.append('action', 'generate_article');
    fd.append('security', MyAjax.security);

    self = this;
    jQuery.ajax({
        url: MyAjax.ajaxurl,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data){
            jQuery("textarea[name='veepdotai-ai-section-edcal11-content']")[0].innerHTML = data;
            alert('Got this from the server: ' + data);
        }	
    })
}
