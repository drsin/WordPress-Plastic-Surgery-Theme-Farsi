<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
$uri = get_template_directory_uri();
?>
<main class="site-main">
    <section class="hero-home">
        <div class="container hero-grid">
            <div class="hero-copy">
                <span class="eyebrow">Beauty Surgery</span>
                <h1>Natural Beauty, More Confidence</h1>
                <p>Professional clinic with experienced team and latest technology for your beauty needs.</p>
                <div class="hero-actions">
                    <a href="#contact" class="button">Request Consultation</a>
                    <a href="#services" class="button button-secondary">View Services</a>
                </div>
                <ul class="hero-points">
                    <li>15+ Years Experience</li>
                    <li>Expert Surgeons</li>
                    <li>Natural Results</li>
                </ul>
            </div>
            <div class="hero-visual">
                <div class="hero-card">
                    <img src="<?php echo esc_url($uri . '/assets/images/hero-clinic.svg'); ?>" alt="Clinic">
                </div>
                <div class="hero-badge badge-1">4.9/5 Rating</div>
                <div class="hero-badge badge-2">+12,000 Patients</div>
            </div>
        </div>
    </section>

    <section class="section stats-section">
        <div class="container stats-grid">
            <div class="stat-item"><strong>12k+</strong><span>Happy Patients</span></div>
            <div class="stat-item"><strong>15+</strong><span>Years Experience</span></div>
            <div class="stat-item"><strong>20+</strong><span>Treatment Methods</span></div>
            <div class="stat-item"><strong>98%</strong><span>Patient Satisfaction</span></div>
        </div>
    </section>

    <section id="services" class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Our Services</span>
                <h2>Professional Beauty Treatments</h2>
            </div>
            <div class="services-grid">
                <article class="service-card">
                    <div class="icon-box">✦</div>
                    <h3>Blepharoplasty</h3>
                    <p>Under-eye bags removal and eye rejuvenation.</p>
                    <a href="#contact">Learn More</a>
                </article>
                <article class="service-card">
                    <div class="icon-box">✦</div>
                    <h3>Facelift</h3>
                    <p>Skin tightening and facial rejuvenation.</p>
                    <a href="#contact">Learn More</a>
                </article>
                <article class="service-card">
                    <div class="icon-box">✦</div>
                    <h3>Rhinoplasty</h3>
                    <p>Nose reshaping with natural results.</p>
                    <a href="#contact">Learn More</a>
                </article>
                <article class="service-card">
                    <div class="icon-box">✦</div>
                    <h3>Filler & Botox</h3>
                    <p>Non-surgical facial rejuvenation.</p>
                    <a href="#contact">Learn More</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container about-grid">
            <div class="about-image-wrap">
                <img src="<?php echo esc_url($uri . '/assets/images/consultation.svg'); ?>" alt="Consultation">
            </div>
            <div class="about-copy">
                <span class="eyebrow">About Us</span>
                <h2>Your Beauty, Our Priority</h2>
                <p>With professional expertise and latest technology, we provide personalized beauty solutions for each patient.</p>
                <ul class="check-list">
                    <li>Expert Consultation</li>
                    <li>Modern Technology</li>
                    <li>Professional Follow-up</li>
                    <li>Experienced Team</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Results Gallery</span>
                <h2>Before & After Examples</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="<?php echo esc_url($uri . '/assets/images/before-after-face.svg'); ?>" alt="Results"></div>
                <div class="gallery-item"><img src="<?php echo esc_url($uri . '/assets/images/before-after-profile.svg'); ?>" alt="Results"></div>
                <div class="gallery-item"><img src="<?php echo esc_url($uri . '/assets/images/patient-care.svg'); ?>" alt="Results"></div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Our Team</span>
                <h2>Expert Specialists</h2>
            </div>
            <div class="team-grid">
                <article class="team-card">
                    <img src="<?php echo esc_url($uri . '/assets/images/doctor-sara.svg'); ?>" alt="Dr Sara">
                    <div class="team-card-body">
                        <h3>Dr Sara Ahmadi</h3>
                        <p>Plastic Surgeon</p>
                    </div>
                </article>
                <article class="team-card">
                    <img src="<?php echo esc_url($uri . '/assets/images/doctor-amir.svg'); ?>" alt="Dr Amir">
                    <div class="team-card-body">
                        <h3>Dr Amir Hashemi</h3>
                        <p>Beauty Specialist</p>
                    </div>
                </article>
                <article class="team-card">
                    <img src="<?php echo esc_url($uri . '/assets/images/doctor-sara.svg'); ?>" alt="Dr Narges">
                    <div class="team-card-body">
                        <h3>Dr Narges Rezaei</h3>
                        <p>Skin Specialist</p>
                    </div>
                </article>
                <article class="team-card">
                    <img src="<?php echo esc_url($uri . '/assets/images/doctor-amir.svg'); ?>" alt="Dr Mohammad">
                    <div class="team-card-body">
                        <h3>Dr Mohammad</h3>
                        <p>Rhinoplasty Expert</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Patient Reviews</span>
                <h2>Real Experiences</h2>
            </div>
            <div class="testimonial-grid">
                <blockquote class="testimonial-item">
                    Everything was professional and result was natural and exactly as expected.
                    <footer>— Maryam R.</footer>
                </blockquote>
                <blockquote class="testimonial-item">
                    The team was patient and professional throughout the process and gave me confidence.
                    <footer>— Neda Kh.</footer>
                </blockquote>
                <blockquote class="testimonial-item">
                    I have a more youthful and natural appearance and I am very satisfied with results.
                    <footer>— Elaheh M.</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <section class="section faq-section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">FAQ</span>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="faq-list">
                <details>
                    <summary>How is consultation conducted?</summary>
                    <p>After examining your condition, we discuss treatment options, recovery time and costs transparently.</p>
                </details>
                <details>
                    <summary>Will surgery results be natural?</summary>
                    <p>Yes, our goal is to maintain facial harmony and achieve natural results suitable for your features.</p>
                </details>
                <details>
                    <summary>How do I book an appointment?</summary>
                    <p>You can use the contact form below or call us directly for appointment scheduling.</p>
                </details>
            </div>
        </div>
    </section>

    <section id="contact" class="section cta-section">
        <div class="container cta-box">
            <div>
                <span class="eyebrow">Book Consultation</span>
                <h2>Start Your Beauty Journey Today</h2>
            </div>
            <a href="mailto:info@audubonclinic.ir" class="button">Request Consultation</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
