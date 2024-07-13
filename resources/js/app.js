require('./bootstrap');
require('./app-note');
require('./card');
require('./lang');
require('./phrase');
require('./menu-panel');
require('./auth-panel');
require('./notification');
require('./translation');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
