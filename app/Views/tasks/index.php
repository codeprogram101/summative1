<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h1>Task List</h1>
<p><?= count($tasks) ?> tasks</p>
<table border="1" cellpadding="8">
    <thead><tr><th>Title</th><th>Status</th><th>Date</th></tr></thead>
    <tbody><?php foreach ($tasks as $task): ?><tr><td><?= esc($task['title']) ?></td><td><?= esc($task['status']) ?></td><td><?= esc($task['task_date']) ?></td></tr><?php endforeach ?></tbody>
</table>
<?= $this->endSection() ?>
