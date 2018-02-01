<?php

$data= file_get_contents('../php/data-1.json');
$json= json_decode($data,true);
//$r= json_encode($data);

echo $data;
/*

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
*/
/*
$filtroPrecioIni=0;
$filtroPrecioFin =1;
$filtroAply =true;

foreach($json as $key => $json) {
    $precio = str_ireplace(["$",","], "", $json->Precio);
    $precio = intval($precio);
    $matchPrecio = ($precio >= intval($filtroPrecioIni) && $precio <= intval($filtroPrecioFin));
    if($filtroAply){
      $matchCiudad =  ($matchCiudad=="" || (!empty($filtroCiudad) && $json->Ciudad == $filtroCiudad));
      $matchTipo = ($matchTipo=="" || (!empty($filtroTipo) && ($json->Tipo == $filtroTipo)));
    }
    //Sí Aplica filtro y no es coincidente continua el ciclo sin imprimir un elemento;
    if($filtroAply && !($matchCiudad && $matchTipo && $matchPrecio)){
      continue;
    }

}

 foreach($json as $keyProp => $prop){
                $class = ($keyProp=="Precio") ? 'class="precioTexto"' : null;
                if($keyProp=="Id"){ continue; }
                echo "<p><strong>$keyProp:</strong> <span $class>$prop</span><p>";
 }


*/



/*
foreach ($json as $dato=>$d) {
   
    
    $Id=$d->Ciudad;
    
    echo $Id;
    if ($Id=="New York")
    {
        echo $dato;
    }
    //$Ciudad=$d->Ciudad;
 
    
    
}


*/

?>
