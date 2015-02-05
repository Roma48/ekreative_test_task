jQuery(document).ready(function() {
    jQuery('#image-Container').cycle({
        prev: '#prev',
        next: '#next',
        pause: 1
    });
    
    jQuery('#image-Container').hover(function() {jQuery('#slideshow-status').html('(paused)');}, function() {jQuery('#slideshow-status').html('');});
   
    jQuery('#play').click(function() {document.getElementById('image-Container').cyclePause = 0; jQuery('#slideshow-status').html('');});
    jQuery('#pause').click(function() {document.getElementById('image-Container').cyclePause = 1; jQuery('#slideshow-status').html('(paused)');});
    var media_width = jQuery('body')[0].offsetWidth;
    if (media_width > 568) {
        jQuery('#enlarge').attr('href', 'javascript:void(0);');
        jQuery('#enlarge').click(function () {
            jQuery('#pause').click();
            jQuery('#image-Container a').each(function () {
                if (jQuery(this).css('display') != 'none') {
                    jQuery(this).click();
                }
            });
            jQuery('#play').click();


        });
        jQuery('.colorbox_gallery').colorbox({rel:'gall'});

    }

    
    
    //question form
    if(jQuery('#eds-properties-question-block-form').length > 0) {
        jQuery('#eds-properties-question-block-form').submit(function(){
            
            var attr = {
                nid: jQuery('#nodeId').val(),
                uid: jQuery('#nodeUid').val(),
                title: jQuery('#page-title').html(),
                name: jQuery('#question-name').val(),
                email: jQuery('#question-email').val(),
                text: jQuery('#question-text').val(),
                captchaText: jQuery('#edit-captcha-response').val(),
                captchaSid: jQuery('input[name="captcha_sid"]').val(),
                captchaToken: jQuery('input[name="captcha_token"]').val()
            }
            
            var errors = 0;
            
            if(attr.name.length == 0) {
                jQuery('#question-name').css({border: '1px solid red'});
                errors++;
            } else {
                jQuery('#question-name').css({border: '2px inset #fff'});
            }
            
            
            if(attr.email.length == 0) {
                jQuery('#question-email').css({border: '1px solid red'});
                errors++;
            } else if(!validateEmail(attr.email)) {
                jQuery('#question-email').css({border: '1px solid red'});
                errors++;
            } else {
                jQuery('#question-email').css({border: '2px inset #fff'});
            }
            
            if(attr.text.length == 0) {
                jQuery('#question-text').css({border: '1px solid red'});
                errors++;
            } else {
                jQuery('#question-text').css({border: '2px inset #fff'});
            }
           
            console.log(attr);
            
            if(errors == 0) {
                jQuery.ajax({
                   url: baseUrl + '/eds/property/send-question',
                   type: 'post',
                   dataType: 'json',
                   data: attr,
                   success: function(data) {
                       if(data.status == true) {
                           alert(data.message);
                       } else {
                           alert(data.message);
                       }
                   },
                   error: function(a, b, c) {
                        console.log('send question form data Error: ' + b);
                   }
                });
            
            }
            
            return false;
        });
    }
});

function validateEmail(email) { 

    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);

} 