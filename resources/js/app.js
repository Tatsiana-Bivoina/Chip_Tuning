import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import.meta.glob([
    '../images/**',
]);

window.Alpine = Alpine;
Alpine.plugin(focus);

Alpine.start();
