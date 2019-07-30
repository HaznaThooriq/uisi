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
class RencanaStudi
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
     * @ORM\Column(type="string",length=5)
     */
    public $tahun_akademik;

    /**
     * @var string The title of this book.
     *
     * @ORM\Column(type="string", length=10)
     */
    public $semester;

    /**
     * @var string|null The ISBN of this book (or null if doesn't have one).
     *
     * @ORM\Column(type="integer")
     */
    public $id_mahasiswa;

    /**
     * @var RsMatkul[] Available reviews for this book.
     *
     * @ORM\OneToMany(targetEntity="RsMatkul", mappedBy="rencana_studi", cascade={"persist", "remove"})
     */
    public $rs_matkul;

    /**
     * @var Mahasiswa[] Available reviews for this book.
     *
     * @ORM\ManyToOne(targetEntity="Mahasiswa", inversedBy="rencana_studi", cascade={"persist", "remove"})
     */
    public $mahasiswa;

    public function __construct()
    {
        $this->rs_matkul = new ArrayCollection();
        $this->mahasiswa = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}