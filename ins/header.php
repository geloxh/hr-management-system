<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Management System</title>
    
    <!-- Header Styles -->
    <style>
        /* -------------------------------- 
        File#: _1_main-header
        Title: Main Header
        Descr: Accessible website navigation
        Usage: codyhouse.co/license
        -------------------------------- */
        
        /* CSS Reset */
        *, *::after, *::before {
            box-sizing: border-box;
        }

        * {
            font: inherit;
            margin: 0;
            padding: 0;
            border: 0;
        }

        body {
            background-color: hsl(0, 0%, 100%);
            font-family: system-ui, sans-serif;
            color: hsl(230, 7%, 23%);
            font-size: 1rem;
        }

        h1, h2, h3, h4 {
            line-height: 1.2;
            color: hsl(230, 13%, 9%);
            font-weight: 700;
        }

        h1 { font-size: 2.0736rem; }
        h2 { font-size: 1.728rem; }
        h3 { font-size: 1.25rem; }
        h4 { font-size: 1.2rem; }

        ol, ul, menu {
            list-style: none;
        }

        button, input, textarea, select {
            background-color: transparent;
            border-radius: 0;
            color: inherit;
            line-height: inherit;
            appearance: none;
        }

        textarea {
            resize: vertical;
            overflow: auto;
            vertical-align: top;
        }

        a {
            color: hsl(250, 84%, 54%);
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        img, video, svg {
            display: block;
            max-width: 100%;
        }

        @media (min-width: 64rem) {
            body { font-size: 1.25rem; }
            h1 { font-size: 3.051rem; }
            h2 { font-size: 2.44rem; }
            h3 { font-size: 1.75rem; }
            h4 { font-size: 1.5625rem; }
        }

        /* CSS Variables */
        :root {
            /* Colors */
            --mf1-color-primary-hsl: 250, 84%, 54%;
            --mf1-color-bg-hsl: 0, 0%, 100%;
            --mf1-color-contrast-high-hsl: 230, 7%, 23%;
            --mf1-color-contrast-higher-hsl: 230, 13%, 9%;
            --mf1-color-contrast-lower-hsl: 240, 4%, 85%;
            --mf1-color-contrast-medium-hsl: 225, 4%, 47%;
            --mf1-color-bg-dark-hsl: 240, 4%, 95%;
            --mf1-color-white-hsl: 0, 0%, 100%;
            --mf1-color-primary-darker-hsl: 250, 84%, 38%;
            --mf1-color-primary-light-hsl: 250, 84%, 60%;
            --mf1-color-bg-lighter-hsl: 0, 0%, 100%;
            --mf1-color-black-hsl: 230, 13%, 9%;
            --mf1-color-bg-light-hsl: 0, 0%, 100%;

            /* Spacing */
            --mf1-space-2xs: 0.375rem;
            --mf1-space-sm: 0.75rem;
            --mf1-space-md: 1.25rem;

            /* Typography */
            --mf1-text-lg: 1.25rem;
            --mf1-text-sm: 0.833rem;

            /* Header Height */
            --header-height: 50px;
        }

        @media(min-width: 64rem) {
            :root {
                --mf1-space-2xs: 0.5625rem;
                --mf1-space-sm: 1.125rem;
                --mf1-space-md: 2rem;
                --mf1-text-lg: 1.75rem;
                --mf1-text-sm: 1rem;
                --header-height: 70px;
            }
        }

        /* Button Styles */
        .mf1-btn {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 1em;
            white-space: nowrap;
            text-decoration: none;
            background: hsl(var(--mf1-color-bg-dark-hsl));
            color: hsl(var(--mf1-color-contrast-higher-hsl));
            cursor: pointer;
            line-height: 1.2;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transition: all 0.2s ease;
            will-change: transform;
            padding: var(--mf1-space-2xs) var(--mf1-space-sm);
            border-radius: 0.25em;
        }

        .mf1-btn:focus-visible {
            box-shadow: 0px 0px 0px 2px hsl(var(--mf1-color-bg-hsl)), 0px 0px 0px 4px hsla(var(--mf1-color-contrast-higher-hsl), 0.15);
            outline: none;
        }

        .mf1-btn:active {
            transform: translateY(2px);
        }

        .mf1-btn--primary {
            background: hsl(var(--mf1-color-primary-hsl));
            color: hsl(var(--mf1-color-white-hsl));
            box-shadow: inset 0px 1px 0px hsla(var(--mf1-color-white-hsl), 0.15), 0px 1px 3px hsla(var(--mf1-color-primary-darker-hsl), 0.25), 0px 2px 6px hsla(var(--mf1-color-primary-darker-hsl), 0.1), 0px 6px 10px -2px hsla(var(--mf1-color-primary-darker-hsl), 0.25);
        }

        .mf1-btn--primary:hover {
            background: hsl(var(--mf1-color-primary-light-hsl));
            box-shadow: inset 0px 1px 0px hsla(var(--mf1-color-white-hsl), 0.15), 0px 1px 2px hsla(var(--mf1-color-primary-darker-hsl), 0.25), 0px 1px 4px hsla(var(--mf1-color-primary-darker-hsl), 0.1), 0px 3px 6px -2px hsla(var(--mf1-color-primary-darker-hsl), 0.25);
        }

        .mf1-btn--primary:focus {
            box-shadow: inset 0px 1px 0px hsla(var(--mf1-color-white-hsl), 0.15), 0px 1px 2px hsla(var(--mf1-color-primary-darker-hsl), 0.25), 0px 1px 4px hsla(var(--mf1-color-primary-darker-hsl), 0.1), 0px 3px 6px -2px hsla(var(--mf1-color-primary-darker-hsl), 0.25), 0px 0px 0px 2px hsl(var(--mf1-color-bg-hsl)), 0px 0px 0px 4px hsl(var(--mf1-color-primary-hsl));
        }

        .mf1-btn--subtle {
            background: hsl(var(--mf1-color-bg-lighter-hsl));
            color: hsl(var(--mf1-color-contrast-higher-hsl));
            box-shadow: inset 0px 1px 0px hsla(var(--mf1-color-white-hsl), 0.1), 0px 0px 0px 1px hsla(var(--mf1-color-black-hsl), 0.02), 0px 1px 3px -1px hsla(var(--mf1-color-black-hsl), 0.2), 0 0.3px 0.4px rgba(0, 0, 0, 0.025),0 0.9px 1.5px rgba(0, 0, 0, 0.05), 0 3.5px 6px rgba(0, 0, 0, 0.1);
        }

        .mf1-btn--subtle:hover {
            background: hsl(var(--mf1-color-bg-light-hsl));
            box-shadow: inset 0px 1px 0px hsla(var(--mf1-color-white-hsl), 0.1), 0px 0px 0px 1px hsla(var(--mf1-color-black-hsl), 0.02), 0px 1px 3px -1px hsla(var(--mf1-color-black-hsl), 0.2), 0 0.1px 0.3px rgba(0, 0, 0, 0.06),0 1px 2px rgba(0, 0, 0, 0.12);
        }

        .mf1-btn--subtle:focus {
            box-shadow: inset 0px 1px 0px hsla(var(--mf1-color-white-hsl), 0.1), 0px 0px 0px 1px hsla(var(--mf1-color-black-hsl), 0.02), 0px 1px 3px -1px hsla(var(--mf1-color-black-hsl), 0.2), 0 0.1px 0.3px rgba(0, 0, 0, 0.06),0 1px 2px rgba(0, 0, 0, 0.12), 0px 0px 0px 2px hsl(var(--mf1-color-bg-hsl)), 0px 0px 0px 4px hsl(var(--mf1-color-contrast-high-hsl));
        }

        /* Header Component Styles */
        .header {
            height: var(--header-height);
            width: 100%;
            background-color: hsl(var(--mf1-color-bg-hsl));
            z-index: 3;
        }

        .header__container {
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header__logo {
            position: relative;
            z-index: 2;
            flex-shrink: 0;
        }

        .header__logo a, .header__logo svg, .header__logo img {
            display: block;
        }

        .header__nav {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            max-height: 100vh;
            background-color: hsl(var(--mf1-color-bg-hsl));
            box-shadow: 0 0.9px 1.5px rgba(0, 0, 0, 0.03),0 3.1px 5.5px rgba(0, 0, 0, 0.08),0 14px 25px rgba(0, 0, 0, 0.12);
            overflow: auto;
            -ms-scroll-chaining: none;
            overscroll-behavior: contain;
            -webkit-overflow-scrolling: touch;
            display: none;
        }

        .header__nav::before {
            content: "";
            display: block;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            height: var(--header-height);
            background: inherit;
            border-bottom: 1px solid hsl(var(--mf1-color-contrast-lower-hsl));
        }

        .header__nav--is-visible {
            display: block;
        }

        .header__nav-inner {
            padding: var(--mf1-space-md);
        }

        .header__label {
            font-size: var(--mf1-text-sm);
            color: hsl(var(--mf1-color-contrast-medium-hsl));
            margin-bottom: var(--mf1-space-sm);
        }

        .header__item {
            margin-bottom: var(--mf1-space-sm);
        }

        .header__link {
            font-size: var(--mf1-text-lg);
            color: hsl(var(--mf1-color-contrast-higher-hsl));
            text-decoration: none;
        }

        .header__link:hover, .header__link[aria-current] {
            color: hsl(var(--mf1-color-primary-hsl));
        }

        .header__nav-btn {
            font-size: var(--mf1-text-lg);
            width: 100%;
        }

        .header__item--divider {
            height: 1px;
            width: 100%;
            background-color: hsl(var(--mf1-color-contrast-lower-hsl));
        }

        .header__trigger {
            position: relative;
            z-index: 2;
        }

        .header__trigger-icon {
            position: relative;
            display: block;
            height: 2px;
            width: 1em;
            background-color: currentColor;
            margin-right: var(--mf1-space-2xs);
            transition: 0.2s;
        }

        .header__trigger-icon::before, .header__trigger-icon::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: inherit;
            height: inherit;
            background-color: currentColor;
            transition: 0.2s;
        }

        .header__trigger-icon::before {
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
        }

        .header__trigger-icon::after {
            -webkit-transform: translateY(5px);
            transform: translateY(5px);
        }

        .header__trigger[aria-expanded=true] .header__trigger-icon {
            background-color: transparent;
        }

        .header__trigger[aria-expanded=true] .header__trigger-icon::before {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .header__trigger[aria-expanded=true] .header__trigger-icon::after {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        /* Desktop Styles */
        @media (min-width: 64rem) {
            .header__nav {
                position: static;
                background-color: transparent;
                width: auto;
                max-height: none;
                box-shadow: none;
                overflow: visible;
                -ms-scroll-chaining: chained;
                overscroll-behavior: auto;
                display: block;
            }

            .header__nav::before {
                display: none;
            }

            .header__nav-inner {
                padding: 0;
            }

            .header__label {
                position: absolute;
                clip: rect(1px, 1px, 1px, 1px);
                -webkit-clip-path: inset(50%);
                clip-path: inset(50%);
            }

            .header__list {
                display: flex;
                align-items: center;
            }

            .header__item {
                display: inline-block;
                margin-bottom: 0;
                margin-left: var(--mf1-space-md);
            }

            .header__link, .header__nav-btn {
                font-size: 1.125rem;
            }

            .header__item--divider {
                height: 1em;
                width: 1px;
            }

            .header__trigger {
                display: none;
            }
        }

        /* Utility Classes */
        .mf1-max-width-lg {
            max-width: 80rem;
        }

        .mf1-container {
            width: calc(100% - 2*var(--mf1-space-md));
            margin-left: auto;
            margin-right: auto;
        }

        .mf1-position-relative {
            position: relative;
        }
    </style>
</head>

<body>
    <!-- Header HTML Structure -->
    <header class="header mf1-position-relative js-header">
        <div class="header__container mf1-container mf1-max-width-lg">
            <!-- Logo Section -->
            <div class="header__logo">
                <a href="#0">
                    <svg width="104" height="30" viewBox="0 0 104 30">
                        <title>Go to homepage</title>
                        <path d="M37.54 24.08V3.72h4.92v16.37h8.47v4zM60.47 24.37a7.82 7.82 0 01-5.73-2.25 8.36 8.36 0 01-2-5.62 8.32 8.32 0 012.08-5.71 8 8 0 015.64-2.18 8.07 8.07 0 015.68 2.2 8.49 8.49 0 012 5.69 8.63 8.63 0 01-1.78 5.38 7.6 7.6 0 01-5.89 2.49zm0-3.67c2.42 0 2.73-3 2.73-4.23s-.31-4.26-2.73-4.26-2.79 3-2.79 4.26.32 4.23 2.82 4.23zM95.49 24.37a7.82 7.82 0 01-5.73-2.25 8.36 8.36 0 01-2-5.62 8.32 8.32 0 012.08-5.71 8.4 8.4 0 0111.31 0 8.43 8.43 0 012 5.69 8.6 8.6 0 01-1.77 5.38 7.6 7.6 0 01-5.89 2.51zm0-3.67c2.42 0 2.73-3 2.73-4.23s-.31-4.26-2.73-4.26-2.8 3-2.8 4.26.31 4.23 2.83 4.23zM77.66 30c-5.74 0-7-3.25-7.23-4.52l4.6-.26c.41.91 1.17 1.41 2.76 1.41a2.45 2.45 0 002.82-2.53v-2.68a7 7 0 01-1.7 1.75 6.12 6.12 0 01-5.85-.08c-2.41-1.37-3-4.25-3-6.66 0-.89.12-3.67 1.45-5.42a5.67 5.67 0 014.64-2.4c1.2 0 3 .25 4.46 2.82V8.81h4.85v15.33a5.2 5.2 0 01-2.12 4.32A9.92 9.92 0 0177.66 30zm.15-9.66c2.53 0 2.81-2.69 2.81-3.91s-.31-4-2.81-4-2.81 2.8-2.81 4 .27 3.91 2.81 3.91zM55.56 3.72h9.81v2.41h-9.81z" fill="hsl(var(--mf1-color-contrast-higher-hsl))"/>
                        <circle cx="15" cy="15" r="15" fill="hsl(var(--mf1-color-primary-hsl))"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button class="mf1-btn mf1-btn--subtle header__trigger js-header__trigger" aria-label="Toggle menu" aria-expanded="false" aria-controls="header-nav">
                <i class="header__trigger-icon" aria-hidden="true"></i>
                <span>Menu</span>
            </button>

            <!-- Navigation Menu -->
            <nav class="header__nav js-header__nav" id="header-nav" role="navigation" aria-label="Main">
                <div class="header__nav-inner">
                    <div class="header__label">Main menu</div>
                    <ul class="header__list">
                        <li class="header__item"><a href="#0" class="header__link">About</a></li>
                        <li class="header__item"><a href="#0" class="header__link">Solutions</a></li>
                        <li class="header__item"><a href="#0" class="header__link" aria-current="page">Resources</a></li>
                        <li class="header__item"><a href="#0" class="header__link">Pricing</a></li>
                        <li class="header__item"><a href="#0" class="header__link">Contact</a></li>
                        <li class="header__item header__item--divider" aria-hidden="true"></li>
                        <li class="header__item"><a href="#0" class="header__nav-btn mf1-btn mf1-btn--primary">Download</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Header JavaScript -->
    <script>
        // Utility Functions
        if(!Util) function Util () {};

        Util.hasClass = function(el, className) {
            return el.classList.contains(className);
        };

        Util.addClass = function(el, className) {
            var classList = className.split(' ');
            el.classList.add(classList[0]);
            if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
        };

        Util.removeClass = function(el, className) {
            var classList = className.split(' ');
            el.classList.remove(classList[0]);
            if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
        };

        Util.toggleClass = function(el, className, bool) {
            if(bool) Util.addClass(el, className);
            else Util.removeClass(el, className);
        };

        // Main Header Functionality
        (function() {
            var mainHeader = document.getElementsByClassName('js-header');
            if( mainHeader.length > 0 ) {
                var trigger = mainHeader[0].getElementsByClassName('js-header__trigger')[0],
                    nav = mainHeader[0].getElementsByClassName('js-header__nav')[0];

                // Store the node that needs to receive focus when the mobile menu is closed 
                var focusMenu = false;

                // Detect click on nav trigger
                trigger.addEventListener("click", function(event) {
                    event.preventDefault();
                    toggleNavigation(!Util.hasClass(nav, 'header__nav--is-visible'));
                });

                // Listen for key events
                window.addEventListener('keyup', function(event){
                    // Listen for esc key
                    if( (event.keyCode && event.keyCode == 27) || (event.key && event.key.toLowerCase() == 'escape' )) {
                        // Close navigation on mobile if open
                        if(trigger.getAttribute('aria-expanded') == 'true' && isVisible(trigger)) {
                            focusMenu = trigger; // Move focus to menu trigger when menu is close
                            trigger.click();
                        }
                    }
                    // Listen for tab key
                    if( (event.keyCode && event.keyCode == 9) || (event.key && event.key.toLowerCase() == 'tab' )) {
                        // Close navigation on mobile if open when nav loses focus
                        if(trigger.getAttribute('aria-expanded') == 'true' && isVisible(trigger) && !document.activeElement.closest('.js-header')) trigger.click();
                    }
                });

                // Listen for resize
                var resizingId = false;
                window.addEventListener('resize', function() {
                    clearTimeout(resizingId);
                    resizingId = setTimeout(doneResizing, 500);
                });

                function doneResizing() {
                    if( !isVisible(trigger) && Util.hasClass(mainHeader[0], 'header--expanded')) toggleNavigation(false); 
                };
            }

            function isVisible(element) {
                return (element.offsetWidth || element.offsetHeight || element.getClientRects().length);
            };

            function toggleNavigation(bool) { // Toggle navigation visibility on small device
                Util.toggleClass(nav, 'header__nav--is-visible', bool);
                Util.toggleClass(mainHeader[0], 'header--expanded', bool);
                trigger.setAttribute('aria-expanded', bool);
                if(bool) { // Opening menu -> move focus to first element inside nav
                    nav.querySelectorAll('[href], input:not([disabled]), button:not([disabled])')[0].focus();
                } else if(focusMenu) {
                    focusMenu.focus();
                    focusMenu = false;
                }
            };
        }());
    </script>
</body>
</html>
