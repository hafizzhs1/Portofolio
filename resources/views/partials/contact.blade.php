<section id="contact" class="contact-section">
    <div class="container">
        <!-- Contact Card Wrapper -->
        <div class="contact-card-wrapper">
            <!-- Left Info Block -->
            <div class="contact-info-block">
                <span class="section-tag">Hubungi Saya</span>
                <h3 class="contact-heading">Tertarik untuk Mengajak Saya Magang?</h3>
                <p class="contact-subtext">
                    Saya sangat antusias untuk berdiskusi mengenai peluang magang (*internship*), tes teknis (*technical test*), maupun proyek kolaborasi. Silakan hubungi saya melalui form atau kontak di bawah ini.
                </p>

                <div class="contact-details-list">
                    <div class="contact-detail-item">
                        <div class="detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="detail-text">
                            <label>Email Pribadi / Kampus</label>
                            <a href="mailto:{{ config('portfolio.contact.email', 'Afizb300@gmail.com') }}">{{ config('portfolio.contact.email', 'Afizb300@gmail.com') }}</a>
                        </div>
                    </div>

                    <div class="contact-detail-item">
                        <div class="detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="detail-text">
                            <label>Lokasi & Preferensi</label>
                            <span>{{ config('portfolio.contact.location', 'Yogyakarta, Indonesia (Siap On-site & Remote)') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form Block -->
            <div class="contact-form-wrapper">
                <form id="portfolio-contact-form" action="{{ route('portfolio.contact') }}" method="POST" class="contact-form">
                    @csrf

                    <div class="form-group">
                        <label for="contact-name">Nama Lengkap / Perusahaan</label>
                        <input type="text" id="contact-name" name="name" class="form-control" placeholder="Contoh: HRD PT Teknologi Maju" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-email">Alamat Email</label>
                        <input type="email" id="contact-email" name="email" class="form-control" placeholder="hrd@perusahaan.com" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-subject">Subjek Pesan</label>
                        <input type="text" id="contact-subject" name="subject" class="form-control" placeholder="Tawaran Magang Web Developer" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-message">Pesan / Undangan Wawancara</label>
                        <textarea id="contact-message" name="message" class="form-control" rows="4" placeholder="Tuliskan pesan atau informasi lowongan magang..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" id="contact-submit-btn">
                        <span>Kirim Pesan</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
