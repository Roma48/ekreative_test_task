/**
 *Sliderfield module, adds sliderfields to designated textfields
 */
(function ($) {
Drupal.behaviors.sliderfield = {
  attach: function (context, settings) { 
			$('.sliderfield', context).once(function() {
				var self_id = $(this).attr('id');
				var slider_id = self_id + "-ui-slider";
				$(this).parent().append('<div id="'+ slider_id + '">&nbsp;</div>');
				$('#' + slider_id).slider({
					step: parseFloat(settings.sliderfield[self_id].step),
				 min: parseFloat(settings.sliderfield[self_id].min),
				 max: parseFloat(settings.sliderfield[self_id].max),
				 value: parseFloat(settings.sliderfield[self_id].val),
				 slide: function( event, ui ) {
						$( '#' + self_id ).val( ui.value );
				 }
    });		
				$( this ).change(function(){
						 value = $(this).val();	//todo:validate input
						 $('#' + slider_id).slider("value",	value);								
				});
				$(this).val( $('#' + slider_id).slider( "value" ) ); });
  }
};

})(jQuery);
