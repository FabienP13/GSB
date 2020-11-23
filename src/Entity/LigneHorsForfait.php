<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneHorsForfait
 *
 * @ORM\Table(name="ligne_hors_forfait", indexes={@ORM\Index(name="IDX_BF34AE8BDF522508", columns={"fiche_id"})})
 * @ORM\Entity
 */
class LigneHorsForfait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", length=0, nullable=false)
     */
    private $libelle;

    /**
     * @var \FicheFrais
     *
     * @ORM\ManyToOne(targetEntity="FicheFrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fiche_id", referencedColumnName="id")
     * })
     */
    private $fiche;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getFiche(): ?FicheFrais
    {
        return $this->fiche;
    }

    public function setFiche(?FicheFrais $fiche): self
    {
        $this->fiche = $fiche;

        return $this;
    }


}
