<?php

namespace AppBundle\Controller;


// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\registroType;
use AppBundle\Form\registroMateriaType;
use AppBundle\Form\registroCalificacionType;
use AppBundle\Entity\Estudiante;
use AppBundle\Entity\Materias;
use Symfony\Component\Routing\Annotation\Route;

/**
     * @Route("/GestionRegistro")
     */

class GestionRegistroController extends Controller
{
 /**
     * @Route("registroestudiante", name="registroestudiante")
     */
    public function registroestudianteAction(Request $request)
    {
    	$estudiante = new Estudiante();
    	
    	$form = $this->createForm(registroType::class, $estudiante);

    	$form->handleRequest($request);
    	if($form->isSubmitted() && $form->isValid()) {

    		$estudiante = $form->getData();

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($estudiante);
    		$em->flush();
    		return $this->redirectToRoute('registroestudiante',array('id' => $estudiante->getId()));
    	}

        // replace this example code with whatever you need
        return $this->render('GestionRegistro/registroEstudiante.html.twig',array('form'=> $form->createView()));
    }

    /**
     * @Route("registromateria", name="registromateria")
     */
    public function registromateriaAction(Request $request)
    {
    	$materia = new Materias();
    	
    	$form = $this->createForm(registroMateriaType::class, $materia);

    	$form->handleRequest($request);
    	if($form->isSubmitted() && $form->isValid()) {

    		$materia = $form->getData();

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($materia);
    		$em->flush();
    		return $this->redirectToRoute('registromateria',array('id' => $materia->getId()));
    	}

        // replace this example code with whatever you need
        return $this->render('GestionRegistro/registroMateria.html.twig',array('form'=> $form->createView()));
    }

    //  /**
    //  * @Route("registrocalificacion", name="registrocalificacion")
    //  */
    // public function registrocalificacionAction(Request $request)
    // {
    // 	$calificacion = new CalificacionesFinales();
    	
    // 	$form = $this->createForm(registroCalificacionType::class, $calificacion);

    // 	$form->handleRequest($request);
    // 	if($form->isSubmitted() && $form->isValid()) {

    // 		$materia = $form->getData();

    // 		$em = $this->getDoctrine()->getManager();
    // 		$em->persist($calificacion);
    // 		$em->flush();
    // 		return $this->redirectToRoute('registrocalificacion',array('id' => $calificacion->getId()));
    // 	}

    //     // replace this example code with whatever you need
    //     return $this->render('GestionRegistro/registroCalificacion.html.twig',array('form'=> $form->createView()));
    // }

}