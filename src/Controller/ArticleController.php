<?php
    /**
     * Created by PhpStorm.
     * User: kalanimarquand
     * Date: 04/04/2019
     * Time: 16:57
     */
    
    namespace App\Controller;
    
    
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class ArticleController extends AbstractController
    {
        /**
         * @Route("/", name="app_homepage")
         */
        public function homepage()
        {
            return $this->render('article/homepage.html.twig');
        }
    
        /**
         * @Route("/news/{slug}", name="article_show")
         */
        public function show($slug)
        {
            $comments = [
                'I ate a normal rock once. It did NOT taste like bacon!',
                'Woohoo! I\'m going on an all-asteroid diet!',
                'I like bacon too! Buy some from my site! bakinsomebacon.com',
            ];
            
            
            return $this->render('article/show.html.twig', [
                'title' => ucwords(str_replace('-', ' ', $slug)),
                'comments' => $comments
            ]);
        }
    }