(function ($) {	
	$(document).ready(function(){
		
		// Custom Report Builder Flyout
	    $('#report-expand').click(function() {
	 		if($(this).is('.active')) {
	             $('#report-total').fadeOut('slow', function() {
	                 $('#save-and-report-container').animate({ left: -261}, 500, 'swing', function() {
	                     $('#report-total').removeClass('report-total-in').fadeIn('slow');
	                 });
	             });
	 			$(this).removeClass('active');
	 		} else {
	             $('#report-total').addClass('report-total-in').fadeOut('slow', function() {
	                 $('#save-and-report-container').animate({ left: 0}, 750, 'swing', function() {
	                     $('#report-total').addClass('report-total-in').fadeIn('slow');
	                 });
	             });
	             $(this).addClass('active');
	 		}
	 	});		
		
		// Custom Report Builder Scroll Deal
		$(window).scroll(function () {
			if(typeof( window.innerHeight ) == 'number' ) {
				var viewportheight = window.innerHeight;
				var customReportSide = (viewportheight / 2) - 135;
			} else if (document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight)) {
				var viewportheight = document.documentElement.clientHeight;
				var customReportSide = (viewportheight / 2) - 135;
			}	
		
		    var y = $(this).scrollTop();

		    if (y < customReportSide) {
				$('#save-and-report-container').stop().animate( {'top': y + customReportSide }, 500);
			} else {
				$('#save-and-report-container').stop().animate({'top': y + customReportSide }, 500);
			}
		});
		
		
		// Map Tool Slides - Flexslider	
		if ($('#block-views-map-block .flexslider').length > 0) {
			$('#block-views-map-block .flexslider').flexslider({
				animation: "slide",
			    controlNav: false,
			    animationLoop: false,
			    slideshow: false,
			    sync: "#block-views-map-block-1 .flexslider"
			});
	
			// Map Tool Thumb Carousel - Flexslider
			$('#block-views-map-block-1 .flexslider').flexslider({
				animation: "slide",
			    controlNav: false,
			    animationLoop: false,
			    slideshow: false,
			    itemWidth: 220,
			    minItems: 2,
			    maxItems: 5,
			    itemMargin: 5,
			    asNavFor: '#block-views-map-block .flexslider'
			});
		}
		
		
		// Proposal Code		
		$('#login-code.form-text').focus(function() {
			$('#block-proposal-propsal-login').addClass('focus');
		});
	
		$('#login-code.form-text').focusout(function() {
			$('#block-proposal-propsal-login').removeClass('focus');
		});
		
	    $('#proposal_login_form').submit( function() {
	       return ValidateForm(this); 
	    });
    	
        if ($('#block-proposal-propsal-secure').length > 0) {
            
            $('#block-proposal-propsal-secure > h2').hide();
            
            $('#block-proposal-propsal-secure').dialog({
                width: 400,
                height: 250,
                autoOpen: true,
                title: "Proposal Login",
                modal: true,
                resizable: false,
                closeOnEscape: false,
                beforeClose: function(){
                    return false;
                },
                open: function() {
                    $('.ui-widget-overlay').css({opacity: 10});
                    $('.ui-dialog').css({ top: "50%", left: "50%", marginLeft: "-200px", marginTop: "-125px"});
                }
            });
            
            $('#block-proposal-propsal-secure input[name=code]').blur();
            
            setTimeout(function() { $('#block-proposal-propsal-secure input[name=password]').attr("autocomplete", "off").focus(); }, 0);
        }
		
		// Search
	    $('#edit-search-block-form--2.form-text').attr('value','Search');
	    $('#edit-search-block-form--2.form-text').toggleVal('focus');
		
		$('#edit-search-block-form--2.form-text').focus(function() {
			$('#block-search-form').addClass('focus');
		});
	
		$('#edit-search-block-form--2.form-text').focusout(function() {
			$('#block-search-form').removeClass('focus');
		});
		
		// Property Sliders
	    function setSliderSegments() {
        
	        if($('.form-type-slider').length > 0) {
            
	            var propertyType = $('input[name="property_search[property_type]"]:checked').val();
            
	            //remove previous changes
	            if($('.top-segments-container').length > 0) 
	                $('.top-segments-container').remove();
            
	            if($('.bottom-segments-container').length > 0) 
	                $('.bottom-segments-container').remove();                
            
	            $.each($('.form-type-slider'), function(key, v){
	                // get slider container element
	                var sliderContainer = $(v).find('.slider-wrapper');
                
	                var min = $('#' + sliderContainer.attr('id').replace("_wrapper", "")).slider("option", "min");
	                var max = $('#' + sliderContainer.attr('id').replace("_wrapper", "")).slider("option", "max");
	                var regex = /.*\[(.*)\-.*\]/i;
	                var fieldNameArr = regex.exec($(v).find('input[id*=min]').attr('name'));
	                var fieldName = fieldNameArr[1];

	                sliderContainer.css({ position: "relative", padding: "30px 0", margin: "5px 0" });

	                // attributes
	                var segments = 8;
	                var sliderWidth = sliderContainer.width();
	                var pointWidth = max - min;
	                var bottomSegmentWidth = sliderWidth / segments;
	                var topSegmentWidth = sliderWidth / segments / 2;
	                //console.log(sliderWidth, pointWidth);

	                // create segments containers
	                var topSegmentsContainer = $('<div class="top-segments-container" />');
	                var bottomSegmentsContainer = $('<div class="bottom-segments-container" />');
	                bottomSegmentsContainer.css({ 
	                    position: "absolute", 
	                    left: 0, 
	                    bottom: '0px', 
	                    width: sliderWidth + 'px', 
	                    borderLeft:  '1px solid #ccc',
	                    height: '30px'
	                });

	                topSegmentsContainer.css({ 
	                    position: "absolute", 
	                    left: 0, 
	                    top: '15px', 
	                    width: sliderWidth + 'px',                     
	                    borderLeft:  '1px solid #aaa',
	                    height: '10px' 
	                });

	                //create top segments
	                for(var i = 0; i < (segments * 2); i++) {

	                    var segmentEl = $('<div />');
	                    segmentEl.css({
	                        width: (topSegmentWidth - 1) + 'px',
	                        borderRight: '1px solid #aaa',
	                        height: '10px',
	                        float: 'left'
	                    });
	                    topSegmentsContainer.append(segmentEl);
	                }

	                topSegmentsContainer.append('<div style="clear: both;" />');

	                sliderContainer.append(topSegmentsContainer);

	                // send ajax for getting values
	                $.ajax({
	                    url: baseUrl + '/eds/properties/get-slider-data',
	                    type: 'post',
	                    dataType: 'json',
	                    data: {
	                      type: propertyType,
	                      min: min,
	                      max: max,
	                      segments: segments,
	                      field: fieldName
	                    },
	                    success: function(data) {

	                        // create bottom segments
	                        for(var i = 0; i < segments; i++) {

	                            var segmentEl = $('<div>' + data.values[i] + '</div>');
	                            segmentEl.css({
	                                width: (bottomSegmentWidth - 1) + 'px',
	                                borderRight: '1px solid #ccc',
	                                borderBottom: '1px solid #ccc',
	                                height: '30px',
	                                float: 'left',
	                                textAlign: 'center',
	                                lineHeight: '30px',
	                                fontSize: '12px',
	                                color: '#aaa'
	                            });
	                            bottomSegmentsContainer.append(segmentEl);
	                        } 

	                        bottomSegmentsContainer.append('<div style="clear: both;" />');
	                        sliderContainer.append(bottomSegmentsContainer);

	                    },
	                    error: function(a, b, c) {
	                        console.log('Slides error: ' + b);
	                    }
	                })
	            });
	        }
	    }
		
        setSliderSegments();
				    
	    window.addEventListener("orientationchange", setSliderSegments);
		
	});
	
	$(window).load(function(){
		
	});		

})(jQuery);

/* 
 * updateCounts(counts)
 * This is a global function that is called by eds_report_session.js
 */
function updateCounts(counts) {
		
    var total = 0;
    for (var type in counts) {
        jQuery('.' + type + '_count').html(counts[type].toString());
        total += parseInt(counts[type]);
    }

    jQuery('#report-total').html(total.toString());

    if (total > 0) {
        jQuery('#report-total').show();
    } else {
        jQuery('#report-total').hide();
    }
}
