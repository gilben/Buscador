/*
  Creación de una función personalizada para jQuery que detecta cuando se detiene el scroll en la página
*/
$.fn.scrollEnd = function (callback, timeout) {
    $(this).scroll(function () {
        var $this = $(this);
        if ($this.data('scrollTimeout')) {
            clearTimeout($this.data('scrollTimeout'));
        }
        $this.data('scrollTimeout', setTimeout(callback, timeout));
    });
};
/*
  Función que inicializa el elemento Slider
*/

function inicializarSlider() {
    $("#rangoPrecio").ionRangeSlider({
        type: "double",
        grid: false,
        min: 0,
        max: 100000,
        from: 200,
        to: 80000,
        prefix: "$"
    });
}



/*
  Función que reproduce el video de fondo al hacer scroll, y deteiene la reproducción al detener el scroll
*/
/*function playVideoOnScroll(){
  var ultimoScroll = 0,
      intervalRewind;
  var video = document.getElementById('vidFondo');
  $(window)
    .scroll((event)=>{
      var scrollActual = $(window).scrollTop();
      if (scrollActual > ultimoScroll){
       video.play();
     } else {
        //this.rewind(1.0, video, intervalRewind);
        video.play();
     }
     ultimoScroll = scrollActual;
    })
    .scrollEnd(()=>{
      video.pause();
    }, 10)
}*/

$(function () {
    
    
    
    
    $('#mostrarTodos').click(function () {
        MostrarDatos();

    })
    $('select').material_select();
    
  // LLenarComboCiudad();



})

function MostrarDatos() {

    $.post("../Buscador/PHP/ProcesaJSon.php", {ds:"s"}, function (result) {
        
     

        $.each(JSON.parse(result), function (key, value) {

            $('#Contenido').append('<div class="row"><div class="col m12"><div class="card horizontal itemMostrado"><img src="img/home.jpg" style="height:30%"><div class="card-stacked"><div class="card-content"><span>Direccion:' + value.Direccion + '</span><br><span>Cuidad:' + value.Ciudad + '</span><br><span>Telefono:' + value.Telefono + '</span><br><span>Codigo Postal:' + value.Codigo_Postal + '</span><br><span>Tipo:' + value.Tipo + '</span><br><span>Precio:' + value.Precio + '</span><br></div><div class="card-action"><a href="#" class="precioTexto">VER MÁS</a></div></div></div></div></div>')

            
        })
    });

}


function LLenarComboCiudad() {
    $.ajax({
        url: "../Buscador/PHP/ProcesaJSon.php",
        type: 'POST',
        async: true,
        data: 'Ciudad=true',
        success: function (result) {
            $('select').material_select();
            //$('#selectCiudad').add(result);
            Materialize.updateTextFields();
            alert(result);
        },
        error: function (result) {
            alert('error' + result);
        }
    });


    //    $.post("../Buscador/PHP/ProcesaJSon.php", {Cuidad:'true'}, function (result) {
    //
    //        
    //        
    //        alert(result)
    //        $('select').material_select();
    //        $('#selectCiudad').add(result);
    //        Materialize.updateTextFields();

    // $.each(JSON.parse(result), function (key, value) {
    /*    $('select').material_select();
        $('#selectCiudad').append('<option value="'+valor+'">'+ciudad+ '</option>');
        Materialize.updateTextFields();*/

    //})
    //});






}

//}

inicializarSlider();
//playVideoOnScroll();
