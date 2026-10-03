<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $today = date('Y-m-d');
        $createdAt = date('Y-m-d H:i:s');

        $this->db->table('tasks')->insertBatch([
            ['title' => '[F3-FORMATIVE] Module 3: CodeIgniter Data Layer', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[F1-FORMATIVE] First Formative Assessment', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[F1-FORMATIVE] Module 1: CodeIgniter Foundations', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[F2-FORMATIVE] Second Formative Assessment', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[F3-FORMATIVE] Module 3: CodeIgniter Forms, Validation, Files', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[TECHNICAL] [AI-ASSISTED] Technical Summative Assessment 1', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[TECHNICAL] [AI-ASSISTED] Technical Summative Assessment 2', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[TECHNICAL] [AI-PROHIBITED] Technical Summative Assessment 1', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[AI-INTEGRATED] Module 1: CodeIgniter Foundations', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[AI-INTEGRATED] Module 2: CodeIgniter Data Layer', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[AI-INTEGRATED] Module 3: CodeIgniter Forms, Validation, Files', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[AI-ASSISTED] Module 1: CodeIgniter Foundations', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[AI-ASSISTED] Module 2: CodeIgniter Data Layer', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => '[AI-ASSISTED] Module 3: CodeIgniter Forms, Validation, Files', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
        ]);

        $this->db->table('users')->insert([
            'username' => 'josapnu',
            'full_name' => 'Josapnu',
            'email' => 'josapnu@example.com',
            'created_at' => $createdAt,
        ]);
    }
}
