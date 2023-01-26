<?php
require_once 'ConnectionMsql.php';
require_once 'DAOVoitures.php';
class DAOVoituresMysql implements DAOVoitures
{
    function selectModeles()
    {


        $pdo = ConnectionMsql::getConnexion();
        $query = "select id_modele, marque, modele, carburant from modeles order by marque;";
        $pstmt = $pdo->prepare($query);
        $pstmt->execute();
        $resultats = $pstmt->fetchAll();
        return $resultats;
    }

    function insertModeles($id, $marque, $modele, $carburant)
    {;
        $pdo = ConnectionMsql::getConnexion();
        $query = "insert into modeles values (:id_modele, :marque, :modele, :carburant);";
        $pstmt = $pdo->prepare($query);
        $pstmt->bindValue(':id_modele', $id);
        $pstmt->bindValue(':marque', $marque);
        $pstmt->bindValue(':modele', $modele);
        $pstmt->bindValue(':carburant', $carburant);
        $pstmt->execute();
    }

    function selectInfoProprietaireByIdByName($id, $nom)
    {
        $pdo = ConnectionMsql::getConnexion();
        $query = "select id_pers, nom, prenom, adresse, ville, codepostal from PROPRIETAIRES where id_pers=:id AND nom=:nom;";
        $pstmt = $pdo->prepare($query);
        $pstmt->bindValue(':id', $id);
        $pstmt->bindValue(':nom', $nom);
        $pstmt->execute();
        $resultats = $pstmt->fetchAll();
        return $resultats;
    }

    function updateInfoProprietaire($id, $nom, $prenom, $adresse, $ville, $codePostal)
    {
        $pdo = ConnectionMsql::getConnexion();
        $query ="UPDATE proprietaires SET nom=:nom,prenom=:prenom,adresse=:adresse,ville=:ville,codepostal=:codepostal WHERE id_pers = :id;";
        $pstmt = $pdo->prepare($query);
        $pstmt->bindValue(':id', $id);
        $pstmt->bindValue(':nom', $nom);
        $pstmt->bindValue(':prenom', $prenom);
        $pstmt->bindValue(':adresse', $adresse);
        $pstmt->bindValue(':ville', $ville);
        $pstmt->bindValue(':codepostal', $codePostal,PDO::PARAM_INT);
        $pstmt->execute();
    }
}