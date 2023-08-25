<?php

$config = require(base_path('config.php'));
$db = new Database($config['database']);

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
        'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] == '1');

require view('notes/show.view.php', [
        'header' => 'Note',
        'note' => $note
]);