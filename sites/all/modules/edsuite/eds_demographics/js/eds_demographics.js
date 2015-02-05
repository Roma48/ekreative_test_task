(function ($) {
    $(document).ready(function () {
        console.log('here');
        $('#viewSelect').change(function () {
            var s = $(this).val();
            if (s == 'all') {
                $('.node').show()
            } else {
                $('.node').hide();
                $('#' + s).show();
            }
        });
        $('#viewSelect').change();
    });
})(jQuery)