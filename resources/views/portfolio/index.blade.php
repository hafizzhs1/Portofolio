@extends('layouts.app')

@section('title', 'Portofolio Magang | ' . config('portfolio.name', 'Budi Pratama') . ' - ' . config('portfolio.role', 'Junior Web Developer'))

@section('description', 'Website portofolio resmi untuk pendaftaran magang (internship) posisi Web Developer. Menampilkan proyek berbasis Laravel, MySQL, dan pemahaman dasar rekayasa perangkat lunak.')

@section('content')
    <!-- Hero Section -->
    @include('partials.hero')

    <!-- About & Education Section -->
    @include('partials.about')

    <!-- Projects Portfolio Showcase -->
    @include('partials.projects')

    <!-- Technical Skills & Competencies -->
    @include('partials.skills')

    <!-- Education & Experience Timeline -->
    @include('partials.experience')

    <!-- Contact Form & Reach Out -->
    @include('partials.contact')
@endsection
