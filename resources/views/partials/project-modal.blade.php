<div id="project-modal" class="modal-overlay" aria-hidden="true" role="dialog" aria-labelledby="modal-project-title">
    <div class="modal-content">
        <button type="button" id="modal-close-btn" class="modal-close-btn" aria-label="Tutup Jendela Detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>

        <div class="modal-body">
            <!-- Main Featured Image / Active Screen Preview -->
            <div class="modal-img-wrapper" id="modal-main-img-container" title="Klik untuk memperbesar gambar">
                <img id="modal-project-img" src="" alt="Detail Gambar Proyek">
                <span class="modal-img-zoom-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                    <span>Perbesar Gambar</span>
                </span>
            </div>

            <div class="modal-header-info">
                <div>
                    <span id="modal-project-category" class="section-tag">Kategori</span>
                    <h2 id="modal-project-title">Judul Proyek</h2>
                    <p id="modal-project-tagline" class="modal-tagline">Tagline Proyek</p>
                </div>
            </div>

            <!-- Galeri Desain / Tangkapan Layar Proyek -->
            <div id="modal-gallery-section" class="modal-section" style="display: none;">
                <div class="gallery-header">
                    <h4>Galeri Desain & Tangkapan Layar</h4>
                    <span class="gallery-hint">Klik gambar untuk melihat / memperbesar</span>
                </div>
                <div id="modal-project-gallery" class="modal-gallery-grid">
                    <!-- Populated dynamically via JS -->
                </div>
            </div>

            <div class="modal-section">
                <h4>Deskripsi Proyek</h4>
                <p id="modal-project-desc" class="modal-desc-text"></p>
            </div>

            <!-- Highlights / Fitur Utama -->
            <div class="modal-section">
                <h4>Fitur Kunci & Spesifikasi</h4>
                <div id="modal-project-metrics" class="modal-metrics-grid">
                    <!-- Populated dynamically via JS -->
                </div>
            </div>

            <!-- Tech Stack Tags -->
            <div class="modal-section">
                <h4>Teknologi yang Digunakan</h4>
                <div id="modal-project-tags" class="project-tags">
                    <!-- Populated dynamically via JS -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fullscreen Image Lightbox Preview -->
<div id="lightbox-modal" class="lightbox-overlay" aria-hidden="true" role="dialog" aria-label="Pratinjau Gambar Ukuran Penuh">
    <button type="button" id="lightbox-close-btn" class="lightbox-close-btn" aria-label="Tutup Pratinjau">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    <div class="lightbox-content">
        <img id="lightbox-img" src="" alt="Pratinjau Gambar Penuh">
        <div id="lightbox-caption" class="lightbox-caption"></div>
    </div>
</div>
