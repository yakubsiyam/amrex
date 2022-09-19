(function ($) {
    'use strict';
    // Navigation
    class MyNavigation extends HTMLElement {
        connectedCallback() {
            this.innerHTML = `
            <nav class="navbar navbar-expand-lg" id="navbar-gradient">
            <div class="container">
                <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo/logo.png" class="img-fluid"
                        alt="Therapy"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainav">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="mainav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Explore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://app.therapypms.com/" target="_blank">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>  
            `
        }
    }
    customElements.define('my-navigation', MyNavigation);
    const navLoc = location.href;
    const navMenu = document.querySelectorAll('#mainav .nav-link');
    const navMenuLength = navMenu.length;
    for (let i = 0; i < navMenuLength; i++) {
        if (navMenu[i].href == navLoc) {
            navMenu[i].className = "active";
        }
    }
    // Footer
    class MyFooter extends HTMLElement {
        connectedCallback() {
            this.innerHTML = `
            <div class="row justify-content-between">
            <div class="col-md-4 footer-single">
                <img src="assets/images/logo/logo.png" class="img-fluid" alt="therapy">
                <p class="footer-description">We have designed and built the smartest application for your establishment
                    in the health industry with flexibility to meet any of its unique needs.</p>
                <form action="#">
                    <label>STAY UPDATE WITH US</label>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn btn-danger" type="submit"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 footer-single">
                <h2 class="footer-title">Contact Info</h2>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="mailto:info@amrextherapypm.com"
                            target="_blank"><i class="far fa-envelope"></i>info@amrextherapypm.com
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="mailto:sales@amrextherapypm.com"
                            target="_blank"><i class="far fa-envelope"></i>sales@amrextherapypm.com
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="tel:(469) 215-1101"><i
                                class="fas fa-phone-alt"></i>(469) 215-1101
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="https://goo.gl/maps/nepLWKc2234sHL6j8"
                            target="_blank"><i class="fas fa-map-marker-alt"></i>4001 Stableglen DR Rockwall, TX
                            75032</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-single">
                <h2 class="footer-title">Our Company</h2>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="about.html"><i
                                class="fas fa-angle-right"></i>Explore
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html"><i
                                class="fas fa-angle-right"></i>FAQ</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="service.html"><i
                                class="fas fa-angle-right"></i>Services</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html"><i
                                class="fas fa-angle-right"></i>Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="term.html"><i
                                class="fas fa-angle-right"></i>Terms</a></li>
                </ul>
            </div>
        </div>
            `
        }
    }
    customElements.define('my-footer', MyFooter);
})(jQuery);