<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function portfolio(): \Illuminate\View\View
    {
        $userName = Auth::check() ? Auth::user()->name : 'Flint';
        return view('portfolio', [
            'user' => 'Flint',
            'title' => 'Full Stack Developer',
            'description' => 'Spesialis Laravel & PHP dengan pengalaman 5+ tahun'
        ]);
    }   

    /**
     * Menampilkan daftar proyek dari database menggunakan Model
     */
    public function index()
    {
        // Ambil semua proyek dengan Model, urutkan dari yang terbaru
        $projects = Project::latest()->get();
        
        // Jika tidak ada data di database, buat data dummy (fallback)
        if ($projects->isEmpty()) {
            $projects = collect([
                (object)[
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
     * Menampilkan detail proyek berdasarkan ID
     */
    public function show($id)
    {
        // Gunakan Model untuk mencari proyek
        $project = Project::find($id);
        
        // Jika proyek tidak ditemukan, tampilkan error 404
        if (!$project) {
            abort(404, 'Proyek tidak ditemukan');
        }

        return view('projects.show', compact('project'));
    }

    /**
     * Menampilkan proyek berdasarkan kategori (opsional)
     */
    public function byCategory($category)
    {
        $projects = Project::where('category', $category)->latest()->get();
        
        if ($projects->isEmpty()) {
            return redirect()->route('projects.index')
                ->with('error', 'Tidak ada proyek dengan kategori tersebut');
        }

        return view('projects.category', compact('projects', 'category'));
    }

    /**
     * API endpoint untuk mendapatkan data proyek (opsional, untuk AJAX)
     */
    public function apiIndex()
    {
        $projects = Project::latest()->get();
        
        return response()->json([
            'success' => true,
            'data' => $projects,
            'count' => $projects->count()
        ]);
    }
}