<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function today(): string
    {
        $today = date('Y-m-d');
        $tasks = (new TaskModel())->where('task_date', $today)->orderBy('id', 'ASC')->findAll();

        return view('tasks/today', ['title' => 'Tasks for Today', 'tasks' => $tasks, 'today' => $today]);
    }

    public function index(): string
    {
        $tasks = (new TaskModel())->orderBy('task_date', 'ASC')->orderBy('id', 'ASC')->findAll();

        return view('tasks/index', ['title' => 'Task List', 'tasks' => $tasks]);
    }
}
