<?php

namespace src\Controllers;

use src\Core\Controller;
use src\Models\PostModel;
use src\Core\Helpers;

class SiteController extends Controller
{

    public function __construct()
    {
        parent::__construct("Views/site/view");
    }

    public function index()
    {
        $posts = (new PostModel())->search();

        print $this->template->renderizar('index.html', [
            'posts'=> $posts
        ]);
    }
    
    public function post(int $id): void
    {
        $post = (new PostModel)->searchId($id);

        if(!$post){
            Helpers::redirecionar('404');
        }

        print $this->template->renderizar('post.html', [
            'post' => $post
        ]);
    }

    public function search(): void
    {
        $search = filter_input(INPUT_POST, 'search', FILTER_DEFAULT);

        if(isset($search)){
            $posts = (new PostModel())->searchBar($search);

            foreach ($posts as $post){
                echo "<li class='list-group-item fw-bold md-3'><a href='http://localhost/Mysite/post/".$post['id']."' class='text-white'>".$post['title']."</a></li><hr/>";
            }
        }
    }

    public function sobre()
    {
        print $this->template->renderizar('sobre.html', [
            "pagina" => "Sobre"
        ]);
    }

}