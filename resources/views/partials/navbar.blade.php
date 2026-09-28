<header class="navbar-wrapper">
    <div class="container">
        <nav class="navbar" aria-label="Navigasi Utama">
            <!-- Brand / Logo -->
            <a href="#hero" class="brand-logo" id="brand-logo-link">
                <span class="logo-badge">{{ config('portfolio.initials', 'BP') }}</span>
                <span class="brand-text">{{ config('portfolio.name', 'Budi Pratama') }}</span>
            </a>

            <!-- Desktop Navigation Links -->
            <ul class="nav-links" id="desktop-nav-links">
                <li class="nav-item"><a href="#hero" class="active">Beranda</a></li>
                <li class="nav-item"><a href="#about">Tentang & Pendidikan</a></li>
                <li class="nav-item"><a href="#projects">Proyek</a></li>
                <li class="nav-item"><a href="#skills">Keahlian</a></li>
                <li class="nav-item"><a href="#experience">Pengalaman</a></li>
                <li class="nav-item"><a href="#contact">Kontak</a></li>
            </ul>

            <!-- Nav Actions -->
            <div class="nav-actions">
                <button type="button" class="theme-toggle" id="theme-toggle-btn" aria-label="Ganti Tema Terang/Gelap" title="Ganti Mode Tampilan">
                    <span id="theme-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                    </span>
                </button>

                <a href="#contact" class="btn btn-primary btn-sm" id="contact-cta-nav">
                    Hubungi Saya
                </a>

                <!-- Mobile Hamburger Button -->
                <button type="button" class="mobile-toggle" id="mobile-menu-toggle" aria-label="Buka Menu Mobile">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Navigation Drawer -->
        <div class="mobile-nav" id="mobile-nav-drawer">
            <ul class="mobile-nav-list">
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#about">Tentang & Pendidikan</a></li>
                <li><a href="#projects">Proyek</a></li>
                <li><a href="#skills">Keahlian</a></li>
                <li><a href="#experience">Pengalaman</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</header>
