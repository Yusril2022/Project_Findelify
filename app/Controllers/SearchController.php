<?php

namespace App\Controllers;

use App\Models\PostModel;

class SearchController extends BaseController
{
    public function search()
    {
        $query = $this->request->getGet('query');
        $postModel = new PostModel();

        // Cari postingan berdasarkan judul atau deskripsi yang mengandung kata kunci
        $posts = $postModel->like('title', $query)
                           ->orLike('description', $query)
                           ->findAll();

        // Tampilkan hasil pencarian di view 
        echo view('posts', ['posts' => $posts, 'query' => $query]);
        
    }
}
