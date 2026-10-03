<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
</head>
<body>
    <header>
        <a href="<?= site_url('/') ?>">Tasks for Today</a>
        <nav>
            <a href="<?= site_url('/') ?>">Welcome</a> |
            <a href="<?= site_url('tasks') ?>">Task List</a> |
            <a href="<?= site_url('profile') ?>">Profile</a> |
            <a href="<?= site_url('about') ?>">About</a>
        </nav>
    </header>
    <hr>
    <main><?= $this->renderSection('content') ?></main>
</body>
</html>
