<?php
require_once 'DAOVoituresMysql.php';
class DAOFactory
{
    public static function getVoituresDAO (){
        return new DAOVoituresMysql();
}
}