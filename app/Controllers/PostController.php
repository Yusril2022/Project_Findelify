<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\CommentModel;
use CodeIgniter\Controller;

class PostController extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->getPosts();
        return view('posts', $data);
    }

    public function create()
    {
        return view('create_post');
    }

    public function store()
    {
        $model = new PostModel();
        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/', $imageName);

        $data = [
            'user_id' => session()->get('user_id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image' => $imageName,
            'location' => $this->request->getPost('location'), 
            'contact' => $this->request->getPost('contact') 
        ];
        $model->save($data);
        return redirect()->to('/posts');
    }

    public function show($id)
    {
        $postModel = new PostModel();
        $commentModel = new CommentModel();
        
        $data['post'] = $postModel->find($id);
        $data['comments'] = $commentModel->getCommentsWithUserNames($id); // Ambil nama user bersama komentar
        
        return view('post_detail', $data);
    }

    public function addComment()
    {
        $model = new CommentModel();
        $data = [
            'post_id' => $this->request->getPost('post_id'),
            'user_id' => session()->get('user_id'),
            'comment' => $this->request->getPost('comment'),
        ];
        $model->save($data);
        return redirect()->to('/post/' . $data['post_id']);
    }


    public function foundItems()
    {
        $model = new PostModel();
        $data['foundItems'] = $model->getFoundItems();
        return view('found_items', $data);
    }

    public function markAsFound($id)
    {
        $model = new PostModel();
        $model->update($id, ['is_found' => true]);
        return redirect()->to('/posts/' . $id)->with('message', 'Item has been marked as found.');
    }
}
