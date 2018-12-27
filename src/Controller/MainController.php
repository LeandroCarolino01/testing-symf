<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    /*this has to be brought in after installing annotations*/
    use Symfony\Component\Routing\Annotation\Route;

    /* this adds methods such as get,post,delete and this sort of thing*/
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


    class MainController extends AbstractController {

        /*
         * this comment will be similar to the comment bellow where we add annotations(routes)
         * or methods like post,get and etc
         */


        /**
         * @Route("/")
         * @Method({"GET"})
         *
         */
        public function index(){
            /*
             * this would be for tests without twig templates
             */
            //return new Response('<html><body>Hello</body></html>');

            return $this->render('pages/index.html.twig');



        }

    }