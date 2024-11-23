<?php
namespace App\Controllers;

use App\Models\CommentModel;


class CommentController extends BaseController
{
    public function store()
    {
        $model = new CommentModel();
        
        $data = [
            'post_id' => $this->request->getPost('post_id'),
            'user_id' => session()->get('user_id'), // Ambil user_id dari sesi
            'comment' => $this->request->getPost('comment'),
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $model->save($data);
        
        return redirect()->to('/post/detail/' . $data['post_id']);

        
    }
}
