<?php
    $initial_url_segment = explode('/', $_SERVER['REQUEST_URI'])[1];
?>
<div class="tier tier--charcoal">
    <div class="wrapper">
        <div class="masthead" role="banner">
            <div class="masthead__section masthead__section--nav">
                <div class="nav" role="navigation">
                    <div class="nav__toggle">
                        <button class="hamburger" id="js-navToggleTrigger" aria-expanded="false">
                            <span class="isVisuallyHidden">Toggle Navigation</span>
                            <span class="hamburger__line hamburger__line--top"></span>
                            <span class="hamburger__line hamburger__line--mid"></span>
                            <span class="hamburger__line hamburger__line--bot"></span>
                        </button>
                    </div>
                    <div class="nav__area" id="js-navToggleTarget">
                        <ul class="nav__area__list">
                            <li class="nav__area__list__item">
                                <a <?php if ($initial_url_segment == 'services') { ?> class="isActive"<?php } ?>href="/services/">Services</a>
                            </li>
                            <li class="nav__area__list__item">
                                <a <?php if ($initial_url_segment == 'case-studies') { ?> class="isActive"<?php } ?>href="/case-studies/">Case Studies</a>
                            </li>
                            <li class="nav__area__list__item">
                                <a <?php if ($initial_url_segment == 'about') { ?> class="isActive"<?php } ?>href="/about/">About</a>
                            </li>
                            <li class="nav__area__list__item">
                                <a <?php if ($initial_url_segment == 'contact') { ?> class="isActive"<?php } ?>href="/contact/">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="masthead__section masthead__section--cta">
                <a class="btn" href="/quote/">
                    <span class="btn__txt">Get a Quote</span>
                    <span class="btn__icon" aria-hidden="true">
                        &nbsp;&raquo;
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
