<section id="about" class="about-section">
    <div class="container">
        <!-- Student Stats / Highlights Bar -->
        <div class="stats-grid">
            <div class="stat-box">
                <div class="stat-value">UNY</div>
                <div class="stat-label">Universitas Negeri Yogyakarta</div>
            </div>
            <div class="stat-box">
                <div class="stat-value">Semester 7</div>
                <div class="stat-label">Status Akademik Aktif</div>
            </div>
            <div class="stat-box">
                <div class="stat-value">{{ config('portfolio.about.projects_completed', '5 Proyek') }}</div>
                <div class="stat-label">Tugas Kuliah & Mandiri</div>
            </div>
            <div class="stat-box">
                <div class="stat-value">Siap Magang</div>
                <div class="stat-label">Terbuka untuk Internship</div>
            </div>
        </div>

        <!-- About Story & Values -->
        <div class="about-card">
            <div class="about-grid">
                <div>
                    <span class="section-tag">Profil Diri</span>
                    <h2 class="about-heading">{{ config('portfolio.about.heading', 'Fokus pada Desain yang Intuitif dan Frontend yang Responsif') }}</h2>
                    <p class="about-p">
                        {{ config('portfolio.about.p1') }}
                    </p>
                    <p class="about-p">
                        {{ config('portfolio.about.p2') }}
                    </p>
                </div>

                <div class="about-strengths">
                    <div class="strength-card">
                        <div class="strength-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 19 7-7 3 3-7 7-3-3z"></path><path d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="m2 2 7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                        </div>
                        <div>
                            <h4 class="strength-title">Desain UI/UX & Prototyping (Figma)</h4>
                            <p class="strength-desc">Mampu merancang wireframe, mockup visual yang intuitif, design system, serta interactive prototype di Figma sebelum tahap coding.</p>
                        </div>
                    </div>

                    <div class="strength-card">
                        <div class="strength-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </div>
                        <div>
                            <h4 class="strength-title">Frontend & Responsive Web</h4>
                            <p class="strength-desc">Menerjemahkan rancangan desain Figma menjadi antarmuka web modern yang responsif menggunakan HTML5, CSS3, Tailwind CSS, dan JavaScript.</p>
                        </div>
                    </div>

                    <div class="strength-card">
                        <div class="strength-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                        </div>
                        <div>
                            <h4 class="strength-title">Fondasi Backend & Kolaboratif</h4>
                            <p class="strength-desc">Didukung pemahaman arsitektur MVC di Laravel, query MySQL, perancangan RESTful API terstandar, dan kolaborasi tim via Git/GitHub.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
