export default function () {
    function dataList() {
        const list = $('.' + $(this).data('result'));
        list.addClass('active');
        if ($(this).val() !== '') {
            $.ajax({
                url: window.wp_data.ajax_url,
                type: 'post',
                data: {
                    action: 'data_fetch',
                    keyword: $(this).val(),
                },
                beforeSend: function () {
                    list.removeClass('loaded');
                    list.addClass('loading');
                },
                success: function (data) {
                    list.removeClass('loading');
                    list.addClass('loaded');
                    list.html(data);
                },
                error: function () {
                    console.log('ooops');
                },
            });
        } else {
            list.html('');
            list.removeClass('loaded');
            list.removeClass('active');
        }
    }

    $('.search-form__input')
        .on('keyup', dataList)
        .on('click', dataList);

    $(document).mouseup(function (e) {
        let div = $('.header__search');
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            $('.search__list').removeClass('active');
        }
    });

}
