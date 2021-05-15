<?php

namespace AppBundle\Controller;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Estudiante;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
    // /**
    //  * @Route("registroestudiante", name="registroestudiante")
    //  */
    // public function registroestudianteAction(Request $request)
    // {
    //     // replace this example code with whatever you need
    //     return $this->render('frontal/registroestudiante.html.twig');
    // }
    // /**
    //  * @Route("registromateria", name="registromateria")
    //  */
    // public function registromateriaAction(Request $request)
    // {
    //     // replace this example code with whatever you need
    //     return $this->render('frontal/index.html.twig');
    // }
    /**
     * @Route("registrocalificacion", name="registrocalificacion")
     */
    public function registrocalificacionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
      /**
     * @Route("edicionestudiante", name="edicionestudiante")
     */
    public function edicionestudianteAction(Request $request)
    {

    	$estudianteRepository = $this->getDoctrine()->getRepository(Estudiante::class);
    	$estudiante = $estudianteRepository->findAll();
            // replace this example code with whatever you need
        return $this->render('frontal/edicionEstudiante.html.twig', array('estudiante'=>$estudiante));
    }
    /**
     * @Route("edicionmateria", name="edicionmateria")
     */
    public function edicionmateriaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
    /**
     * @Route("edicioncalificacion", name="edicioncalificacion")
     */
    public function edicioncalificacionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
      /**
     * @Route("eliminarestudiante", name="eliminarestudiante")
     */
    public function eliminarestudianteAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
    /**
     * @Route("eliminarmateria", name="eliminarmateria")
     */
    public function eliminarmateriaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
    /**
     * @Route("eliminarcalificacion", name="eliminarcalificacion")
     */
    public function eliminarcalificacionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
    /**
     * @Route("consultas", name="consultas")
     */
    public function consultasAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
    /**
     * @Route("traduccion", name="traduccion")
     */
    public function traduccionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
}
