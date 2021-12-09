/**
 * Validate input
 * @param  {[object]} params contains validateInput method params object
 * @param  {[Element]} params.el contains input jquery element that need to be validated
 * @return {[object]} returns objext that contains pass element validation or not and element itself
 */

 export default function validateInput(params) {
    let _params = {};

    if(params && !($.isEmptyObject(params)) && params.el[0]) {
        _params = params
    } else {
        return false;
    }

    let pass = true;

    if(_params.el.val() == '' || _params.el.val().length == 0) {
        pass = false;
    }

    if(_params.el.attr('type')  == 'tel' && _params.el.val().length < 16) {
        pass = false;
    }

    if(_params.el.attr('type')  == 'email') {
        pass = validateEmail(_params.el.val()) ? true : false;
    }

    return {
        'pass' : pass,
        'el' : _params.el,
    };
}

function validateEmail(email) {
    /* eslint-disable */
    const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    /* eslint-enable */

    return re.test(String(email).toLowerCase());
}
