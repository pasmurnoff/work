// import external dependencies
import 'jquery';

// Import components
import './components/header/init'
import './components/fancybox/init'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import single from './routes/single';

/** Populate Router instance with DOM routes */
const routes = new Router({
    common,
    home,
    single,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
