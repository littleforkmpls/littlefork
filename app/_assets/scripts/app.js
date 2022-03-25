/** ******************* */
/** Init 3rd Party      */
/** ******************* */
AOS.init();

/** ******************* */
/** Interface           */
/** ******************* */
document.addEventListener("DOMContentLoaded", function() {

    /**** Constants ****/
    const body              = document.querySelector('body');
    const navToggleTrigger  = document.querySelector("#js-navToggleTrigger");
    const navToggleTarget   = document.querySelector("#js-navToggleTarget");

    /**** Mobile Navigation Toggler ****/
    navToggleTrigger.onclick = function (e) {
        e.preventDefault();

        let navIsVisible = navToggleTrigger.getAttribute('aria-expanded');

        if (navIsVisible === 'false') {
            // nav is hidden and will be visible
            navToggleTrigger.setAttribute('aria-expanded','true');
            navToggleTrigger.classList.add('hamburger--isCloseButton');
        } else {
            // nav is visible and will be hidden
            navToggleTrigger.setAttribute('aria-expanded','false');
            navToggleTrigger.classList.remove('hamburger--isCloseButton');
        }

        body.classList.toggle('isLocked');
        navToggleTarget.classList.toggle('isVisible');
    };

});



