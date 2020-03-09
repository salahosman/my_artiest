<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptredenRepository")
 */
class Optreden
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Artiest", inversedBy="optredens")
     */
    private $artiest_id;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    /**
     * @ORM\Column(type="integer")
     */
    private $aanvang;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zaal;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxSeats;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtiestId(): ?Artiest
    {
        return $this->artiest_id;
    }

    public function setArtiestId(?Artiest $artiest_id): self
    {
        $this->artiest_id = $artiest_id;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getAanvang(): ?string
    {
        return $this->aanvang;
    }

    public function setAanvang(string $aanvang): self
    {
        $this->aanvang = $aanvang;

        return $this;
    }

    public function getZaal(): ?string
    {
        return $this->zaal;
    }

    public function setZaal(string $zaal): self
    {
        $this->zaal = $zaal;

        return $this;
    }

    public function getMaxSeats(): ?int
    {
        return $this->maxSeats;
    }

    public function setMaxSeats(int $maxSeats): self
    {
        $this->maxSeats = $maxSeats;

        return $this;
    }
}
