<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Informasi Profil Pribadi (Khusus Portofolio Magang / Internship)
    |--------------------------------------------------------------------------
    */
    'name' => env('PORTFOLIO_NAME', 'Muhammad Al Hafizh Siregar'),
    'first_name' => env('PORTFOLIO_FIRST_NAME', 'Al Hafizh'),
    'last_name' => env('PORTFOLIO_LAST_NAME', 'Siregar'),
    'initials' => env('PORTFOLIO_INITIALS', 'AS'),

    'role' => env('PORTFOLIO_ROLE', 'UI/UX Designer & Frontend Developer | Mahasiswa Semester 7 UNY'),
    'status_badge' => 'Terbuka untuk Kesempatan Magang (Internship)',
    'is_available' => true,

    'bio_short' => 'Mahasiswa Semester 7 S1 Teknologi Informasi di Universitas Negeri Yogyakarta yang memiliki ketertarikan tinggi pada bidang UI/UX Design menggunakan Figma dan pengembangan Frontend Web yang modern, responsif, serta berorientasi pada kenyamanan pengguna. Siap berkontribusi langsung di industri melalui program magang.',
    
    'about' => [
        'heading' => 'Fokus pada Desain yang Intuitif dan Frontend yang Responsif',
        'p1' => 'Halo! Saya Muhammad Al Hafizh Siregar, mahasiswa semester 7 program studi S1 Teknologi Informasi di Universitas Negeri Yogyakarta. Saya memiliki ketertarikan mendalam pada perancangan desain antarmuka pengguna (UI/UX) menggunakan Figma serta pengembangan web di sisi Frontend untuk menciptakan tampilan visual yang menarik, responsif, dan ramah pengguna.',
        'p2' => 'Selama perkuliahan hingga semester 7 ini, saya terbiasa merancang wireframe, mockup visual, hingga prototype interaktif di Figma, lalu menerjemahkannya ke dalam kode antarmuka web yang rapi dan responsif menggunakan HTML5, CSS3, Tailwind CSS, dan JavaScript (didukung pemahaman integrasi web dengan Laravel). Memasuki masa magang, saya siap memberikan dedikasi dan kreativitas terbaik untuk tim Anda.',
        'education_degree' => 'S1 Teknologi Informasi',
        'education_campus' => 'Universitas Negeri Yogyakarta (UNY)',
        'semester' => 'Semester 7',
        'projects_completed' => '4 Proyek',
        'gpa' => '3.63 / 4.00',
    ],

    /*
    |--------------------------------------------------------------------------
    | Foto Profil
    |--------------------------------------------------------------------------
    | Letakkan foto profil asli Anda di: public/images/profile.jpg
    */
    'avatar' => 'images/profile.jpg',

    /*
    |--------------------------------------------------------------------------
    | Informasi Kontak & Media Sosial
    |--------------------------------------------------------------------------
    */
    'contact' => [
        'email' => env('PORTFOLIO_EMAIL', 'Afizb300@gmail.com'),
        'location' => env('PORTFOLIO_LOCATION', 'Yogyakarta, Indonesia (Siap On-site & Remote)'),
        'github' => env('PORTFOLIO_GITHUB', 'https://github.com'),
        'linkedin' => env('PORTFOLIO_LINKEDIN', 'https://linkedin.com'),
        'twitter' => env('PORTFOLIO_TWITTER', ''),
    ],
];
