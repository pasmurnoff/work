export default function () {
    $('.toggleElement').on('click', function () {
        const bodyBlock = $(this).data('body');
        $(`.${bodyBlock}, body`).toggleClass('panel_open');
    })
}
