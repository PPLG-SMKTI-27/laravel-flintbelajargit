<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function portfolio(): \Illuminate\View\View
    {
        return view('portfolio', [
            'user' => 'Flint',
            'title' => 'Full Stack Developer',
            'description' => 'Spesialis Laravel & PHP dengan pengalaman 5+ tahun'
        ]);
    }   

    /**
     * Menampilkan daftar proyek dari database
     */
    public function index()
    {
        // Ambil data proyek dari database
        $projects = DB::table('projects')
            ->select('id', 'title', 'category', 'description', 'image', 'technologies', 'demo_url', 'source_url')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($project) {
                // Decode JSON technologies ke array
                $project->technologies = json_decode($project->technologies, true);
                return $project;
            });

        // Jika database kosong, gunakan data dummy (fallback)
        if ($projects->isEmpty()) {
            $projects = collect([
                [
                    'id' => 1,
                    'title' => 'Laravel E-Shop Platform',
                    'category' => 'E-commerce',
                    'description' => 'Platform e-commerce lengkap dengan sistem pembayaran, manajemen produk, keranjang belanja, dan dashboard admin.',
                    'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80',
                    'technologies' => ['Laravel', 'MySQL', 'JavaScript', 'Bootstrap'],
                    'demo_url' => '#',
                    'source_url' => '#'
                ],
                // ... tambahkan data dummy lainnya jika perlu
            ]);
        }

        return view('projects.index', compact('projects'));
    }

    /**
     * Menampilkan detail proyek (opsional)
     */
    public function show($id)
    {
        // Ambil data proyek berdasarkan ID
        $project = DB::table('projects')->where('id', $id)->first();
        
        if (!$project) {
            abort(404, 'Proyek tidak ditemukan');
        }

        // Decode JSON technologies
        $project->technologies = json_decode($project->technologies, true);

        return view('projects.show', compact('project'));
    }
}