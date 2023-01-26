<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
require_once 'DAOFactory.php';
$resultats = DAOFactory::getVoituresDAO()->selectModeles();
foreach ($resultats as $element){
    echo'<li>'.$element[1].'</li>';
}
echo'</ul>';
//DAOFactory::getVoituresDAO()->insertModeles("FER_600_FR","Ferrari","Testa","diesel");
$resultats2 = DAOFactory::getVoituresDAO()->selectInfoProprietaireByIdByName(2,"Depierre");
foreach ($resultats2 as $element){
    echo'<li>'.$element[1].'</li>';
}
echo'</ul>';

DAOFactory::getVoituresDAO()->updateInfoProprietaire(2,"Jean","Louis","h","h","45666");

?>
</body>
</html>

