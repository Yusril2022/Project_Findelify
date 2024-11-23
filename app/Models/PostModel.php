<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image', 'user_id', 'location', 'contact', 'is_found', 'created_at'];
    
    public function getPosts()
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }

    public function getFoundItems()
    {
        return $this->where('is_found', true)->findAll();
    }

    public function getLostItems()
    {
        return $this->where('is_found', false)->findAll();
    }
}
