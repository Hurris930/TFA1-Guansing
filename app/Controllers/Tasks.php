<?php

namespace App\Controllers;

use App\Models\TaskModel;
use DateTime;
use DateTimeZone;

class Tasks extends BaseController
{
    public function today(): string
    {
        $taskModel = new TaskModel();
        $manilaNow = new DateTime('now', new DateTimeZone('Asia/Manila'));
        $today = $manilaNow->format('Y-m-d');

        $data = [
            'title'      => 'Welcome',
            'activePage' => 'welcome',
            'today'      => $today,
            'todayLabel' => $manilaNow->format('l, F j, Y'),
            'tasks'      => $taskModel
                ->where('task_date', $today)
                ->orderBy('id', 'ASC')
                ->findAll(),
        ];

        return view('assets/layouts/header', $data)
            . view('assets/pages/tasks/today', $data)
            . view('assets/layouts/footer');
    }

    public function index(): string
    {
        $taskModel = new TaskModel();

        $data = [
            'title'      => 'Task List',
            'activePage' => 'tasks',
            'tasks'      => $taskModel
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll(),
        ];

        return view('assets/layouts/header', $data)
            . view('index', $data)
            . view('assets/layouts/footer');
    }
}
