document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.menu-toggle');
    var navigation = document.querySelector('.primary-navigation');
    var closeButton = document.querySelector('.announcement-bar__close');

    if (toggle && navigation) {
        toggle.addEventListener('click', function () {
            var isOpen = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!isOpen));
            navigation.classList.toggle('is-open', !isOpen);
        });
    }

    if (closeButton) {
        closeButton.addEventListener('click', function () {
            closeButton.closest('.announcement-bar').hidden = true;
        });
    }
});
