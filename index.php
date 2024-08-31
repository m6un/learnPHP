<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require 'config.php';


$db = new DataBase($config['database']);
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

// preparing a new query



foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
    