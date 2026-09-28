<section id="experience" class="experience-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <span class="section-tag">Jejak Langkah</span>
            <h2 class="section-title">Pendidikan & Pengalaman</h2>
            <p class="section-subtitle">
                Riwayat akademik, sertifikasi kompetensi, dan kegiatan organisasi yang telah ditempuh.
            </p>
        </div>

        <!-- Timeline Container -->
        <div class="timeline">
            @foreach($experiences as $exp)
                <div class="timeline-item">
                    <div class="timeline-node"></div>
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <div>
                                <h3 class="timeline-role">{{ $exp->role }}</h3>
                                <div class="timeline-company">{{ $exp->company }} &bull; {{ $exp->location }}</div>
                            </div>
                            <div class="timeline-meta">
                                <span class="timeline-period">{{ $exp->period }}</span>
                                @if($exp->badge)
                                    <span class="timeline-badge">{{ $exp->badge }}</span>
                                @endif
                            </div>
                        </div>

                        <p class="timeline-desc">{{ $exp->description }}</p>

                        @if(!empty($exp->highlights) && is_array($exp->highlights))
                            <ul class="timeline-highlights">
                                @foreach($exp->highlights as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if($exp->image)
                            <div class="timeline-attachment">
                                <div class="cert-card-preview" data-img="{{ asset($exp->image) }}" data-title="{{ $exp->role }} — {{ $exp->company }}">
                                    <div class="cert-thumb">
                                        <img src="{{ asset($exp->image) }}" alt="{{ $exp->role }}" loading="lazy">
                                        <div class="cert-overlay">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h6v6"></path><path d="M10 14L21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg>
                                            <span>Lihat Sertifikat Lengkap</span>
                                        </div>
                                    </div>
                                    <div class="cert-details">
                                        <div class="cert-badge-tag">Statement of Achievement</div>
                                        <div class="cert-title-text">{{ $exp->role }}</div>
                                        <div class="cert-issuer-text">{{ $exp->company }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
