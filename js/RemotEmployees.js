function burgerMenu(selector){
    let menu = $(selector);
    let button = menu.find('.burger-menu_button');
    let links = menu.find('.burger-menu_link');
    let overlay = menu.find('.burger-menu_overlay');

    button.on('click', (e) => {
        e.preventDefault();
        toggleMenu();
    });
    links.on('click', () => toggleMenu());
    overlay.on('click', () => toggleMenu());

function toggleMenu() {
    menu.toggleClass('burger-menu_active');
    }
}
burgerMenu('.burger-menu');

function backToTop() {
    let button = $('.back-to-top');

    $(window).on('scroll', () => {
        if ($(this).scrollTop() >= 50) {
            button.fadeIn();
        } else {
            button.fadeOut();
        }
    });
    button.on('click', (e) => {
        e.preventDefault();
        $('html').animate({scrollTop: 0}, 1000);
    })
}
backToTop();

function redirectToMainPage() {
    document.location.href = "RemotEmployees.html";
}