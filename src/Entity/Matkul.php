<?php
// api/src/Entity/Matkul.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * A book.
 *
 * @ORM\Entity
 * @ApiResource
 */
class Matkul
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null The ISBN of this book (or null if doesn't have one).
     *
     * @ORM\Column(type="string",length=10)
     */
    public $kode;

    /**
     * @var string The title of this book.
     *
     * @ORM\Column(type="string", length=25)
     */
    public $nama;

    /**
     * @var string The title of this book.
     *
     * @ORM\Column(type="string", length=10)
     */
    public $jumlah_sks;

    /**
     * @var RsMatkul[] Available reviews for this book.
     *
     * @ORM\ManyToOne(targetEntity="RsMatkul", inversedBy="matkul", cascade={"persist", "remove"})
     */
    public $rs_matkul;

    public function __construct()
    {
        $this->rs_matkul = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->kode;
    }
}