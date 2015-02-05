(function ($) {
    $(document).ready(function () {
        $('.preview-title').click(function () {
            $('#block-eds_profile-0 .item-list li').removeClass('active');
            $('.book-preview').hide();
            var node = $(this).attr('id');
            $(this).parents('li').eq(0).addClass('active');
            $('#book-preview-' + node).show();
        });
        $('.preview-title').eq(0).click();

        $('.scroll-outer .item-list').jScrollPane({
            showArrows:true,
            scrollbarMargin:10,
            dragMaxHeight:70,
            scrollbarWidth:10,
            wheelSpeed:10
        });
    });

})(jQuery)