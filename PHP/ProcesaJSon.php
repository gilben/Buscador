<?php

$data= file_get_contents('../php/data-1.json');
//$json= json_decode($data);
echo json_encode($data);

/*
foreach ($json as $dato=>$d) {
   $Id=$d->Id;
    $Ciudad=$d->Ciudad;
    echo'<br>';
    echo $Id." ".$Ciudad;
    
}
*/


?>
