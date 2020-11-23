<?php

namespace App\Entity;

use App\Entity\FraisForfait;
use Doctrine\ORM\Mapping as ORM;

/**
 * LigneFraisForfait
 *
 * @ORM\Table(name="ligne_frais_forfait", indexes={@ORM\Index(name="IDX_BD293ECFDF522508", columns={"fiche_id"}), @ORM\Index(name="IDX_BD293ECF7B70375E", columns={"frais_forfait_id"})})
 * @ORM\Entity
 */
class LigneFraisForfait
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
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \FraisForfait
     *
     * @ORM\ManyToOne(targetEntity="FraisForfait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="frais_forfait_id", referencedColumnName="id")
     * })
     */
    private $fraisForfait;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getFraisForfait(): ?FraisForfait
    {
        return $this->fraisForfait;
    }

    public function setFraisForfait(?FraisForfait $fraisForfait): self
    {
        $this->fraisForfait = $fraisForfait;

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
