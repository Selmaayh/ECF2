<?php

require_once __DIR__ . '/../dao/connexion.php';

class Client
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnexion();
    }

    public function getAllClient()
    {
        $sql = "SELECT * FROM CLIENT";
        $stmt = $this->pdo->query($sql);
        
        return $stmt->fetchAll();
    }
    
    public function deleteClient($id)
    {
        $sqlDelete = "DELETE FROM client WHERE 	Id_client=:id";
        $stmt = $this->pdo->prepare($sqlDelete);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function getClient($id) 
    {
        $stmt = $this->pdo->prepare("SELECT * FROM client WHERE Id_client=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function createClient(string $nom, string $prenom, string $email,string $tel, string $adresse)
    {
        $stmt = $this->pdo->prepare("INSERT INTO client (Nom_client,Prenom,Email, N__de_telephone, adresse) VALUES (:nom, :prenom, :email,:telephone,:adresse);");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $tel);
        $stmt->bindParam(':adresse', $adresse);

        return $stmt->execute();
    }
    public function updateClient(INT $id, string $prenom, string $nom, string $email,$telephone,$adresse) 
    {
        $stmt = $this->pdo->prepare("UPDATE client SET Nom_client = :nom,Prenom = :prenom, Email = :email,N__de_telephone = :telephone, adresse= :adresse 
        WHERE Id_client=:id;");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}
?>
