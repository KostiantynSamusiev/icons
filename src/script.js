import burgerMenu from './js/modules/burgerMenu';
import fancyBox from './js/modules/fancyBox';
import lazyLoad from './js/modules/lazyLoad';
import owlCarousel from './js/modules/owlCarousel';
import './scss/main.scss'
import './scss/burger-menu.scss'




window.addEventListener('DOMContentLoaded', () => {
    burgerMenu();
    fancyBox();
    lazyLoad();
    owlCarousel();
});