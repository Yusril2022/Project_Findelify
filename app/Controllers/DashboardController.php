<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PostModel;
use CodeIgniter\Controller;


class DashboardController extends Controller
{
    public function index(): string
    {
    $postModel = new \App\Models\PostModel();
    $posts = $postModel->orderBy('created_at', 'DESC')->findAll(); // Mengambil semua postingan terbaru
    
    return view('dashboard', ['posts' => $posts]);
    }
}