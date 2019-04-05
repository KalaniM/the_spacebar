<?php
    /**
     * Created by PhpStorm.
     * User: kalanimarquand
     * Date: 04/04/2019
     * Time: 16:57
     */
    
    namespace App\Controller;
    
    
    use Psr\Log\LoggerInterface;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\JsonResponse;

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
                'slug' => $slug,
                'comments' => $comments
            ]);
        }
        
        /**
         * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
         */
        public function toggleArticleHeart($slug, LoggerInterface $logger)
        {
            // TODO - actually heart/unheart the article
            
            $logger->info('Article is being hearted');
            
            return new JsonResponse(['hearts' => rand(5, 100)]);
        }
        
    }