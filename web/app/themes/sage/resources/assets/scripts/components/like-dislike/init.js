import setCookie from '../cookie/setCookie';

export default function () {
    $('.mark').on('click', function () {
        const mark = $(this).data('like'),
            postId = $(this).data('post'),
            wrap = $('.like');

        $.ajax({
            url: window.wp_data.ajax_url,
            type: 'post',
            data: {
                action: 'like_dislike',
                mark: mark,
                postId: postId,
            },
            success: function (data) {
                wrap.html(data);
                setCookie('PostMark-' + postId, mark, {expires: 365})
            },
            error: function () {
                console.log('ooops');
            },
        });
    })
}
