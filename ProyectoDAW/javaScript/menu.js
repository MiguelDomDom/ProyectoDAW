$(document).ready(e);
  
function e(){

    /* hacer click en logo se añade clase active al menu*/
    $(".logo_contenido").click(function(){
        
        $(".menu").toggleClass("active");
        $(".contenido_perfil").removeClass("active");
        
        
    })

    $("#log_out").click(function(){
        
        $(".menu").addClass("active");
        
    })

    /* click en lupa*/
    $(".lupa").click(function(){
        
        $(".menu").addClass("active");
        
    })

    /* click en sesion*/
    $("#log_out").click(function(){
        
        $(".contenido_perfil").toggleClass("active");
        
    })

    /*cargas de todas las paginas a la principal*/

    $(".subcontenedor2").load("/html/Portada.html");

    $("#home").click(function(){
        $(".subcontenedor2").load("/html/Portada.html")
    })

    $("#biblioteca").click(function(){
        $(".subcontenedor2").load("/html/Libreria.html")
    })

    $("#deseos").click(function(){
        $(".subcontenedor2").load("/html/ListaDeseos.html")
    })

    $("#amigos").click(function(){
        $(".subcontenedor2").load("/html/Amigos.html")
    })
    
    $(".btn_sesion1").click(function(){
        $(".subcontenedor2").load("/php/login_registro.php")
    })
}










