<?php

namespace App\Acls;

use App\Task;

class TasksAcl extends BaseAcl
{

    protected function show()
    {
        $task = $this->route->parameter('tasks', new Task);
        if ($this->user->id != $task->user_id) {
            return false;
        }
        return true;
    }

    protected function update()
    {
        $task = $this->route->parameter('tasks', new Task);
        if ($this->user->id != $task->user_id) {
            return false;
        }
        return true;
    }

    protected function delete()
    {
        $task = $this->route->parameter('tasks', new Task);
        if ($this->user->id != $task->user_id) {
            return false;
        }
        return true;
    }
}
