<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Article;
use App\View;

class Index extends Controller
{

    protected function actionIndex()
    {
        //$view = new View();
        $this->view->articles = Article::findAllNews();
        echo $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    protected function actionArticle()
    {

        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
        } else {
            header('Location: /lesson_4/home_work1/index.php');
            die;
        }
        //$view = new View();
        $this->view->article = \App\Models\Article::findByIdArticle($id);

        echo $this->view->display( __DIR__ . '/../../templates/article.php');
    }
}