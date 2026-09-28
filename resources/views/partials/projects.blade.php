<section id="projects" class="projects-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <span class="section-tag">Portofolio Proyek</span>
            <h2 class="section-title">Proyek & Karya yang Pernah Dibuat</h2>
            <p class="section-subtitle">
                Kumpulan proyek tugas kuliah, studi kasus, dan implementasi nyata berbasis Figma, Laravel, & MySQL.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs" role="tablist" aria-label="Kategori Proyek">
            <button type="button" class="filter-btn active" data-filter="all" role="tab">Semua Proyek</button>
        </div>

        <!-- Projects Grid -->
        <div class="projects-grid" id="projects-container">
            @forelse($projects as $project)
                @php
                    $galleryList = [];
                    if (!empty($project->gallery) && is_array($project->gallery)) {
                        foreach ($project->gallery as $item) {
                            $galleryList[] = [
                                'title' => $item['title'] ?? '',
                                'caption' => $item['caption'] ?? '',
                                'image' => asset($item['image'] ?? ''),
                            ];
                        }
                    }
                @endphp
                <article class="project-card" 
                         data-category="{{ $project->category_slug }}"
                         data-category-name="{{ $project->category }}"
                         data-title="{{ $project->title }}"
                         data-tagline="{{ $project->tagline }}"
                         data-desc="{{ $project->description }}"
                         data-img="{{ asset($project->image) }}"
                         data-tags="{{ json_encode($project->tags) }}"
                         data-metrics="{{ json_encode($project->metrics) }}"
                         data-gallery="{{ json_encode($galleryList) }}"
                         data-demo="{{ $project->demo_url }}"
                         data-github="{{ $project->github_url }}">
                    
                    <div class="project-thumb-wrapper">
                        <img src="{{ asset($project->image) }}" alt="Preview {{ $project->title }}" class="project-thumb" loading="lazy">
                        <span class="project-category-badge">{{ $project->category }}</span>
                    </div>

                    <div class="project-content">
                        <h3 class="project-title">{{ $project->title }}</h3>
                        <div class="project-tagline">{{ $project->tagline }}</div>
                        <p class="project-desc">{{ Str::limit($project->description, 120) }}</p>

                        <div class="project-tags">
                            @if(is_array($project->tags))
                                @foreach($project->tags as $tag)
                                    <span class="tech-tag">{{ $tag }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="project-footer">
                            <button type="button" class="btn btn-secondary btn-sm view-project-btn" style="width: 100%; justify-content: center;" title="Lihat penjelasan lengkap proyek">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                <span>Detail Fitur Proyek</span>
                            </button>
                        </div>
                    </div>
                </article>
            @empty
                <div class="no-projects">
                    <p>Belum ada proyek yang ditampilkan saat ini.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
