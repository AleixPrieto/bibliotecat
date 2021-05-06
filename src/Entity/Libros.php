<?php

namespace App\Entity;

use App\Repository\LibrosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LibrosRepository::class)
 */
class Libros
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=17)
     */
    private $isbn;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $editorial;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $idioma;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $autor;

    /**
     * @ORM\Column(type="integer")
     */
    private $ediciones;

    /**
     * @ORM\Column(type="integer")
     */
    private $edadrecomendada;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getEditorial(): ?string
    {
        return $this->editorial;
    }

    public function setEditorial(string $editorial): self
    {
        $this->editorial = $editorial;

        return $this;
    }

    public function getIdioma(): ?string
    {
        return $this->idioma;
    }

    public function setIdioma(string $idioma): self
    {
        $this->idioma = $idioma;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getEdiciones(): ?int
    {
        return $this->ediciones;
    }

    public function setEdiciones(int $ediciones): self
    {
        $this->ediciones = $ediciones;

        return $this;
    }

    public function getEdadrecomendada(): ?int
    {
        return $this->edadrecomendada;
    }

    public function setEdadrecomendada(int $edadrecomendada): self
    {
        $this->edadrecomendada = $edadrecomendada;

        return $this;
    }
}
