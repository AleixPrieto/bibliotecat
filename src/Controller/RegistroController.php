<?php

namespace App\Controller;

use App\Entity\Socios;
use App\Form\SocioType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="registro")
     */
    public function index(Request $request): Response
    {
        $socio = new Socios();
        $form = $this->createForm(SocioType::class, $socio);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $socio->setRoles(['ROLE_ADMIN']);
            //$socio->setAlta('data_timzone');
            $em->persist($socio);
            $em->flush();
            $this->addFlash('exito', 'Registro completado');
            return $this->redirectToRoute('registro');
        }
        return $this->render('registro/index.html.twig', [
            'controller_name' => 'RegistroController',
            'formulario' => $form->createView()
        ]);
    }
}
