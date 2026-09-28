<section id="hero" class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <!-- Left: Hero Text & Intro -->
            <div class="hero-content">
                <div class="status-badge">
                    <span class="status-indicator"></span>
                    <span>{{ config('portfolio.status_badge', 'Terbuka untuk Kesempatan Magang (Internship)') }}</span>
                </div>

                <h1 class="hero-title">
                    Halo, Saya <span class="text-highlight">{{ config('portfolio.name', 'Budi Pratama') }}</span>
                </h1>

                <div class="hero-role">
                    {{ config('portfolio.role', 'Junior Web Developer | Calon Peserta Magang') }}
                </div>

                <p class="hero-description">
                    {{ config('portfolio.bio_short', 'Mahasiswa Teknik Informatika yang antusias dalam pengembangan web modern menggunakan Laravel, PHP, dan MySQL. Memiliki pemahaman dasar rekayasa perangkat lunak yang kuat dan siap berkontribusi secara langsung di industri.') }}
                </p>

                <div class="hero-ctas">
                    <a href="#projects" class="btn btn-primary" id="hero-cta-projects">
                        <span>Lihat Proyek</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Right: Clean Profile Image -->
            <div class="hero-visual-wrapper">
                <div class="hero-photo-card">
                    <img src="{{ asset(config('portfolio.avatar', 'images/profile.jpg')) }}" alt="Foto {{ config('portfolio.name') }}" class="hero-avatar-img">
                    <div class="hero-photo-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span>{{ config('portfolio.contact.location', 'Indonesia') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
