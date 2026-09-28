<section id="skills" class="skills-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <span class="section-tag">Kompetensi Teknis</span>
            <h2 class="section-title">Keahlian & Perangkat Pengembangan</h2>
            <p class="section-subtitle">
                Fondasi teknologi yang saya kuasai dan gunakan dalam pembuatan aplikasi web.
            </p>
        </div>

        <!-- Skills Container -->
        <div class="skills-container">
            @foreach($skillsGrouped as $category => $skills)
                <div class="skill-category-card">
                    <div class="skill-cat-header">
                        <div class="skill-cat-icon">
                            @if(str_contains(strtolower($category), 'backend'))
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                            @elseif(str_contains(strtolower($category), 'frontend'))
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            @else
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            @endif
                        </div>
                        <h3 class="skill-cat-title">{{ $category }}</h3>
                    </div>

                    <div class="skills-list">
                        @foreach($skills as $skill)
                            <div class="skill-item">
                                <div class="skill-item-main">
                                    <span class="skill-bullet-icon">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </span>
                                    <span class="skill-name">{{ $skill->name }}</span>
                                </div>
                                @if($skill->badge)
                                    <span class="skill-badge">{{ $skill->badge }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
