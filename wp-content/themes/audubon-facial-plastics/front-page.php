<?php
get_header();
$theme_uri = get_template_directory_uri();
?>
<main class="site-main">
    <section class="hero hero-home">
        <div class="container hero-grid">
            <div class="hero-copy">
                <span class="eyebrow">جراحی زیبایی پیشرفته</span>
                <h1>زیبایی طبیعی، اعتماد بیشتر، نتیجه‌ای پایدار.</h1>
                <p>کلینیک ما با تیم متخصص و فناوری روز، خدمات جراحی و غیرجراحی زیبایی را با دقت بالا و نتیجه‌ای طبیعی ارائه می‌دهد.</p>
                <div class="hero-actions">
                    <a href="#contact" class="button">رزرو مشاوره</a>
                    <a href="#services" class="button button-secondary">مشاهده خدمات</a>
                </div>
                <ul class="hero-points">
                    <li>بیش از 15 سال تجربه</li>
                    <li>تیم جراحان متخصص</li>
                    <li>نتایج طبیعی و ایمن</li>
                </ul>
            </div>

            <div class="hero-visual">
                <div class="hero-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/hero-clinic.svg'); ?>" alt="کلینیک زیبایی">
                </div>
                <div class="hero-badge badge-1">4.9/5 امتیاز</div>
                <div class="hero-badge badge-2">+12,000 بیمار</div>
            </div>
        </div>
    </section>

    <section class="section stats-section">
        <div class="container stats-grid">
            <div class="stat-item"><strong>12k+</strong><span>مشتری راضی</span></div>
            <div class="stat-item"><strong>15+</strong><span>سال تجربه</span></div>
            <div class="stat-item"><strong>20+</strong><span>روش نوین درمانی</span></div>
            <div class="stat-item"><strong>98%</strong><span>رضایت بیماران</span></div>
        </div>
    </section>

    <section id="services" class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">خدمات ما</span>
                <h2>مناسب‌ترین درمان‌ها برای زیبایی طبیعی</h2>
                <p>هر درمان بر اساس شرایط فردی و اهداف بیمار شخصی‌سازی می‌شود.</p>
            </div>

            <div class="services-grid">
                <article class="service-card">
                    <div class="icon-box">✦</div>
                    <h3>بلفاروپلاستی</h3>
                    <p>رفع پف زیر چشم و جوان‌سازی اطراف چشم.</p>
                    <a href="#contact">اطلاعات بیشتر</a>
                </article>
                <article class="service-card">
                    <div class="icon-box">✦</div>
                    <h3>لیفت صورت</h3>
                    <p>سفت‌کردن پوست و جوان‌سازی صورت.</p>
                    <a href="#contact">اطلاعات بیشتر</a>
                </article>
                <article class="service-card">
                    <div class="icon-box">✦</div>
                    <h3>جراحی بینی</h3>
                    <p>اصلاح فرم و تناسب بینی با چهره.</p>
                    <a href="#contact">اطلاعات بیشتر</a>
                </article>
                <article class="service-card">
                    <div class="icon-box">✦</div>
                    <h3>فیلر و بوتاکس</h3>
                    <p>کاهش خطوط و بهبود فرم صورت.</p>
                    <a href="#contact">اطلاعات بیشتر</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container about-grid">
            <div class="about-image-wrap">
                <img src="<?php echo esc_url($theme_uri . '/assets/images/consultation.svg'); ?>" alt="مشاوره زیبایی">
            </div>
            <div class="about-copy">
                <span class="eyebrow">درباره ما</span>
                <h2>در کنار شما، با تجربه و دقت برای نتیجه‌ای طبیعی.</h2>
                <p>ما با ترکیب تخصص پزشکی، طراحی درمان شخصی و استفاده از فناوری‌های روز، تجربه‌ای امن و کاملاً شخصی را برای هر بیمار خلق می‌کنیم.</p>
                <ul class="check-list">
                    <li>مشاوره دقیق و شخصی‌سازی‌شده</li>
                    <li>تکنولوژی‌های مدرن و به‌روز</li>
                    <li>پیگیری دقیق پس از عمل</li>
                    <li>تیم پزشکی مجرب و حرفه‌ای</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">گالری نتایج</span>
                <h2>نمونه‌هایی از نتایج طبیعی ما</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="<?php echo esc_url($theme_uri . '/assets/images/before-after-face.svg'); ?>" alt="قبل و بعد صورت"></div>
                <div class="gallery-item"><img src="<?php echo esc_url($theme_uri . '/assets/images/before-after-profile.svg'); ?>" alt="قبل و بعد صورت در نمای جانبی"></div>
                <div class="gallery-item"><img src="<?php echo esc_url($theme_uri . '/assets/images/patient-care.svg'); ?>" alt="مراقبت از بیمار"></div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">تیم پزشکی</span>
                <h2>متخصصان مجرب و ماهر</h2>
            </div>
            <div class="team-grid">
                <article class="team-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/doctor-sara.svg'); ?>" alt="دکتر سارا احمدی">
                    <div class="team-card-body">
                        <h3>دکتر سارا احمدی</h3>
                        <p>جراح پلاستیک</p>
                    </div>
                </article>
                <article class="team-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/doctor-amir.svg'); ?>" alt="دکتر امیر هاشمی">
                    <div class="team-card-body">
                        <h3>دکتر امیر هاشمی</h3>
                        <p>متخصص زیبایی</p>
                    </div>
                </article>
                <article class="team-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/doctor-sara.svg'); ?>" alt="دکتر نرگس رضایی">
                    <div class="team-card-body">
                        <h3>دکتر نرگس رضایی</h3>
                        <p>مشاوره و پوست</p>
                    </div>
                </article>
                <article class="team-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/doctor-amir.svg'); ?>" alt="دکتر محمدی">
                    <div class="team-card-body">
                        <h3>دکتر محمدی</h3>
                        <p>جراحی بینی</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">نظرات بیماران</span>
                <h2>تجربه‌ای واقعی از خدمات ما</h2>
            </div>
            <div class="testimonial-grid">
                <blockquote class="testimonial-item">
                    «از مشاوره تا نتیجه نهایی، همه چیز دقیق و حرفه‌ای بود و نتیجه کاملاً طبیعی بود.»
                    <footer>— مریم ر.</footer>
                </blockquote>
                <blockquote class="testimonial-item">
                    «تیم متخصص با صبر و حوصله همراهی کردند و حس اعتماد زیادی برایم ایجاد شد.»
                    <footer>— ندا خ.</footer>
                </blockquote>
                <blockquote class="testimonial-item">
                    «نتیجه‌ای طبیعی و شاداب‌تر از چهره‌ام گرفتم و کاملاً راضی هستم.»
                    <footer>— الهه م.</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <section class="section faq-section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">پرسش‌های متداول</span>
                <h2>قبل از مشاوره چه بدانیم؟</h2>
            </div>
            <div class="faq-list">
                <details>
                    <summary>جلسه مشاوره چگونه انجام می‌شود؟</summary>
                    <p>پس از بررسی وضعیت شما، گزینه‌های درمان، زمان بهبودی و هزینه به‌صورت شفاف توضیح داده می‌شود.</p>
                </details>
                <details>
                    <summary>آیا نتیجه جراحی طبیعی خواهد بود؟</summary>
                    <p>بله، هدف اصلی ما حفظ تناسب چهره و دستیابی به نتیجه‌ای طبیعی و متناسب با ویژگی‌های صورت شماست.</p>
                </details>
                <details>
                    <summary>چطور نوبت رزرو کنم؟</summary>
                    <p>می‌توانید از فرم زير صفحه استفاده کنید یا با شماره تماس ما هماهنگ کنید.</p>
                </details>
            </div>
        </div>
    </section>

    <section id="contact" class="section cta-section">
        <div class="container cta-box">
            <div>
                <span class="eyebrow">رزرو مشاوره</span>
                <h2>برای شروع مسیر زیبایی خود با ما تماس بگیرید.</h2>
            </div>
            <a href="mailto:info@audubonclinic.ir" class="button">درخواست مشاوره</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
