<?php

namespace App\Controllers;

use App\Models\todolistModel;

class todolistController extends BaseController
{
    protected $todolistModel;

    public function __construct()
    {
        $this->todolistModel = new todolistModel();
    }

    public function index()
    {
        $data['todos'] = $this->todolistModel->getTodos();
        return view('todolistView', $data);
    }

    public function add()
    {
        $task = $this->request->getPost('task');
        if (!empty($task)) {
            $this->todolistModel->addTodo($task);
        }
        return redirect()->to('/todolist');
    }

    public function complete($id)
    {
        $this->todolistModel->completeTodo($id);
        return redirect()->to('/todolist');
    }

    public function delete($id)
    {
        $this->todolistModel->deleteTodo($id);
        return redirect()->to('/todolist');
    }
}
