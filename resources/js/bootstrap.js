import _ from 'lodash';
import $ from 'jquery';
import 'popper.js'; // Required for BS4
import 'bootstrap';

window.$ = window.jQuery = $;
window._ = _; // Lodash

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';