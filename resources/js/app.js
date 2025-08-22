import './bootstrap'; // if exists
import 'admin-lte'; // adminlte js
import 'admin-lte/dist/css/adminlte.min.css'; // css via js import works with Vite


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
