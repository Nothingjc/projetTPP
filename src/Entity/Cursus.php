<?php

namespace App\Entity;

use App\Repository\CursusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CursusRepository::class)
 */
class Cursus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_cursus;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $annee_scolaire;

    /**
     * @ORM\Column(type="smallint")
     */
    private $annee_apres_le_bac;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCursus(): ?string
    {
        return $this->nom_cursus;
    }

    public function setNomCursus(string $nom_cursus): self
    {
        $this->nom_cursus = $nom_cursus;

        return $this;
    }

    public function getAnneeScolaire(): ?string
    {
        return $this->annee_scolaire;
    }

    public function setAnneeScolaire(string $annee_scolaire): self
    {
        $this->annee_scolaire = $annee_scolaire;

        return $this;
    }

    public function getAnneeApresLeBac(): ?int
    {
        return $this->annee_apres_le_bac;
    }

    public function setAnneeApresLeBac(int $annee_apres_le_bac): self
    {
        $this->annee_apres_le_bac = $annee_apres_le_bac;

        return $this;
    }
}
