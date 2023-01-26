<?php

interface DAOVoitures
{
    function selectModeles();
    function insertModeles($id,$marque,$modele,$carburant);
    function selectInfoProprietaireByIdByName($id,$nom);
    function updateInfoProprietaire($id,$nom,$prenom,$adresse,$ville,$codePostal);
}