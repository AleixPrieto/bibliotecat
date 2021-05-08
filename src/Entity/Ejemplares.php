<?php

namespace App\Entity;

use App\Repository\EjemplaresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EjemplaresRepository::class)
 */
class Ejemplares
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $anyo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $edicion;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prestamos", mappedBy="ejemplares")
     */
    private $prestamos;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Libros", inversedBy="ejemplares")
     */
    private $libros;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnyo(): ?int
    {
        return $this->anyo;
    }

    public function setAnyo(?int $anyo): self
    {
        $this->anyo = $anyo;

        return $this;
    }

    public function getEdicion(): ?int
    {
        return $this->edicion;
    }

    public function setEdicion(?int $edicion): self
    {
        $this->edicion = $edicion;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}
