<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['post_id', 'user_id', 'comment', 'created_at'];

    public function getComments($postId)
    {
        return $this->where('post_id', $postId)->findAll();
    }

    public function getUserById($userId)
    {
        // Misalnya, Anda bisa mendapatkan data pengguna dari tabel users
        return model('UserModel')->find($userId);
    }

    // Dalam CommentModel
    public function getCommentsWithUserNames($post_id)
    {
        return $this->db->table('comments')
            ->select('comments.*, users.username as user_name') // Ubah 'name' menjadi 'username' atau sesuai kolom di tabel
            ->join('users', 'users.id = comments.user_id', 'left')
            ->where('comments.post_id', $post_id)
            ->get()
            ->getResultArray();
    }
    
}
