<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PortfolioController extends Controller
{
    /**
     * Tampilkan halaman utama portofolio
     */
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        $skillsGrouped = Skill::orderBy('order')->get()->groupBy('category');
        $experiences = Experience::orderBy('order')->get();
        $profile = config('portfolio');

        $categories = Project::select('category', 'category_slug')
            ->distinct()
            ->get();

        return view('portfolio.index', compact('projects', 'skillsGrouped', 'experiences', 'categories', 'profile'));
    }

    /**
     * Simpan pesan dari form kontak
     */
    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'is_read' => false,
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih, ' . htmlspecialchars($validated['name']) . '! Pesan Anda telah terkirim. Saya akan membalas ke ' . htmlspecialchars($validated['email']) . ' secepatnya.',
            ]);
        }

        return redirect()->to('/#contact')->with('success', 'Pesan Anda berhasil dikirim! Terima kasih telah menghubungi.');
    }

    /**
     * Download Resume / CV
     */
    public function downloadCv()
    {
        $cvContent = "# CURRICULUM VITAE\n" .
                     "Nama: " . config('portfolio.name', 'Muhammad Al Hafizh Siregar') . "\n" .
                     "Posisi / Minat: " . config('portfolio.role', 'Junior Web Developer & UI/UX Designer') . "\n" .
                     "Pendidikan: S1 Teknik Informatika - Universitas Negeri Yogyakarta (Semester 7)\n" .
                     "Kontak: " . config('portfolio.contact.email') . " | " . config('portfolio.contact.phone') . "\n" .
                     "Lokasi: " . config('portfolio.contact.location') . "\n\n" .
                     "--- RINGKASAN PROFIL ---\n" .
                     config('portfolio.bio_short') . "\n\n" .
                     "--- KOMPETENSI UTAMA ---\n" .
                     "- Desain UI/UX: Figma (Wireframing, High-Fidelity Mockup, Interactive Prototyping, Design Systems)\n" .
                     "- Backend: PHP 8.2+, Laravel 11 (MVC, Eloquent ORM, Blade, Routing), MySQL Relational Database, RESTful API, Postman\n" .
                     "- Frontend: HTML5, CSS3 (Mobile-First, Responsive Design), Tailwind CSS, Bootstrap 5, JavaScript (DOM Manipulation)\n" .
                     "- Workflow & Tools: Git, GitHub, Composer, NPM, VS Code\n\n" .
                     "--- RIWAYAT PROYEK & PENDIDIKAN ---\n" .
                     "- S1 Teknik Informatika, Universitas Negeri Yogyakarta (2022 - Sekarang, Semester 7)\n" .
                     "- Sistem Informasi Perpustakaan Kampus (Laravel 11, MySQL, Bootstrap)\n" .
                     "- Website Kasir & E-Katalog UMKM (Figma UI/UX, Laravel, MySQL, Tailwind CSS)\n" .
                     "- Asisten Praktikum Pemrograman Web (Laboratorium Komputer Kampus)\n";

        return Response::make($cvContent, 200, [
            'Content-Type' => 'text/markdown',
            'Content-Disposition' => 'attachment; filename="CV_Muhammad_Al_Hafizh_Siregar.md"',
        ]);
    }
}
