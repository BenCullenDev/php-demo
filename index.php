<?php

require "functions.php";
require "Database.php";

//require "router.php";

$config = require ('config.php');

$id = $_GET['id'];

$query = "select * from posts where id = ?";

$db = new Database($config['database']);

$posts = $db->query($query, [$id])->fetch();

//foreach ($posts as $post)
//{
//    echo "<li>" . $post['title'] . "</li>";
//}

dd($posts);


