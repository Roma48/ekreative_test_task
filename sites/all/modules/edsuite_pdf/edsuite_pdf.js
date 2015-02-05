jQuery(function ($) {
	$(document).ready(function () {
		setInterval(function() {
			$('.group-proposal-section .form-type-textarea label').each(function () {
				if (!$(this).hasClass('clear_added')) {
					$(this).addClass('clear_added');
					$(this).after('<button class="clear_ck" ><span>&times;</span> Clear editor</button>');
				}
			});
		}, 500);
		
		$('.clear_ck').live('click', function () {
			CKEDITOR.instances[$(this).parent().parent().find('textarea.form-textarea').attr('id')].setData('');
			return false;
		});
	});
});