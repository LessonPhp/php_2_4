<?php

use App\Models\Article;
use App\View;

class AdminIndex extends AdminController
{

    protected function access() : bool
    {
        return isset($_GET['name']) && 'Admin' == $_GET['name'];
    }

    protected function handle()
    //public function actionAdminIndex()
    {

        $this->view->articles = Article::findAllNews();
        echo $this->view->display(__DIR__ . '/../templates/index.php');
    }
}