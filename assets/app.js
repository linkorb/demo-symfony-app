/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
//import './bootstrap';

import 'bootstrap';
require('@fortawesome/fontawesome-free/css/all.min.css');

var $ = require('jquery');
global.$ = global.jQuery = $;

import '@linkorb/brace-helper'; // auto initialize ace editors
// import any modes or themes you'd like to use in your app
import 'brace/mode/yaml';
import 'brace/mode/json';
import 'brace/theme/monokai';
import 'brace/theme/textmate';

var easyMDE = require("easymde");
global.easyMDE = easyMDE;

document.addEventListener('DOMContentLoaded', function () {

  [].forEach.call(document.querySelectorAll("textarea.markdown-editor"), element => {
    const easymde = new easyMDE({
      element: element,
      spellChecker: false,
      minHeight: "200px",
      maxHeight: "200px",
    });
  });
});
