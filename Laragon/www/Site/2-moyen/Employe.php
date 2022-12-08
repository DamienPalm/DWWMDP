<?php


class Employe
{
    protected string $nom;
    protected string $prenom;
    protected string $numSecu;
    protected float $salaire;
    protected string $job;

    public function __construct($prenom, $nom, $numSecu, $salaire, $job)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numSecu = $numSecu;
        $this->salaire = $salaire;
        $this->job = $job;
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

    public function __toString()
    {
        $afficher = "Prenom : " . $this->prenom . "<br>" . "Nom : " . $this->nom . "<br>" . "Numéro de sécurité : " . $this->numSecu . "<br>" . "Salaire : " . $this->salaire . "€" . "<br>" . "Job : " . $this->job . "<br>";
        return $afficher;
    }

    public function afficher()
    {
        echo $this->__toString();
    }

    public function effectueSonJob()
    {
        if ($this->job == "soudeur") {
            echo " <b>Le soudeur </b> réalise des travaux d'assemblage, d'installation, de modification " . "<br>" . " et de maintenance de réseaux de tuyauteries ou d'élèments chaudronnés." . "<br>" . "En fonction des soudures, il travaille au chalumeau, au laser.." . "<br>";
        }
        if ($this->job == "assistant mécanicien") {
            echo "<b>L'aide mécanicien</b> constitue le premier niveau dans l'emploi de mécanicien garagiste." . "<br>" . "courants selon les prescriptions du constructeur. Il effectue les réparations des circuits" . "<br>" . " électriques simples concernant l'éclairage et la signalisation. en matière de sécurité," . "<br>" . " d'hygiène et d'environnement." . "<br>";
        }
        if ($this->job == "magasinière") {
            echo "<b>La magasinière</b> réceptionne, stocke et prépare les produits destinés à être livrés à un client" . "<br>" . " donné et stockés dans un magasin de l'entreprise (entrepôt, quai, local, chambre réfrigérée, etc.)." . "<br>" . "La magasinière prend également part au suivi et à l'inventaire des stocks." . "<br>";
        }
    }
}
