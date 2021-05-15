<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalificacionesFinales
 *
 * @ORM\Table(name="calificaciones_finales")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CalificacionesFinalesRepository")
 */
class CalificacionesFinales
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime")
     */
    private $fechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_estudiante", type="string", length=255)
     */
    private $nombreEstudiante;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_materia", type="string", length=255)
     */
    private $nombreMateria;

    /**
     * @var int
     *
     * @ORM\Column(name="calificacion_final", type="integer")
     */
    private $calificacionFinal;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return CalificacionesFinales
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set nombreEstudiante
     *
     * @param string $nombreEstudiante
     *
     * @return CalificacionesFinales
     */
    public function setNombreEstudiante($nombreEstudiante)
    {
        $this->nombreEstudiante = $nombreEstudiante;

        return $this;
    }

    /**
     * Get nombreEstudiante
     *
     * @return string
     */
    public function getNombreEstudiante()
    {
        return $this->nombreEstudiante;
    }

    /**
     * Set nombreMateria
     *
     * @param string $nombreMateria
     *
     * @return CalificacionesFinales
     */
    public function setNombreMateria($nombreMateria)
    {
        $this->nombreMateria = $nombreMateria;

        return $this;
    }

    /**
     * Get nombreMateria
     *
     * @return string
     */
    public function getNombreMateria()
    {
        return $this->nombreMateria;
    }

    /**
     * Set calificacionFinal
     *
     * @param integer $calificacionFinal
     *
     * @return CalificacionesFinales
     */
    public function setCalificacionFinal($calificacionFinal)
    {
        $this->calificacionFinal = $calificacionFinal;

        return $this;
    }

    /**
     * Get calificacionFinal
     *
     * @return int
     */
    public function getCalificacionFinal()
    {
        return $this->calificacionFinal;
    }
}

