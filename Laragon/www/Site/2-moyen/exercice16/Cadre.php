<?php


class Cadre extends Employe
{
    private array $listeEmploye;

    public function __construct($prenom, $nom, $numSecu, $salaire, $job, $listeEmploye)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numSecu = $numSecu;
        $this->salaire = $salaire;
        $this->job = $job;
        $this->listeEmploye = $listeEmploye;
    }

    // GETTER

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getNumSecu()
    {
        return $this->numSecu;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function getJob()
    {
        return $this->job;
    }
    public function getListeEmploye()
    {
        return $this->listeEmploye;
    }

    // SETTER

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setNumSecu($numSecu)
    {
        $this->numSecu = $numSecu;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }
    public function setJob($job)
    {
        $this->job = $job;
    }
    public function setListeEmploye($listeEmploye)
    {
        $this->listeEmploye = $listeEmploye;
    }

    public function __toString()
    {
        $afficher = "Prenom : " . $this->prenom . "<br>" . "Nom : " . $this->nom . "<br>" . "Numéro de sécurité : " . $this->numSecu . "<br>" . "Salaire : " . $this->salaire . "€" . "<br>" . "Job : " . $this->job . "<br>";
        return $afficher;
    }

    public function afficher()
    {
        echo $this->__toString();
    }

    public function manage()
    {
        $phrase = "Le manager manage : ";
        foreach ($this->getListeEmploye() as $employe){
            $phrase = $phrase . $employe->getNom() . ", ";
        }
        return $phrase;
    }

    public function augmenteUnSalarie(Employe $employe, $pourcentage)
    {
        $augmentation = $employe->getSalaire() * (1 + ($pourcentage / 100));
        echo $employe;
        echo "Salaire après augmentation : ";
        return $augmentation . "€";
    }
}
