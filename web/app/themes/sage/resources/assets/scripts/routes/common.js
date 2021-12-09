import removeFirsImg from '../components/sigle-post/init'
import toggleElement from '../components/toggleElement/init'
import overlayToggle from '../components/overlay/init'
// import ajaxSearch from '../components/ajax-search/init'
import ajaxSend from '../components/ajax-send/init'
import likeDislike from '../components/like-dislike/init'

export default {
    init() {
        removeFirsImg();
        toggleElement();
        overlayToggle();
        // ajaxSearch();
        ajaxSend();
        likeDislike();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
