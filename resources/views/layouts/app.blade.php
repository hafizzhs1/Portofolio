<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'Portofolio | ' . config('portfolio.name', 'Budi Pratama') . ' - ' . config('portfolio.role', 'Junior Web Developer'))</title>
    <meta name="title" content="@yield('title', 'Portofolio | ' . config('portfolio.name', 'Budi Pratama'))">
    <meta name="description" content="@yield('description', config('portfolio.bio_short'))">
    <meta name="author" content="{{ config('portfolio.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Portofolio | ' . config('portfolio.name'))">
    <meta property="og:description" content="@yield('description', config('portfolio.bio_short'))">
    <meta property="og:image" content="{{ asset(config('portfolio.avatar', 'images/profile.jpg')) }}">

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Top Navigation Bar -->
    @include('partials.navbar')

    <!-- Main Content Area -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Project Detail Modal -->
    @include('partials.project-modal')

    <!-- Footer -->
    @include('partials.footer')

    <!-- Toast Notification Container -->
    <div id="toast-container" class="toast-container" aria-live="polite">
        @if(session('success'))
            <div class="toast">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif
    </div>

    <!-- JavaScript Scripts -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
    @stack('scripts')
</body>
</html>
