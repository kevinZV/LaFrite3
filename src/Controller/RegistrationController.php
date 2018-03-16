<?php

namespace App\Controller;

use App\Form\UserType;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class RegistrationController extends Controller
    {
        /**
         * @Route("/register", name="user_registration")
         */
        public function registerAction(Request $request){
            // 1) build the form
            $user = new User();
            $form = $this->createForm(UserType::class, $user);

            // 2) handle the submit (will only happen on POST)
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {


                // 4) save the User!
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                // ... do any other work - like sending them an email, etc
                // maybe set a "flash" success message for the user

                return $this->redirectToRoute('replace_with_some_route');
            }

            return $this->render(
                'registration/register.html.twig',
                array('form' => $form->createView())
            );
        }
    }
