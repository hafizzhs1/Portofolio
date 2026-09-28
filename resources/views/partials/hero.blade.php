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
                    <a href="{{ route('portfolio.downloadCv') }}" class="btn btn-secondary" id="hero-cta-resume" title="Unduh Curriculum Vitae">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download CV</span>
                    </a>
                </div>

                <div class="hero-socials">
                    @if(config('portfolio.contact.github'))
                        <a href="{{ config('portfolio.contact.github') }}" target="_blank" rel="noopener noreferrer" class="social-link" title="Profil GitHub" id="social-github">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </a>
                    @endif
                    @if(config('portfolio.contact.linkedin'))
                        <a href="{{ config('portfolio.contact.linkedin') }}" target="_blank" rel="noopener noreferrer" class="social-link" title="Profil LinkedIn" id="social-linkedin">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                    @endif
                    @if(config('portfolio.contact.email'))
                        <a href="mailto:{{ config('portfolio.contact.email') }}" class="social-link" title="Kirim Email Langsung" id="social-email">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </a>
                    @endif
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
