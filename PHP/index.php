<?php

$data= file_get_contents('../php/data-1.json');
$json= json_decode($data);
//$r= json_encode($data);


if(isset($_POST['ds'])=='s'){
   f($data);
 
}else{
    Ciudad($json);
}





function Ciudad($data){
$i=0;
$estructura=""; 
foreach($data as $prop){
    
$Ciudad[$i] = $prop->Ciudad;
$i++;
}
$ComboCiudad = array_values(array_unique($Ciudad));
$a = count($ComboCiudad);
for($b=0; $b<$a;$b++){
    
$estructura .= "<option value='$ComboCiudad[$b]'>";
$estructura .= $ComboCiudad[$b];
$estructura .= "</option>";

}
echo $estructura;

}

function f($d){
 echo $d;   
    
}









/*

foreach ($json as $dato=>$d) {
   $Id=$d->Id;
    //$Ciudad=$d->Ciudad;
 
    echo "<div style='border:2px solid'>$Id</div>";
    //echo $Id." ".$Ciudad;
    
    
}

*/


?>
