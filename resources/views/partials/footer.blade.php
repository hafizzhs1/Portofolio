<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <span class="logo-badge">{{ config('portfolio.initials', 'BP') }}</span>
                <span class="brand-text">{{ config('portfolio.name', 'Budi Pratama') }}</span>
            </div>

            <div class="footer-credits">
                &copy; {{ date('Y') }} {{ config('portfolio.name', 'Budi Pratama') }}. Portofolio Magang Web Developer &bull; Dibangun dengan <strong>Laravel 11</strong>.
            </div>

            <ul class="footer-links">
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#projects">Proyek</a></li>
                <li><a href="#skills">Keahlian</a></li>
                <li><a href="#experience">Pengalaman</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="#hero" class="back-to-top" title="Kembali ke Atas">&uarr; Ke Atas</a></li>
            </ul>
        </div>
    </div>
</footer>
