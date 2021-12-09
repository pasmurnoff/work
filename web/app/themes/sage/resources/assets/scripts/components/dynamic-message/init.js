export default function dynamicAnimate(elem) {
    elem.animate({opacity: 'toggle'}).delay(2000).animate({opacity: 'toggle'});
}
