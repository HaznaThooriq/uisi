<?php
// api/src/Entity/Mahasiswa.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * A book.
 *
 * @ORM\Entity
 * @ApiResource
 */
class Mahasiswa
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
     * @ORM\Column(type="string",length=15)
     */
    public $nim;

    /**
     * @var string|null The ISBN of this book (or null if doesn't have one).
     *
     * @ORM\Column(type="string",length=30)
     */
    public $nama;

    /**
     * @var string The title of this book.
     *
     * @ORM\Column(type="string", length=40)
     */
    public $prodi;

    /**
     * @var string The description of this book.
     *
     * @ORM\Column(type="string",length=15)
     */
    public $dosen_wali;

    /**
     * @var RencanaStudi[] Available reviews for this book.
     *
     * @ORM\OneToMany(targetEntity="RencanaStudi", mappedBy="mahasiswa", cascade={"persist", "remove"})
     */
    public $rencana_studi;

    public function __construct()
    {
        $this->rencana_studi = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->nim;
    }
}