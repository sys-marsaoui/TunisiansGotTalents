<?php

namespace TGTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entretien
 *
 * @ORM\Table(name="entretien")
 * @ORM\Entity(repositoryClass="TGTBundle\Repository\EntretienRepository")
 */
class Entretien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnt", type="datetime")
     */
    private $dateEnt;

    /**
     * @var string
     *
     * @ORM\Column(name="statutEnt", type="string", length=255)
     */
    private $statutEnt;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumn(name="id_candidat",referencedColumnName="id")
     */
    private $id_candidat;

    /**
     * @var string
     *
     * @ORM\Column(name="noteEnt", type="string", length=255)
     */
    private $noteEnt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnt()
    {
        return $this->dateEnt;
    }

    /**
     * @param \DateTime $dateEnt
     */
    public function setDateEnt($dateEnt)
    {
        $this->dateEnt = $dateEnt;
    }

    /**
     * @return string
     */
    public function getStatutEnt()
    {
        return $this->statutEnt;
    }

    /**
     * @param string $statutEnt
     */
    public function setStatutEnt($statutEnt)
    {
        $this->statutEnt = $statutEnt;
    }

    /**
     * @return string
     */
    public function getNoteEnt()
    {
        return $this->noteEnt;
    }

    /**
     * @param string $noteEnt
     */
    public function setNoteEnt($noteEnt)
    {
        $this->noteEnt = '0';
    }

    /**
     * @return mixed
     */
    public function getIdCandidat()
    {
        return $this->id_candidat;
    }

    /**
     * @param mixed $id_candidat
     */
    public function setIdCandidat($id_candidat)
    {
        $this->id_candidat = $id_candidat;
    }






    public function __toString()
    {
        return(string) $this->getId();// TODO: Implement __toString() method.
    }
}

