<?php
require __DIR__ . '/../autoload.php';

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: /lesson_4/home_work1/index.php');
    die;
}


$article = \App\Models\Article::findByIdArticle($id);
$article->delete();
header('Location: /lesson_4/home_work1/admin/index.php');
die;