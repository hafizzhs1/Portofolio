<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Projects (Proyek Relevan untuk Magang / Mahasiswa)
        Project::truncate();

        Project::create([
            'title' => 'Sistem Penulisan Hibah Buku (Book Grant System)',
            'slug' => 'sistem-penulisan-hibah-buku',
            'tagline' => 'Desain UI/UX Figma & Dashboard Penulisan Naskah Hibah Buku',
            'category' => 'UI/UX & Frontend',
            'category_slug' => 'design',
            'description' => 'Perancangan desain antarmuka (UI/UX) di Figma untuk Sistem Penulisan Hibah Buku (Book Grant System). Mencakup perancangan sistem dashboard penulis, manajemen perpustakaan naskah mandiri, alur unggah draf awal naskah, hingga tahap verifikasi & validasi kelengkapan naskah buku.',
            'image' => 'images/projects/book-grant-system.png',
            'gallery' => [
                [
                    'title' => 'Dashboard Penulis',
                    'caption' => 'Ringkasan kata ditulis, hibah disetujui, progres naskah aktif, dan daftar aktivitas terkini',
                    'image' => 'images/projects/book-grant-system.png',
                ],
                [
                    'title' => 'Buku Saya (Perpustakaan Pribadi)',
                    'caption' => 'Katalog pengelolaan manuskrip penulis, filter status naskah (Draf, Review, Terbit), dan statistik pembaca',
                    'image' => 'images/projects/book-grant-library.png',
                ],
                [
                    'title' => 'Formulir Unggah Draf Awal',
                    'caption' => 'Antarmuka pengunggahan berkas naskah (.pdf/.docx), status validasi kontrak, catatan editor, dan pernyataan orisinalitas',
                    'image' => 'images/projects/book-grant-upload.png',
                ],
                [
                    'title' => 'Validasi Kelengkapan Naskah',
                    'caption' => 'Alur verifikasi berkas meliputi jenis file, kapasitas batas ukuran berkas, dan sinkronisasi metadata naskah',
                    'image' => 'images/projects/book-grant-validation.png',
                ],
            ],
            'tags' => ['Figma', 'UI/UX Design', 'Design System', 'Prototyping', 'Frontend UI'],
            'metrics' => [
                'Perancangan UI/UX' => 'High-Fidelity Prototype (Figma)',
                'Cakupan Modul' => 'Dashboard, Naskah, Unggah Draf, Validasi',
                'Gaya Desain' => 'Warm Minimalist & Card Layout',
            ],
            'demo_url' => 'https://github.com',
            'github_url' => 'https://github.com/example/book-grant-system-figma',
            'featured' => true,
            'order' => 1,
        ]);

        Project::create([
            'title' => 'NewsScope - Portal Pencarian & Agregator Berita',
            'slug' => 'newsscope-streamlit-app',
            'tagline' => 'Aplikasi Agregator Berita Cepat & Interaktif Berbasis Streamlit',
            'category' => 'Web Apps',
            'category_slug' => 'web',
            'description' => 'Aplikasi web pencarian dan agregator berita Indonesia yang dibangun menggunakan framework Streamlit (Python). Menyajikan berita aktual dari media terpercaya secara real-time dengan antarmuka bertema gelap yang bersih, navigasi multi-menu (Beranda, Cari Berita, Tentang), serta sistem pencarian kata kunci yang responsif.',
            'image' => 'images/projects/newsscope-app.png',
            'gallery' => [
                [
                    'title' => 'Beranda Selamat Datang',
                    'caption' => 'Halaman utama selamat datang aplikasi NewsScope dengan menu navigasi cepat',
                    'image' => 'images/projects/newsscope-app.png',
                ],
                [
                    'title' => 'Pencarian Berita Indonesia',
                    'caption' => 'Form pencarian kata kunci untuk mengambil berita aktual dari berbagai media nasional',
                    'image' => 'images/projects/newsscope-search.png',
                ],
                [
                    'title' => 'Hasil Berita & Detail Sumber',
                    'caption' => 'Tampilan kartu berita interaktif dengan metadata media (CNBC Indonesia, dll), tanggal, dan ringkasan isi',
                    'image' => 'images/projects/newsscope-results.png',
                ],
            ],
            'tags' => ['Python', 'Streamlit', 'News Aggregator', 'API Integration', 'Data Extraction'],
            'metrics' => [
                'Framework' => 'Streamlit (Python)',
                'Fitur Inti' => 'Pencarian Berita Multi-Sumber Real-Time',
                'Antarmuka' => 'Dark Theme & Card View',
            ],
            'demo_url' => 'https://github.com',
            'github_url' => 'https://github.com/example/newsscope-streamlit',
            'featured' => true,
            'order' => 2,
        ]);
        
        Project::create([
            'title' => 'Pembuatan Desain untuk Sistem Informasi Minimarket Kampus',
            'slug' => 'desain-sistem-informasi-minimarket-kampus',
            'tagline' => 'Desain UI/UX Kasir POS & Dashboard MIS Laporan Penjualan',
            'category' => 'UI/UX & Frontend',
            'category_slug' => 'design',
            'description' => 'Perancangan desain antarmuka (UI/UX) untuk Sistem Informasi Minimarket Kampus. Mencakup perancangan antarmuka transaksi penjualan kasir (Point of Sale / TPS), manajemen keranjang belanja & multi-metode pembayaran (Tunai, QRIS, Debit), serta Dashboard MIS pemantauan laporan penjualan harian/mingguan/bulanan, notifikasi peringatan stok menipis & kadaluarsa, dan analisis performa produk terlaris.',
            'image' => 'images/projects/minimarket-pos.png',
            'gallery' => [
                [
                    'title' => 'Transaksi Penjualan (POS / TPS)',
                    'caption' => 'Antarmuka kasir pemindaian barcode produk, katalog item belanja, dan ringkasan keranjang transaksi',
                    'image' => 'images/projects/minimarket-pos.png',
                ],
                [
                    'title' => 'Dashboard MIS - Laporan & Analisis',
                    'caption' => 'Pemantauan omset harian/mingguan/bulanan, tren produk terlaris, notifikasi stok menipis & kadaluarsa, serta persentase penjualan per kategori produk',
                    'image' => 'images/projects/minimarket-dashboard.png',
                ],
                [
                    'title' => 'Antarmuka Kasir (Tema Header Biru)',
                    'caption' => 'Variasi desain antarmuka sistem transaksi kasir minimarket dengan aksen warna biru yang kontras dan informatif',
                    'image' => 'images/projects/minimarket-pos-blue.png',
                ],
                [
                    'title' => 'Tata Letak POS Layar Lebar',
                    'caption' => 'Tampilan optimalisasi ruang kerja kasir untuk efisiensi kecepatan proses checkout dan pembayaran',
                    'image' => 'images/projects/minimarket-pos-blue-wide.png',
                ],
            ],
            'tags' => ['Figma', 'UI/UX Design', 'POS System', 'Dashboard MIS', 'Prototyping', 'Frontend UI'],
            'metrics' => [
                'Modul Desain' => 'POS Kasir & Dashboard MIS',
                'Metode Pembayaran' => 'Tunai, QRIS, & Kartu Debit',
                'Fitur Monitoring' => 'Alert Stok & Analisis Kategori',
            ],
            'demo_url' => 'https://github.com',
            'github_url' => 'https://github.com/example/minimarket-kampus-design',
            'featured' => true,
            'order' => 3,
        ]);

        Project::create([
            'title' => 'Sistem Manajemen Data Supplier Multi-Database',
            'slug' => 'sistem-manajemen-data-supplier-multi-database',
            'tagline' => 'Aplikasi Web Laravel & AdminLTE Pengelolaan Supplier dari Dua Database',
            'category' => 'Web Apps',
            'category_slug' => 'web',
            'description' => 'Aplikasi web pengelolaan data supplier yang dibangun menggunakan framework Laravel dan template AdminLTE. Dilengkapi fitur integrasi data dari dua database relasional sekaligus, visualisasi grafik statistik persebaran jumlah supplier per kota, antarmuka penambahan data supplier, serta manajemen aksi edit dan hapus data secara terstruktur.',
            'image' => 'images/projects/supplier-dashboard.png',
            'gallery' => [
                [
                    'title' => 'Dashboard Grafik Supplier per Kota',
                    'caption' => 'Visualisasi diagram batang persebaran jumlah data supplier per wilayah kota (Batam, Jakarta, Jogja) dari dua database',
                    'image' => 'images/projects/supplier-dashboard.png',
                ],
                [
                    'title' => 'Tabel Data Supplier Dua Database',
                    'caption' => 'Pemisahan tabel komparatif dan pengelolaan data supplier dari Database 1 dan Database 2 lengkap dengan aksi Edit & Hapus',
                    'image' => 'images/projects/supplier-multi-db.png',
                ],
                [
                    'title' => 'Form Tambah Data Supplier',
                    'caption' => 'Formulir input data supplier baru mencakup Nomor Supplier, Nama, dan Kota tujuan',
                    'image' => 'images/projects/supplier-form.png',
                ],
                [
                    'title' => 'Halaman Awal Laravel',
                    'caption' => 'Antarmuka selamat datang dan otentikasi login/register berbasis framework Laravel',
                    'image' => 'images/projects/supplier-laravel-welcome.png',
                ],
            ],
            'tags' => ['Laravel', 'AdminLTE', 'Multi-Database', 'MySQL', 'Chart.js', 'CRUD'],
            'metrics' => [
                'Arsitektur' => 'Multi-Database Connection (MySQL)',
                'Admin Template' => 'AdminLTE Dashboard & Sidebar',
                'Visualisasi' => 'Grafik Distribusi Supplier per Kota',
            ],
            'demo_url' => 'https://github.com',
            'github_url' => 'https://github.com/example/laravel-supplier-multidb',
            'featured' => true,
            'order' => 4,
        ]);


        // 2. Skills (Keahlian Relevan untuk Magang)
        Skill::truncate();

        $skills = [
            // Desain & Frontend
            ['name' => 'Figma', 'category' => 'Desain & Frontend', 'proficiency' => 90, 'badge' => null, 'order' => 1],
            ['name' => 'HTML5', 'category' => 'Desain & Frontend', 'proficiency' => 90, 'badge' => null, 'order' => 2],
            ['name' => 'CSS3', 'category' => 'Desain & Frontend', 'proficiency' => 88, 'badge' => null, 'order' => 3],
            ['name' => 'Bootstrap & Tailwind CSS', 'category' => 'Desain & Frontend', 'proficiency' => 85, 'badge' => null, 'order' => 4],
            ['name' => 'JavaScript', 'category' => 'Desain & Frontend', 'proficiency' => 78, 'badge' => null, 'order' => 5],

            // Backend & Database
            ['name' => 'PHP', 'category' => 'Backend & Database', 'proficiency' => 82, 'badge' => null, 'order' => 6],
            ['name' => 'Laravel', 'category' => 'Backend & Database', 'proficiency' => 80, 'badge' => null, 'order' => 7],
            ['name' => 'MySQL', 'category' => 'Backend & Database', 'proficiency' => 78, 'badge' => null, 'order' => 8],
            ['name' => 'RESTful API', 'category' => 'Backend & Database', 'proficiency' => 75, 'badge' => null, 'order' => 9],

            // Tools & Workflow
            ['name' => 'Git & GitHub', 'category' => 'Tools & Workflow', 'proficiency' => 85, 'badge' => null, 'order' => 10],
            ['name' => 'Postman', 'category' => 'Tools & Workflow', 'proficiency' => 80, 'badge' => null, 'order' => 11],
            ['name' => 'Composer & NPM', 'category' => 'Tools & Workflow', 'proficiency' => 75, 'badge' => null, 'order' => 12],
            ['name' => 'Visual Studio Code', 'category' => 'Tools & Workflow', 'proficiency' => 90, 'badge' => null, 'order' => 13],
        ];

        foreach ($skills as $s) {
            Skill::create($s);
        }

        // 3. Experiences (Pendidikan, Kegiatan Kampus, & Pelatihan)
        Experience::truncate();

        Experience::create([
            'role' => 'Mahasiswa S1 Teknologi Informasi (Semester 7)',
            'company' => 'Universitas Negeri Yogyakarta (UNY)',
            'location' => 'Yogyakarta, Indonesia',
            'period' => '2022 - Sekarang (Semester 7)',
            'type' => 'education',
            'description' => 'Sedang menempuh semester 7 di Universitas Negeri Yogyakarta dengan minat mendalam pada Desain UI/UX dan Pengembangan Web Frontend. Menguasai alur perancangan purwarupa di Figma hingga implementasi kode antarmuka yang responsif.',
            'highlights' => [
                'Mahasiswa aktif semester 7 dengan Indeks Prestasi Kumulatif (IPK) 3.63 / 4.00.',
                'Fokus minat utama pada Desain UI/UX (Figma) dan Frontend Web Development yang responsif.',
                'Terampil merancang prototipe interaktif di Figma dan mengimplementasikannya ke dalam antarmuka web modern.',
                'Siap mengikuti program magang industri (internship) posisi UI/UX Designer atau Frontend Developer.'
            ],
            'image' => null,
            'badge' => 'Pendidikan',
            'order' => 1,
        ]);

        Experience::create([
            'role' => 'Sertifikasi Python Essentials 1',
            'company' => 'Cisco Networking Academy & OpenEDG Python Institute',
            'location' => 'Kredensial Online',
            'period' => 'September 2025',
            'type' => 'education',
            'description' => 'Memperoleh sertifikat pencapaian (Statement of Achievement) atas penyelesaian kurikulum dan pengujian soal-soal pemrograman Python Essentials 1 yang diselenggarakan oleh Cisco Networking Academy bersama OpenEDG Python Institute.',
            'highlights' => [
                'Menyelesaikan seluruh modul dan soal evaluasi pemrograman dasar Python 3 (sintaks, semantik, & logika algoritma).',
                'Mempelajari perancangan program, debugging kode, serta implementasi modul Python Standard Library.',
                'Memenuhi kualifikasi persiapan sertifikasi PCEP (Certified Entry-Level Python Programmer).'
            ],
            'image' => 'images/certificates/cisco-python-essentials.png',
            'badge' => 'Sertifikasi',
            'order' => 2,
        ]);

        Experience::create([
            'role' => 'Sertifikasi Python Essentials 2',
            'company' => 'Cisco Networking Academy & OpenEDG Python Institute',
            'location' => 'Kredensial Online',
            'period' => 'Oktober 2025',
            'type' => 'education',
            'description' => 'Memperoleh sertifikat kompetensi tingkat lanjut (Statement of Achievement) atas penyelesaian kurikulum dan pengujian soal-soal pemrograman tingkat menengah Python Essentials 2 yang diselenggarakan oleh Cisco Networking Academy bersama OpenEDG Python Institute.',
            'highlights' => [
                'Merancang, mengembangkan, melakukan debugging, dan me-refactor program Python 3 multi-modul.',
                'Menganalisis dan memodelkan studi kasus nyata dengan paradigma Object-Oriented Programming (OOP).',
                'Memahami penerapan Python dalam rekayasa perangkat lunak serta aplikasi nyata.',
                'Memenuhi kualifikasi persiapan sertifikasi PCAP (Certified Associate in Python Programming).'
            ],
            'image' => 'images/certificates/cisco-python-essentials-2.png',
            'badge' => 'Sertifikasi',
            'order' => 3,
        ]);

        // 4. Testimonials (Opsional / Rekomendasi Dosen/Mentor)
        Testimonial::truncate();
        Testimonial::create([
            'name' => 'Dosen Pembimbing Akademik',
            'role' => 'Dosen Teknik Informatika',
            'company' => 'Universitas Negeri Yogyakarta (UNY)',
            'avatar' => 'images/testimonials/avatar-1.jpg',
            'content' => 'Muhammad Al Hafizh Siregar merupakan mahasiswa yang tekun, disiplin, dan memiliki logika pemrograman yang sangat baik. Cepat memahami konsep baru dan mandiri dalam pengerjaan proyek web.',
            'rating' => 5,
        ]);
    }
}
