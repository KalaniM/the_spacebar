<?php
    /**
     * Created by PhpStorm.
     * User: kalanimarquand
     * Date: 04/04/2019
     * Time: 16:57
     */
    
    namespace App\Controller;
    
    
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Component\HttpFoundation\Response;

    class ArticleController
    {
        /**
         * @Route("/")
         */
        public function homepage()
        {
            return new Response('My first page !');
        }
    
        /**
         * @Route("/news/{slug}")
         */
        public function show($slug)
        {
            return new Response(sprintf(
                'Future page to show article : %s', $slug
            ));
        }
    }