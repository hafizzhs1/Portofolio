/**
 * ULTRA-MODERN LARAVEL PORTFOLIO JAVASCRIPT
 * Features: Dark/Light Mode, Filterable Projects, Modal Preview,
 * Stats Counter, ScrollSpy, AJAX Contact with Toasts
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. THEME SWITCHER (Dark / Light)
    const themeToggleBtn = document.getElementById('theme-toggle-btn');
    const themeIcon = document.getElementById('theme-icon');
    const savedTheme = localStorage.getItem('portfolio-theme') || 'light';

    const setTheme = (theme) => {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('portfolio-theme', theme);
        if (themeIcon) {
            themeIcon.innerHTML = theme === 'light' 
                ? `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`
                : `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`;
        }
    };

    setTheme(savedTheme);

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
            setTheme(currentTheme === 'dark' ? 'light' : 'dark');
        });
    }

    // 2. NAVBAR SCROLL EFFECT
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }
    });

    // 3. MOBILE MENU TOGGLE
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileNav = document.getElementById('mobile-nav-drawer');

    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', () => {
            mobileNav.classList.toggle('open');
        });

        // Close on link click
        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('open');
            });
        });
    }

    // 4. SCROLLSPY (ACTIVE NAV LINK)
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-item a');

    window.addEventListener('scroll', () => {
        let currentSectionId = '';
        const scrollPosition = window.scrollY + 200;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSectionId}`) {
                link.classList.add('active');
            }
        });
    });

    // 5. PROJECT CATEGORY FILTER
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    card.style.display = 'flex';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0) scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(15px) scale(0.96)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 250);
                }
            });
        });
    });

    // 6. STATS NUMBER COUNT-UP ANIMATION
    const statNumbers = document.querySelectorAll('.stat-number');
    let animatedStats = false;

    const animateStats = () => {
        statNumbers.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-target'), 10);
            const prefix = stat.getAttribute('data-prefix') || '';
            const suffix = stat.getAttribute('data-suffix') || '';
            let current = 0;
            const duration = 1500;
            const stepTime = 25;
            const increment = Math.ceil(target / (duration / stepTime));

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                stat.textContent = `${prefix}${current}${suffix}`;
            }, stepTime);
        });
    };

    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !animatedStats) {
                animatedStats = true;
                animateStats();
            }
        }, { threshold: 0.4 });
        observer.observe(statsSection);
    }

    // 7. PROJECT DETAILS MODAL & LIGHTBOX
    const modalOverlay = document.getElementById('project-modal');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    const mainImgContainer = document.getElementById('modal-main-img-container');
    const lightboxModal = document.getElementById('lightbox-modal');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const lightboxCloseBtn = document.getElementById('lightbox-close-btn');

    const openLightbox = (src, caption = '') => {
        if (lightboxModal && lightboxImg) {
            lightboxImg.src = src;
            if (lightboxCaption) {
                lightboxCaption.textContent = caption;
                lightboxCaption.style.display = caption ? 'block' : 'none';
            }
            lightboxModal.classList.add('active');
        }
    };

    const closeLightbox = () => {
        if (lightboxModal) {
            lightboxModal.classList.remove('active');
        }
    };

    lightboxCloseBtn?.addEventListener('click', closeLightbox);
    lightboxModal?.addEventListener('click', (e) => {
        if (e.target === lightboxModal) closeLightbox();
    });

    // Certificate Lightbox Click
    document.querySelectorAll('.cert-card-preview').forEach(card => {
        card.addEventListener('click', () => {
            const img = card.getAttribute('data-img');
            const title = card.getAttribute('data-title') || 'Sertifikat Kompetensi';
            if (img) {
                openLightbox(img, title);
            }
        });
    });

    if (modalOverlay) {
        const modalImg = document.getElementById('modal-project-img');
        const modalCategory = document.getElementById('modal-project-category');
        const modalTitle = document.getElementById('modal-project-title');
        const modalTagline = document.getElementById('modal-project-tagline');
        const modalDesc = document.getElementById('modal-project-desc');
        const modalTags = document.getElementById('modal-project-tags');
        const modalMetrics = document.getElementById('modal-project-metrics');
        const modalGallerySection = document.getElementById('modal-gallery-section');
        const modalGallery = document.getElementById('modal-project-gallery');

        let currentActiveTitle = '';

        mainImgContainer?.addEventListener('click', () => {
            if (modalImg && modalImg.src) {
                openLightbox(modalImg.src, currentActiveTitle || 'Pratinjau Desain');
            }
        });

        const openModal = (data) => {
            currentActiveTitle = data.title;
            if (modalImg) modalImg.src = data.image;
            if (modalCategory) modalCategory.textContent = data.category;
            if (modalTitle) modalTitle.textContent = data.title;
            if (modalTagline) modalTagline.textContent = data.tagline;
            if (modalDesc) modalDesc.textContent = data.description;

            // Render Tags
            if (modalTags) {
                modalTags.innerHTML = '';
                const tags = Array.isArray(data.tags) ? data.tags : JSON.parse(data.tags || '[]');
                tags.forEach(t => {
                    const span = document.createElement('span');
                    span.className = 'tech-tag';
                    span.textContent = t;
                    modalTags.appendChild(span);
                });
            }

            // Render Metrics / Fitur Kunci
            if (modalMetrics) {
                modalMetrics.innerHTML = '';
                const metrics = typeof data.metrics === 'object' ? data.metrics : JSON.parse(data.metrics || '{}');
                for (const [key, val] of Object.entries(metrics)) {
                    const box = document.createElement('div');
                    box.className = 'metric-item';
                    box.innerHTML = `<div class="metric-label">${key}</div><div class="metric-val">${val}</div>`;
                    modalMetrics.appendChild(box);
                }
            }

            // Render Gallery Screenshots
            const gallery = Array.isArray(data.gallery) ? data.gallery : JSON.parse(data.gallery || '[]');
            if (modalGallery && modalGallerySection) {
                modalGallery.innerHTML = '';
                if (gallery.length > 0) {
                    modalGallerySection.style.display = 'block';
                    gallery.forEach((item, idx) => {
                        const card = document.createElement('div');
                        card.className = 'gallery-card' + (idx === 0 ? ' active' : '');
                        card.innerHTML = `
                            <div class="gallery-thumb-wrapper">
                                <img src="${item.image}" alt="${item.title}" loading="lazy">
                            </div>
                            <div class="gallery-card-info">
                                <div class="gallery-card-title">${item.title}</div>
                                <div class="gallery-card-caption">${item.caption || ''}</div>
                            </div>
                        `;
                        card.addEventListener('click', (e) => {
                            e.stopPropagation();
                            if (modalImg) modalImg.src = item.image;
                            document.querySelectorAll('.gallery-card').forEach(c => c.classList.remove('active'));
                            card.classList.add('active');
                            openLightbox(item.image, `${item.title}${item.caption ? ' — ' + item.caption : ''}`);
                        });
                        modalGallery.appendChild(card);
                    });
                } else {
                    modalGallerySection.style.display = 'none';
                }
            }

            modalOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        };

        const closeModal = () => {
            modalOverlay.classList.remove('active');
            closeLightbox();
            document.body.style.overflow = '';
        };

        const triggerCardModal = (card) => {
            if (!card) return;
            const data = {
                title: card.getAttribute('data-title'),
                tagline: card.getAttribute('data-tagline'),
                category: card.getAttribute('data-category-name'),
                description: card.getAttribute('data-desc'),
                image: card.getAttribute('data-img'),
                tags: JSON.parse(card.getAttribute('data-tags') || '[]'),
                metrics: JSON.parse(card.getAttribute('data-metrics') || '{}'),
                gallery: JSON.parse(card.getAttribute('data-gallery') || '[]'),
            };
            openModal(data);
        };

        document.querySelectorAll('.project-card').forEach(card => {
            card.querySelector('.view-project-btn')?.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                triggerCardModal(card);
            });
            card.querySelector('.project-thumb-wrapper')?.addEventListener('click', (e) => {
                e.preventDefault();
                triggerCardModal(card);
            });
            card.querySelector('.project-title')?.addEventListener('click', (e) => {
                e.preventDefault();
                triggerCardModal(card);
            });
        });

        modalCloseBtn?.addEventListener('click', closeModal);
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if (lightboxModal && lightboxModal.classList.contains('active')) {
                    closeLightbox();
                } else if (modalOverlay.classList.contains('active')) {
                    closeModal();
                }
            }
        });
    }

    // 8. AJAX CONTACT FORM & TOAST NOTIFICATION
    const contactForm = document.getElementById('portfolio-contact-form');
    const toastContainer = document.getElementById('toast-container');

    const showToast = (message, type = 'success') => {
        if (!toastContainer) return;
        const toast = document.createElement('div');
        toast.className = 'toast';
        if (type === 'error') toast.style.background = 'rgba(239, 68, 68, 0.95)';
        toast.innerHTML = `
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            <span>${message}</span>
        `;
        toastContainer.appendChild(toast);

        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(10px)';
            toast.style.transition = 'all 0.4s ease';
            setTimeout(() => toast.remove(), 400);
        }, 4500);
    };

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnHtml = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation: spin 1s linear infinite;"><circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle><path d="M12 2a10 10 0 0 1 10 10" stroke-opacity="1"></path></svg>
                Mengirim Pesan...
            `;

            try {
                const formData = new FormData(contactForm);
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                const response = await fetch(contactForm.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken || ''
                    }
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    showToast(data.message, 'success');
                    contactForm.reset();
                } else {
                    const errorMsg = data.errors ? Object.values(data.errors).flat().join(' ') : (data.message || 'Terjadi kesalahan.');
                    showToast(errorMsg, 'error');
                }
            } catch (err) {
                console.error(err);
                showToast('Gagal mengirim pesan. Silakan coba lagi nanti.', 'error');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;
            }
        });
    }
});
