<?php 
include "topo.php";

?>
<?php
    if (isset($_GET['p'])){
        $p = $_GET['p'];
        switch($p){
            case 1: 
              include "vestidos.php";
            break;
            case 2: 
              include "ternos.php";
            break;
            case 3: 
              include "superior.php";
            break;
            case 4: 
              include "inferior.php";
            break;
            case 5: 
              include "alugar.php";
            break;
            case 6: 
              include "sobrenos.php";
            break;
            case 7: 
              include "login.php";
            break;
            case 8: 
              include "cadastrar.php";
            break;
            case 9: 
              include "personalizado.php";
            break;
            case 10:
              include "enviado.php";
            break;
            case 11:
              include "falecon.php";
            break;
            case 12:
              include "comprar.php";
            break;
            default: include "meio.php";
            break;
        }

    }
    else{
        include "meio.php"; //pagina default
    }
?>
<?php
    include "rodape.php";
?>