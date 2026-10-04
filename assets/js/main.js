// Marketing Safalta Interactive Scripts
(function() {
    'use strict';

    // 1. Mobile Hamburger Menu Toggle
    var hamburger = document.getElementById('ms-hamburger');
    var slideMenu = document.getElementById('ms-slide-menu');
    var backdrop = document.getElementById('ms-backdrop');
    var closeBtn = document.getElementById('ms-slide-close');
    var navbar = document.getElementById('ms-navbar');

    function openMenu() {
        if (slideMenu) slideMenu.classList.add('open');
        if (backdrop) backdrop.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        if (slideMenu) slideMenu.classList.remove('open');
        if (backdrop) backdrop.classList.remove('show');
        document.body.style.overflow = '';
    }

    if (hamburger) hamburger.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (backdrop) backdrop.addEventListener('click', closeMenu);

    // Close menu when clicking slide nav links
    var slideLinks = document.querySelectorAll('.ms-slide-nav a');
    slideLinks.forEach(function(link) {
        link.addEventListener('click', closeMenu);
    });

    // 2. Navbar Scroll Effect
    window.addEventListener('scroll', function() {
        if (!navbar) return;
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 3. Hide Sticky Bar Near Footer
    var stickyBar = document.getElementById('ms-sticky-bar');
    if (stickyBar) {
        window.addEventListener('scroll', function() {
            var scrollY = window.scrollY || window.pageYOffset;
            var winH = window.innerHeight;
            var docH = document.documentElement.scrollHeight;
            if (scrollY + winH >= docH - 120) {
                stickyBar.style.display = 'none';
            } else {
                stickyBar.style.display = 'block';
            }
        });
    }

    // 4. FAQ Accordion Toggle
    window.toggleFaq = function(el) {
        var isActive = el.classList.contains('active');
        document.querySelectorAll('.ms-faq-item').forEach(function(item) {
            item.classList.remove('active');
        });
        if (!isActive) el.classList.add('active');
    };

    // 5. Smooth Scroll-Triggered Counting Animation for Stats
    function runCounterAnimation() {
        var counters = document.querySelectorAll('.ms-stat-num[data-target]');
        if (!counters.length) return;

        var observer = new IntersectionObserver(function(entries, obs) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    var target = parseFloat(el.getAttribute('data-target'));
                    var suffix = el.getAttribute('data-suffix') || '';
                    var decimals = parseInt(el.getAttribute('data-decimal') || '0', 10);
                    var duration = 2000;
                    var startTime = null;

                    function step(timestamp) {
                        if (!startTime) startTime = timestamp;
                        var elapsed = timestamp - startTime;
                        var progress = Math.min(elapsed / duration, 1);
                        var ease = 1 - Math.pow(1 - progress, 3);
                        var current = (target * ease).toFixed(decimals);

                        el.textContent = current + suffix;

                        if (progress < 1) {
                            window.requestAnimationFrame(step);
                        } else {
                            el.textContent = (decimals > 0 ? target.toFixed(decimals) : target) + suffix;
                        }
                    }

                    window.requestAnimationFrame(step);
                    obs.unobserve(el);
                }
            });
        }, { threshold: 0.15 });

        counters.forEach(function(counter) {
            observer.observe(counter);
        });
    }

    // 6. Contact Form Submission (Client-side validation & success message)
    var contactForm = document.querySelector('.wpcf7-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var name = (contactForm.querySelector('[name="your-name"]') || {}).value || '';
            var email = (contactForm.querySelector('[name="your-email"]') || {}).value || '';
            var responseOutput = contactForm.querySelector('.wpcf7-response-output');
            
            if (responseOutput) {
                responseOutput.style.display = 'block';
                responseOutput.style.padding = '12px 16px';
                responseOutput.style.marginTop = '15px';
                responseOutput.style.borderRadius = '8px';
                responseOutput.style.background = 'rgba(168, 85, 247, 0.2)';
                responseOutput.style.border = '1px solid var(--ms-purple, #a855f7)';
                responseOutput.style.color = '#fff';
                responseOutput.textContent = 'Thank you, ' + (name ? name : '') + '! Your request has been received. We will get back to you shortly.';
            }
            contactForm.reset();
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', runCounterAnimation);
    } else {
        runCounterAnimation();
    }
})();
