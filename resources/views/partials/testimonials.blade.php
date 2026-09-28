<section id="testimonials" class="testimonials-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <span class="section-tag">Apresiasi Mitra</span>
            <h2 class="section-title">Apa Kata Mereka Tentang <span class="gradient-text">Hasil Kerja</span></h2>
            <p class="section-subtitle">
                Ulasan langsung dari para pemimpin teknologi dan pendiri bisnis yang telah berkolaborasi.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="testimonials-grid">
            @forelse($testimonials as $item)
                <div class="testimonial-card">
                    <div>
                        <div class="stars-rating" aria-label="Rating {{ $item->rating }} bintang">
                            @for($i = 0; $i < $item->rating; $i++)
                                <span>&#9733;</span>
                            @endfor
                        </div>

                        <p class="testimonial-text">
                            "{{ $item->content }}"
                        </p>
                    </div>

                    <div class="testimonial-author">
                        <div class="author-avatar">
                            {{ substr($item->name, 0, 1) }}
                        </div>
                        <div>
                            <h4 class="author-name">{{ $item->name }}</h4>
                            <div class="author-role">{{ $item->role }}, {{ $item->company }}</div>
                        </div>
                    </div>
                </div>
            @empty
                <p style="text-align:center; grid-column:span 3; color:var(--text-muted);">Belum ada testimoni.</p>
            @endforelse
        </div>
    </div>
</section>
