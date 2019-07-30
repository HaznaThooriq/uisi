<?php
// api/src/Entity/Mahasiswa.php

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
class RsMatkul
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
     * @ORM\Column(type="integer",length=11)
     */
    public $id_rs_matkul;

    /**
     * @var string The title of this book.
     *
     * @ORM\Column(type="integer", length=11)
     */
    public $id_matkul;

    /**
     * @var RencanaStudi[] Available reviews for this book.
     *
     * @ORM\ManyToOne(targetEntity="RencanaStudi", inversedBy="rs_matkul", cascade={"persist", "remove"})
     */
    public $rencana_studi;

    /**
     * @var Matkul[] Available reviews for this book.
     *
     * @ORM\ManyToOne(targetEntity="Matkul", inversedBy="rs_matkul", cascade={"persist", "remove"})
     */
    public $matkul;

    public function __construct()
    {
        $this->rencana_studi = new ArrayCollection();
        $this->matkul = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}