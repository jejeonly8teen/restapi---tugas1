<?php

namespace App\Models;

use CodeIgniter\Model;

class todolistModel extends Model
{
    protected $table = 'todos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['task', 'status'];

    public function getTodos()
    {
        return $this->where('status !=', 'deleted')->findAll();
    }

    public function addTodo($task)
    {
        $data = ['task' => $task, 'status' => 'pending'];
        return $this->insert($data);
    }

    public function completeTodo($id)
    {
        return $this->update($id, ['status' => 'completed']);
    }

    public function deleteTodo($id)
    {
        return $this->update($id, ['status' => 'deleted']);
    }
}
