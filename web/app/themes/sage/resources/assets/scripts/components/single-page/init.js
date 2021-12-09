export default function singleSection() {
    const video = $('.single__content iframe');
    video.wrap('<div class="responsive-iframe"></div>');
}
