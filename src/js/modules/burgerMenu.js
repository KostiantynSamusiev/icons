function burgerMenu() {
    // Burger menu
    $(document).ready(function () {
        $('#nav-icon3').click(function () {
            $(this).toggleClass('open');
            $('.navigation').fadeToggle();
        });
    });
}

export default burgerMenu;