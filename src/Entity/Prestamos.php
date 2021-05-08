<?php

namespace App\Entity;

use App\Repository\PrestamosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrestamosRepository::class)
 */
class Prestamos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $prestamo;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $limite;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $devolucion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrestamo(): ?\DateTimeInterface
    {
        return $this->prestamo;
    }

    public function setPrestamo(?\DateTimeInterface $prestamo): self
    {
        $this->prestamo = $prestamo;

        return $this;
    }

    public function getLimite(): ?\DateTimeInterface
    {
        return $this->limite;
    }

    public function setLimite(?\DateTimeInterface $limite): self
    {
        $this->limite = $limite;

        return $this;
    }

    public function getDevolucion(): ?\DateTimeInterface
    {
        return $this->devolucion;
    }

    public function setDevolucion(?\DateTimeInterface $devolucion): self
    {
        $this->devolucion = $devolucion;

        return $this;
    }
}
