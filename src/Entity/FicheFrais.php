<?php

namespace App\Entity;

use App\Entity\Visiteur;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * FicheFrais
 *
 * @ORM\Table(name="fiche_frais", indexes={@ORM\Index(name="IDX_5FC0A6A77F72333D", columns={"visiteur_id"})})
 * @ORM\Entity
 */
class FicheFrais
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
     * @var int|null
     *
     * @ORM\Column(name="nb_justificatif", type="integer", nullable=true)
     */
    private $nbJustificatif;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_valide", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantValide;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modif", type="date", nullable=true)
     */
    private $dateModif;

    /**
     * @var \Visiteur
     *
     * @ORM\ManyToOne(targetEntity="Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visiteur_id", referencedColumnName="id")
     * })
     */
    private $visiteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Etat", inversedBy="ficheFrais")
     * @ORM\JoinTable(name="fiche_frais_etat",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fiche_frais_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="etat_id", referencedColumnName="id")
     *   }
     * )
     */
    private $etat;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etat = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbJustificatif(): ?int
    {
        return $this->nbJustificatif;
    }

    public function setNbJustificatif(?int $nbJustificatif): self
    {
        $this->nbJustificatif = $nbJustificatif;

        return $this;
    }

    public function getMontantValide(): ?float
    {
        return $this->montantValide;
    }

    public function setMontantValide(float $montantValide): self
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(?\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getVisiteur(): ?Visiteur
    {
        return $this->visiteur;
    }

    public function setVisiteur(?Visiteur $visiteur): self
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * @return Collection|Etat[]
     */
    public function getEtat(): Collection
    {
        return $this->etat;
    }

    public function addEtat(Etat $etat): self
    {
        if (!$this->etat->contains($etat)) {
            $this->etat[] = $etat;
        }

        return $this;
    }

    public function removeEtat(Etat $etat): self
    {
        if ($this->etat->contains($etat)) {
            $this->etat->removeElement($etat);
        }

        return $this;
    }

}
