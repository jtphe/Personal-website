window.addEventListener('load', function () {
    let mainNav = document.getElementsByClassName('navbar-menu');
    let navBarToggle = document.getElementById('js-navbar-toggle');

    console.log('mainNav', mainNav);
    navBarToggle.addEventListener('click', function () {
        mainNav.style.setProperty('display', 'initial');
    });
})