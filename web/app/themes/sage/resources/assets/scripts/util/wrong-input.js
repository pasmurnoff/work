export default function wrongInput (el) {
    el.addClass('wrong');

    setTimeout(() => {
        el.removeClass('wrong');
    }, 1000);
}
