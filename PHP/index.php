<?php

$data= file_get_contents('../php/data-1.json');
$json= json_decode($data);
//$r= json_encode($data);
echo $data;

/*

foreach ($json as $dato=>$d) {
   $Id=$d->Id;
    //$Ciudad=$d->Ciudad;
 
    echo "<div style='border:2px solid'>$Id</div>";
    //echo $Id." ".$Ciudad;
    
    
}

*/


?>
