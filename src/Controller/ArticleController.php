<?php
    /**
     * Created by PhpStorm.
     * User: kalanimarquand
     * Date: 04/04/2019
     * Time: 16:57
     */
    
    namespace App\Controller;
    
    
    use Symfony\Component\HttpFoundation\Response;

    class ArticleController
    {
        public function homepage()
        {
            return new Response('My first page !');
        }
    }