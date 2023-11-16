<?php
    function connectaDB(){
        $servidor = "localhost";
        $port = "5432";
        $DBnom = "tdiw-j4";
        $usuari = "tdiw-j4";
        $clau = "itvxAsWd";
        $connexio = pg_connect("host=$servidor port=$port dbname=$DBnom
        user=$usuari password=$clau") or die("Error connexio DB");
        return($connexio);
    }
?>
