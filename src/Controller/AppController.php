<?php

namespace App\Controller;

use App\Entity\Healthy;
use App\Entity\Unhealthy;
use App\Entity\User;
use App\Entity\SendMail;
use App\Repository\HealthyRepository;
use App\Repository\UserRepository;
use App\Repository\UnhealthyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Respect\Validation\Validator as v;
use Doctrine\ORM\EntityManagerInterface;



class AppController extends AbstractController
{
    private $healthyRepository;
    private $unhealthyRepository;
    private $userRepository;
    private $em;

    /**
     * Constructor.
     */
    public function __construct(HealthyRepository $healthyRepository,UserRepository $userRepository,UnhealthyRepository $unhealthyRepository, EntityManagerInterface $entityManagery) {
        $this->healthyRepository = $healthyRepository;
        $this->unhealthyRepository = $unhealthyRepository;
        $this->userRepository = $userRepository;
        $this->em = $entityManagery;
    }

    /**
     * Route for index page.
     */
    #[Route('/', name: 'app_app')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig');
    }

    /**
     * Route for showing page containg healthy snacks.
     * Displays all healthy snacks from Healthy entity.
     */
    #[Route('/showhealthy', name: 'showhealthy')]
    public function showhealthy(): Response
    {
        $healthy = $this->healthyRepository->findAll();
        return $this->render('app/healthy.html.twig',[
            'healthy' => $healthy,
            ]);
    }

    /**
     * Route for showing page containg unhealthy snacks.
     * Displays all unhealthy snacks from Unhealthy entity.
     */
    #[Route('/showunhealthy', name: 'showunhealthy')]
    public function showunhealthy(): Response
    {
        $unhealthy = $this->unhealthyRepository->findAll();
        return $this->render('app/unhealthy.html.twig',[
            'unhealthy' => $unhealthy,
            ]);
    }

    /**
     * Routr to cart.
     */
    #[Route('/cart', name: 'cart')]
    public function cart(Request $rq): Response
    {
        $quantity = $rq->get('quantity');
        $checked = $rq->get('check');

        if($checked) {
            $amt = $quantity*$checked;
            return $this->render('app/cart.html.twig',[
                'amt' => $amt,
            ]);
        }
        return $this->render('app/cart.html.twig');
    }

    /**
     * Route for checkout button.
     *  Checks validation of form fields.
     *  Sends mail to said mail id.
     */
    #[Route('/checkout', name: 'checkout')]
    public function checkout(Request $rq): Response
    {
        $name = $rq->get("name");
        $email = $rq->get("email");
        $phone = $rq->get("phone");

        /**
         * Form validation using respect.
         */

         //Name field validation.
        if(v::notEmpty()->validate($name)){ 
            if(v::alpha()->validate($name) == FALSE){
              return $this->render('app/cart.html.twig',[
                "nameErr" => "Username can only contain alphabets."
              ]);  
            }
          }
          else if(v::notEmpty()->validate($name) == FALSE) {
            return $this->render('app/cart.html.twig',[
              "nameErrEmpty" => "Please enter username."
            ]);  
          }

          //Email field validation.
          if(v::notEmpty()->validate($email) == FALSE) {
            return $this->render('app/cart.html.twig',[
              "emailErrEmpty" => "Please enter email."
            ]);  
          }

          //Contact number field validation.
        if(v::notEmpty()->validate($phone)){
            if(v::regex('/^[0-9+]{13}+$/')->validate($phone) == FALSE) {
            return $this->render('/music/register.html.twig',[
                "numErr" => "Please enter a valid phone number starting with +91."
            ]); 
            }
        }
        else if(v::notEmpty()->validate($phone) == FALSE) {
            return $this->render('/music/register.html.twig',[
            "numErrEmpty" => "Please enter contact number."
            ]);  
        }

        $mailObj = new sendMail();
        $flag = $mailObj->mailer();
        if($flag == TRUE) {
            return $this->render('app/cart.html.twig',[
                "success" => "Mail has been sent."
              ]);
        }
        else {
            return $this->render('app/cart.html.twig',[
                "error" => "There was an error sending the mail."
              ]);
        }
       
    }


    
}
