<?php

namespace App\Repositories;

use App\Task;
use App\User;

class TasksRepository extends BaseRepository
{

    protected function extractData($extracted = [])
    {
        $extracted = [];
        if ($this->request->has('title')) {
            $extracted['title'] = $this->request->get('title');
        }

        if ($this->request->has('is_done')) {
            $extracted['is_done'] = $this->request->get('is_done');
        }

        return $extracted;
    }

    public function lists()
    {
        $task = $this->user->tasks();
        if ($is_done = $this->request->get('is_done')) {
            $task->where('is_done', $is_done);
        }
        if ($title = $this->request->get('title')) {
            $task->where('title', 'like', "%{$title}%");
        }

        return $task->paginate();
    }

    public function create()
    {
        return $this->user->tasks()->create($this->extractData());
    }

    public function update(Task $task)
    {
        $task->update($this->extractData());
        return $task;
    }

    public function delete(Task $task)
    {
        $task->delete();
        return $task;
    }

}
