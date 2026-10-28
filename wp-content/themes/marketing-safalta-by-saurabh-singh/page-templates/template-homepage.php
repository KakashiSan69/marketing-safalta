<?php
/*
 * Template Name: Homepage
 */
get_header(); ?>

<!-- ===== HERO SECTION ===== -->
<section class="ms-hero" id="home">
    <div class="ms-hero-red-bg"></div>
    <div class="ms-hero-inner">
        <!-- Left Content -->
        <div class="ms-hero-left">
            <h1 style="margin-bottom: 12px;"><span class="highlight">Digital Marketing</span></h1>
            <div class="ms-hero-typewriter-wrap" style="margin: 0 0 28px; min-height: 60px; display: flex; align-items: center; flex-wrap: wrap;">
                <span id="hero-typewriter" class="ms-typewriter-text" style="font-size: 46px; font-weight: 900; line-height: 1.15; color: #ffffff; text-shadow: 0 0 25px rgba(255, 255, 255, 0.4), 0 2px 10px rgba(0, 0, 0, 0.6); letter-spacing: -0.8px;">Services in India</span>
                <span class="ms-typewriter-cursor" style="display: inline-block; width: 4px; height: 46px; background-color: #ffffff; margin-left: 6px; vertical-align: middle; animation: blinkCursor 0.8s infinite; box-shadow: 0 0 14px rgba(255, 255, 255, 0.8);"></span>
            </div>
            <p class="ms-hero-desc">We Help Businesses Grow Online With <strong>SEO, Google Ads, Meta Ads</strong>, <strong>Social Media Marketing</strong> &amp; <strong>High-Converting Websites</strong>.</p>

            <!-- Hero Video Section (Tap to Play) -->
            <div class="ms-hero-video-wrapper">
                <div class="ms-hero-video-container" id="heroVideoContainer" onclick="playHeroVideo()">
                    <div class="ms-hero-video-poster" id="heroVideoPoster">
                        <img src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/hero-media/hero-video-thumbnail.webp" alt="Marketing Safalta - Digital Marketing Services" class="ms-hero-video-thumb" width="1024" height="576" loading="eager" fetchpriority="high" decoding="async">
                        <button type="button" class="ms-hero-play-btn" aria-label="Play Video">
                            <svg viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </button>
                    </div>
                    <video id="heroVideo" class="ms-hero-video-player" playsinline preload="none" controls>
                        <source src="<?php echo esc_url(site_url()); ?>/assets/videos/hero-video.mp4" type="video/mp4">
                        <source src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/hero-media/hero-video.mp4" type="video/mp4">
                        <source src="<?php echo esc_url(site_url()); ?>/assets/videos/video%2017.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <script>
            function playHeroVideo() {
                var poster = document.getElementById('heroVideoPoster');
                var video = document.getElementById('heroVideo');
                var playBtn = document.querySelector('.ms-hero-play-btn');
                if (!video) return;

                if (playBtn) {
                    playBtn.classList.add('loading');
                }
                video.style.display = 'block';
                video.controls = true;

                var hasStarted = false;
                function hidePoster() {
                    if (!hasStarted && poster) {
                        hasStarted = true;
                        poster.classList.add('playing');
                    }
                }

                video.addEventListener('playing', hidePoster, { once: true });
                video.addEventListener('timeupdate', hidePoster, { once: true });
                video.addEventListener('canplaythrough', hidePoster, { once: true });
                setTimeout(hidePoster, 500);

                var playPromise = video.play();
                if (playPromise !== undefined) {
                    playPromise.catch(function(err) {
                        console.log("Hero video play error:", err);
                        hidePoster();
                    });
                }
            }
            </script>

            <div class="ms-service-chips">
                <span class="ms-chip red">Google Ads</span>
                <span class="ms-chip red">SEO</span>
                <span class="ms-chip red">Meta Ads</span>
                <span class="ms-chip red">Website Development</span>
                <span class="ms-chip red">Social Media Marketing</span>
            </div>


            <div class="ms-hero-trust">
                <div class="ms-trust-item">
                    <span class="ms-trust-dot">
                        <svg viewBox="0 0 24 24">
                            <path fill="white" d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg>
                    </span>
                    Free Strategy Session
                </div>
                <div class="ms-trust-item">
                    <span class="ms-trust-dot">
                        <svg viewBox="0 0 24 24">
                            <path fill="white" d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg>
                    </span>
                    Guaranteed Results
                </div>
                <div class="ms-trust-item">
                    <span class="ms-trust-dot">
                        <svg viewBox="0 0 24 24">
                            <path fill="white" d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg>
                    </span>
                    3X ROI
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ===== STATS BAR ===== -->
<section class="ms-stats-bar">
    <div class="ms-stats-grid">
        <div class="ms-stat-box">
            <div class="ms-stat-num" data-target="300" data-suffix="+" data-decimal="0">0+</div>
            <div class="ms-stat-label">Clients Served</div>
        </div>
        <div class="ms-stat-box">
            <div class="ms-stat-num" data-target="45" data-suffix="+" data-decimal="0">0+</div>
            <div class="ms-stat-label">Active Clients</div>
        </div>
        <div class="ms-stat-box">
            <div class="ms-stat-num" data-target="5" data-suffix="k+" data-decimal="0">0k+</div>
            <div class="ms-stat-label">Leads Generated</div>
        </div>
        <div class="ms-stat-box">
            <div class="ms-stat-num" data-target="99.9" data-suffix="%" data-decimal="1">0.0%</div>
            <div class="ms-stat-label">Success Rate</div>
        </div>
    </div>
</section>

<!-- ===== CERTIFIED PARTNERS SECTION ===== -->
<section class="ms-partners-section">
    <div class="ms-partners-container">
        <div class="ms-partners-grid">
            <!-- Meta Certified Partner Card -->
            <div class="ms-partner-card">
                <div class="ms-partner-logo-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/meta-partner.png" alt="Meta Certified Partner" loading="lazy">
                </div>
                <h3>Meta Certified Partner</h3>
                <hr class="ms-partner-divider">
                <p class="ms-partner-desc">Trusted Partner for Meta (Facebook &amp; Instagram)</p>
            </div>

            <!-- Certified Google Partner Card -->
            <div class="ms-partner-card">
                <div class="ms-partner-logo-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/google-ads-partner.png" alt="Google Ads Certified Partner" loading="lazy">
                </div>
                <h3>Certified Google Partner</h3>
                <hr class="ms-partner-divider">
                <p class="ms-partner-desc">Certified Google Ads Specialist for Businesses Campaigns.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== MEDIA / NEWS BAR ===== -->
<div class="ms-media-bar">
    <div class="ms-media-bar-inner">
        <div class="ms-media-label">
            <span>Our Client</span>
        </div>
        <div class="ms-media-logos">
            <div class="ms-media-track" id="ms-media-track">
                <?php
                $client_logos = [
                    '/wp-content/uploads/2026/08/zusman-1-1-1-p05d0kvoronbhdhgyyksfjlad95ompjjhrf02hd4lg.png',
                    '/wp-content/uploads/2026/08/x.venox_-1-1-1-p05crfw6bo4ylurcc0dd6ulyge77sn9hkj323mwx38.png',
                    '/wp-content/uploads/2026/08/mapmaster-1-2-p05crr68lokeh6ayi58w0rrhl0nmd0i9m2wvuyg70k.png',
                    '/wp-content/uploads/2026/08/madrin-1-2-p05ct41uh2fb8wbykqdhmffgh1yph9wb4su4tcfq10.png',
                    '/wp-content/uploads/2026/08/fifthflour-1-2-p05cufzm5m8xp0ebst3gnlbyrpefdu6mbe3waggn7o.png',
                    '/wp-content/uploads/2026/08/darkside-1-2-p05cw37g46i00g0b70oyioe06zajurppjj7hiw0ubo.png'
                ];
                foreach ($client_logos as $logo) {
                    echo '<img src="' . esc_url(site_url()) . esc_attr($logo) . '" alt="Client Logo" loading="lazy">';
                }
                // Duplicate for seamless scroll
                foreach ($client_logos as $logo) {
                    echo '<img src="' . esc_url(site_url()) . esc_attr($logo) . '" alt="Client Logo" loading="lazy">';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- ===== WHY CHOOSE SECTION ===== -->
<section class="ms-section" id="why-choose-us" style="background-color: var(--ms-surface);">
    <div class="ms-container" style="text-align: center;">
        <div class="ms-section-tag">Why Choose Us</div>
        <h2 class="ms-section-title">Why Choose Us <span class="red">Marketing Safalta</span></h2>
        <p class="ms-section-desc" style="margin: 20px auto 0; max-width: 900px;">
            Choosing the right digital marketing partner can feel overwhelming. Many companies promise the moon, but few deliver tangible results. At Marketing Safalta, led by Raj Thakur, our focus is always on your business growth. We believe in clear strategies, honest communication, and delivering real leads and sales.<br><br>
            Our goal isn't just to manage your ads or social media. We aim to be an extension of your team, providing the expertise needed to scale your online presence. From Google Ads to SEO, every service is designed with one purpose: to help your business succeed online.
        </p>
    </div>

    <div class="ms-why-grid-2">
        <div class="ms-why-card">
            <div class="ms-why-icon"><i class="fas fa-briefcase"></i></div>
            <div class="ms-why-title" style="font-size: 20px; margin-bottom: 16px;">Experienced & Practical Digital Marketing</div>
            <div class="ms-why-desc" style="font-size: 15px; line-height: 1.7;">
                <p style="margin-bottom: 12px;">Raj Thakur brings years of hands-on experience to every project. This isn't theoretical knowledge; it's practical insight gained from working with diverse businesses across various industries. We understand that every business is unique, and a one-size-fits-all approach simply doesn't work.</p>
                <p>This practical knowledge extends across our full suite of services, including Google Ads, Facebook & Instagram Ads, SEO, social media marketing, and lead generation. We build strategies that have been proven to work in the real world, not just in textbooks. Our team stays updated on the latest digital trends and algorithm changes, ensuring your campaigns are always optimized for performance.</p>
            </div>
        </div>

        <div class="ms-why-card">
            <div class="ms-why-icon"><i class="fas fa-chart-line"></i></div>
            <div class="ms-why-title" style="font-size: 20px; margin-bottom: 16px;">Result-Oriented Strategies Focused on Growth</div>
            <div class="ms-why-desc" style="font-size: 15px; line-height: 1.7;">
                <p style="margin-bottom: 12px;">Marketing Safalta doesn't just run campaigns; we build strategies aimed at clear, measurable outcomes. Our primary focus is always on generating more leads, sales, and overall business growth for you. Before launching any campaign, we define specific goals and key performance indicators (KPIs) to track our progress.</p>
                <p>We regularly analyze data, making adjustments to improve performance and ensure your marketing budget is working as hard as possible. You'll see exactly how our efforts translate into real business value, not just clicks or impressions. Our reporting is straightforward, showing you the impact on your bottom line.</p>
            </div>
        </div>

        <div class="ms-why-card">
            <div class="ms-why-icon"><i class="fas fa-bullseye"></i></div>
            <div class="ms-why-title" style="font-size: 20px; margin-bottom: 16px;">Customized Marketing Solutions for Your Business</div>
            <div class="ms-why-desc" style="font-size: 15px; line-height: 1.7;">
                <p style="margin-bottom: 12px;">Your business has unique challenges and opportunities. That's why we never offer generic packages. Instead, we take the time to understand your specific needs, target audience, and business objectives. We then craft a customized digital marketing solution that aligns perfectly with your goals.</p>
                <p>Whether you need to boost local visibility with SEO, drive immediate sales with Google Ads, or build brand awareness through social media, we design a tailored plan. This personalized approach ensures that every dollar you invest is targeted effectively, maximizing your return.</p>
            </div>
        </div>

        <div class="ms-why-card">
            <div class="ms-why-icon"><i class="fas fa-comments"></i></div>
            <div class="ms-why-title" style="font-size: 20px; margin-bottom: 16px;">Transparent Communication & Education</div>
            <div class="ms-why-desc" style="font-size: 15px; line-height: 1.7;">
                <p style="margin-bottom: 12px;">We believe in complete transparency. You'll always know what we're doing, why we're doing it, and what results we're achieving. Our communication is open and honest, providing regular updates and easy-to-understand reports. You're never left in the dark about your marketing performance.</p>
                <p>Furthermore, Raj Thakur is committed to empowering business owners through education. His dedicated YouTube channel features regular videos sharing valuable digital marketing tips, tricks, strategies, and practical knowledge. This resource helps you understand the 'why' behind our methods and even pick up skills to improve your own online marketing efforts. It's an extension of our commitment to your success.</p>
            </div>
        </div>
    </div>

    <div style="margin-top: 40px; max-width: 1000px; width: 92%; margin-left: auto; margin-right: auto; background: var(--ms-card-bg); border-left: 4px solid var(--ms-purple); border: 1px solid var(--ms-border); padding: 24px; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        <p style="margin: 0; font-weight: 600; color: var(--ms-ink); font-size: 18px; line-height: 1.6; text-align: center;">Choosing Marketing Safalta means partnering with a team that genuinely cares about your growth. We combine expert knowledge with a client-first approach, ensuring you receive professional, results-driven service. Let us help you unlock your business's full online potential.</p>
    </div>
    </div>
</section>

<!-- ===== SERVICES SECTION ===== -->
<section class="ms-section" style="background: url('<?php echo esc_url(site_url()); ?>/wp-content/uploads/2026/08/marketing-img-4.jpg') center center / cover fixed no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.70); z-index: 1;"></div>
    <div class="ms-container" style="position: relative; z-index: 2;">
        <div style="text-align:center; margin-bottom: 56px;">
            <div class="ms-section-tag" style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2); backdrop-filter: blur(8px);">Our Services</div>
            <h2 class="ms-section-title" style="color: #fff; text-shadow: 0 4px 20px rgba(0,0,0,0.6);">All-in-One <span class="red" style="text-shadow: none;">Digital Marketing Services</span></h2>
        </div>
        <div class="ms-cards-grid">
            <div class="ms-service-card">
                <div class="ms-card-icon"><i class="fas fa-search"></i></div>
                <div class="ms-card-title">01. SEO Services</div>
                <div class="ms-card-desc">Organic ranking growth through technical, on-page & content SEO.</div>
            </div>
            <div class="ms-service-card">
                <div class="ms-card-icon"><i class="fas fa-search-dollar"></i></div>
                <div class="ms-card-title">02. Google Ads Management</div>
                <div class="ms-card-desc">Performance-driven search & display campaigns focused on ROI.</div>
            </div>
            <div class="ms-service-card">
                <div class="ms-card-icon"><i class="fas fa-bullseye"></i></div>
                <div class="ms-card-title">03. Meta Ads (FB & Instagram)</div>
                <div class="ms-card-desc">Targeted Facebook & Instagram ad campaigns that convert.</div>
            </div>
            <div class="ms-service-card">
                <div class="ms-card-icon"><i class="fas fa-share-alt"></i></div>
                <div class="ms-card-title">04. Social Media Marketing</div>
                <div class="ms-card-desc">Content, community & paid social that builds real engagement.</div>
            </div>
            <div class="ms-service-card">
                <div class="ms-card-icon"><i class="fas fa-laptop-code"></i></div>
                <div class="ms-card-title">05. Website Design & Development</div>
                <div class="ms-card-desc">Fast, conversion-focused websites built to turn visitors into leads.</div>
            </div>
            <div class="ms-service-card">
                <div class="ms-card-icon"><i class="fas fa-pen-nib"></i></div>
                <div class="ms-card-title">06. Content Marketing</div>
                <div class="ms-card-desc">Blogs, videos & copy that build authority and drive traffic.</div>
            </div>
            <div class="ms-service-card">
                <div class="ms-card-icon"><i class="fas fa-envelope-open-text"></i></div>
                <div class="ms-card-title">07. Email Marketing</div>
                <div class="ms-card-desc">Automated flows and campaigns that nurture and convert.</div>
            </div>
            <div class="ms-service-card">
                <div class="ms-card-icon"><i class="fas fa-star"></i></div>
                <div class="ms-card-title">08. Reputation Management</div>
                <div class="ms-card-desc">Review & sentiment management to protect and grow brand trust.</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="ms-section ms-testi-section" id="testimonials">
    <div class="ms-container">
        <div style="text-align:center; margin-bottom: 48px;">
            <div class="ms-section-tag">Client Reviews</div>
            <h2 class="ms-section-title">What Clients Say About<br><span class="red">Marketing Safalta</span></h2>
            <p class="ms-section-desc" style="margin: 0 auto; text-align:center;">Join 500+ businesses who trust Marketing Safalta to take their results to the next level.</p>
        </div>

        <div class="ms-testi-marquee-container">
            <div class="ms-testi-track">
                <?php
                // Store cards HTML in a variable to print it twice for seamless infinite scroll
                ob_start();
                ?>
                <div class="ms-testi-card-wrap">
                    <div class="ms-testi-card" style="height: 100%;">
                        <div class="ms-testi-quote">"</div>
                        <div class="ms-testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="ms-testi-text">Our real estate business had 0 leads from ads. Marketing Safalta scaled us to 250+ quality leads/month within 60 days! Truly India's best Google Ads expert.</div>
                        <div class="ms-testi-author">
                            <div class="ms-testi-avatar">S</div>
                            <div>
                                <div class="ms-testi-name">Sahil Mehta</div>
                                <div class="ms-testi-role">Real Estate Developer, Delhi</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-testi-card-wrap">
                    <div class="ms-testi-card" style="height: 100%;">
                        <div class="ms-testi-quote">"</div>
                        <div class="ms-testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="ms-testi-text">Our Google Ads account was suspended. Marketing Safalta not only reactivated it in 7 days but also launched campaigns that now bring 3X more ROI than before.</div>
                        <div class="ms-testi-author">
                            <div class="ms-testi-avatar">P</div>
                            <div>
                                <div class="ms-testi-name">Pooja Sharma</div>
                                <div class="ms-testi-role">E-commerce Store Owner, Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-testi-card-wrap">
                    <div class="ms-testi-card" style="height: 100%;">
                        <div class="ms-testi-quote">"</div>
                        <div class="ms-testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="ms-testi-text">As an EdTech startup, we needed quality student leads fast. Marketing Safalta delivered 500+ enrolled students in just 3 months. Absolutely game-changing!</div>
                        <div class="ms-testi-author">
                            <div class="ms-testi-avatar">R</div>
                            <div>
                                <div class="ms-testi-name">Rahul Singh</div>
                                <div class="ms-testi-role">EdTech Founder, Bangalore</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-testi-card-wrap">
                    <div class="ms-testi-card" style="height: 100%;">
                        <div class="ms-testi-quote">"</div>
                        <div class="ms-testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="ms-testi-text">We reduced our cost-per-lead by 65% while doubling our lead volume. The team is data-driven, transparent and genuinely invested in our success.</div>
                        <div class="ms-testi-author">
                            <div class="ms-testi-avatar">A</div>
                            <div>
                                <div class="ms-testi-name">Anita Verma</div>
                                <div class="ms-testi-role">Healthcare Brand, Hyderabad</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-testi-card-wrap">
                    <div class="ms-testi-card" style="height: 100%;">
                        <div class="ms-testi-quote">"</div>
                        <div class="ms-testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="ms-testi-text">From zero to hero — Marketing Safalta helped us scale from ₹50K/month to ₹5L/month in revenue within 4 months of partnering. Truly incredible results.</div>
                        <div class="ms-testi-author">
                            <div class="ms-testi-avatar">K</div>
                            <div>
                                <div class="ms-testi-name">Karan Joshi</div>
                                <div class="ms-testi-role">Fashion Brand Founder, Jaipur</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-testi-card-wrap">
                    <div class="ms-testi-card" style="height: 100%;">
                        <div class="ms-testi-quote">"</div>
                        <div class="ms-testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="ms-testi-text">Best investment we've ever made. Our travel business went from struggling to fully booked within 3 months. Marketing Safalta knows Google Ads like no one else.</div>
                        <div class="ms-testi-author">
                            <div class="ms-testi-avatar">M</div>
                            <div>
                                <div class="ms-testi-name">Meena Iyer</div>
                                <div class="ms-testi-role">Travel Agency, Chennai</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $cards_html = ob_get_clean();
                // Output 4 times to ensure it covers very wide screens seamlessly
                echo $cards_html;
                echo $cards_html;
                echo $cards_html;
                echo $cards_html;
                ?>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ SECTION ===== -->
<section class="ms-section" style="background: var(--ms-base);" id="faq">
    <div class="ms-container">
        <div style="text-align:center; margin-bottom: 48px;">
            <div class="ms-section-tag">FAQ</div>
            <h2 class="ms-section-title">Frequently Asked<br><span class="red">Questions</span></h2>
        </div>
        <div style="max-width: 860px; margin: 0 auto;">
            <div class="ms-faq-item" onclick="toggleFaq(this)">
                <div class="ms-faq-question">
                    What is Google Ads and how can it grow my business?
                    <span class="ms-faq-icon">+</span>
                </div>
                <div class="ms-faq-answer">Google Ads is the world's largest paid advertising platform that lets you show your business to people actively searching for your products or services. With the right strategy, it can deliver immediate, measurable results — targeted leads, calls, and sales — on a budget you control.</div>
            </div>
            <div class="ms-faq-item" onclick="toggleFaq(this)">
                <div class="ms-faq-question">
                    How much does it cost to run Google Ads with Marketing Safalta?
                    <span class="ms-faq-icon">+</span>
                </div>
                <div class="ms-faq-answer">Our management fees are flexible based on your ad budget and campaign complexity. We work with budgets starting from ₹20,000/month and scale up to crores. Book a free strategy call and we'll give you a personalized quote with a projected ROI estimate.</div>
            </div>
            <div class="ms-faq-item" onclick="toggleFaq(this)">
                <div class="ms-faq-question">
                    How quickly can I see results with Google Ads?
                    <span class="ms-faq-icon">+</span>
                </div>
                <div class="ms-faq-answer">Google Ads can deliver results within the first 24-48 hours of going live. However, optimal performance is typically achieved within the first 30-60 days as we continuously optimize targeting, bids, and ad copies based on real data and performance metrics.</div>
            </div>
            <div class="ms-faq-item" onclick="toggleFaq(this)">
                <div class="ms-faq-question">
                    Can Marketing Safalta fix my suspended Google Ads account?
                    <span class="ms-faq-icon">+</span>
                </div>
                <div class="ms-faq-answer">Yes! We have a specialized account recovery process and have successfully reactivated 9 out of 10 suspended accounts. Our experts identify the exact suspension reason, fix all policy violations, and submit a detailed appeal with supporting documentation for the best chance of reinstatement.</div>
            </div>
            <div class="ms-faq-item" onclick="toggleFaq(this)">
                <div class="ms-faq-question">
                    Do you provide monthly reports and performance updates?
                    <span class="ms-faq-icon">+</span>
                </div>
                <div class="ms-faq-answer">Absolutely. We believe in 100% transparency. You receive detailed monthly reports showing impressions, clicks, conversions, cost-per-lead, and ROI. We also schedule regular strategy calls to review performance and plan optimizations together.</div>
            </div>
            <div class="ms-faq-item" onclick="toggleFaq(this)">
                <div class="ms-faq-question">
                    Which industries do you work with?
                    <span class="ms-faq-icon">+</span>
                </div>
                <div class="ms-faq-answer">We've worked across 20+ industries including Real Estate, Education, Healthcare, E-Commerce, Travel, Finance, Legal, Manufacturing, FMCG, Fashion, and more. Our data-driven approach works for any business that wants quality leads and measurable growth.</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== RECENT BLOGS SECTION ===== -->
<section class="ms-section" style="background: var(--ms-surface);" id="blog">
    <div class="ms-container">
        <div style="text-align:center; margin-bottom: 48px;">
            <div class="ms-section-tag">Our Blog</div>
            <h2 class="ms-section-title">Latest Insights & <span class="red">Strategies</span></h2>
        </div>

        <div class="ms-blog-grid">
            <?php
            $blog_args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish'
            );
            $blog_query = new WP_Query($blog_args);
            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
            ?>
                    <?php get_template_part('template-parts/content', 'post'); ?>
                <?php

                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p style="text-align:center; width:100%; color:var(--ms-gray);">No blog posts found.</p>
            <?php endif; ?>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="ms-btn-outline">View All Posts</a>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section class="ms-cta-section" id="contact">
    <div class="ms-container">
        <div class="ms-cta-grid">
            <div class="ms-cta-left">
                <h2>Get More Customers for Your Business<br>with SEO, Google Ads &amp; Meta Ads</h2>
                <p>Book your FREE 30-minute strategy session with India's #1 Google Ads Expert.<br>Zero commitment. 100% value. Real strategies for your business.</p>
                <div class="ms-cta-btns">
                    <a href="https://calendar.marketingsafalta.com/v3/free-digital-marketing-strategy-call/consultation" class="ms-btn-white">Book Free Strategy Call</a>
                    <a href="https://wa.me/916388910079" target="_blank" class="ms-btn-whatsapp-outline">
                        <i class="fab fa-whatsapp"></i> WhatsApp Us
                    </a>
                </div>
            </div>

            <div class="ms-cta-right">
                <div class="ms-cta-form-box">
                    <h3>Request a Call Back</h3>
                    <p>Fill out the form below and our team will get in touch with you shortly.</p>
                    <div class="ms-cf7-wrapper">
                        <?php echo do_shortcode('[contact-form-7 id="61af0f6" title="Main Contact Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFaq(el) {
        var isActive = el.classList.contains('active');
        document.querySelectorAll('.ms-faq-item').forEach(function(item) {
            item.classList.remove('active');
        });
        if (!isActive) el.classList.add('active');
    }

    // ===== STATS COUNTING ANIMATION =====
    (function() {
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
                            // Smooth easeOutCubic
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

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', runCounterAnimation);
        } else {
            runCounterAnimation();
        }

        // Dynamic Typewriter Effect for Hero Section
        var typewriterEl = document.getElementById('hero-typewriter');
        if (typewriterEl) {
            var phrases = [
                "Services in India",
                "Guaranteed Results",
                "500+ Client Portfolio",
                "92%+ Retention Ratio",
                "10 Cr+ Budget Handled"
            ];
            var phraseIndex = 0;
            var charIndex = 0;
            var isDeleting = false;
            var typingSpeed = 85;
            var deletingSpeed = 45;
            var pauseEnd = 1800;
            var pauseStart = 400;

            function typeLoop() {
                var currentPhrase = phrases[phraseIndex];

                if (isDeleting) {
                    charIndex--;
                    typewriterEl.textContent = currentPhrase.substring(0, charIndex);
                } else {
                    charIndex++;
                    typewriterEl.textContent = currentPhrase.substring(0, charIndex);
                }

                var delta = isDeleting ? deletingSpeed : typingSpeed;

                if (!isDeleting && charIndex === currentPhrase.length) {
                    delta = pauseEnd;
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                    delta = pauseStart;
                }

                setTimeout(typeLoop, delta);
            }

            setTimeout(typeLoop, 500);
        }
    })();
</script>

<?php get_footer(); ?>
