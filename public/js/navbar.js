window.onload = init;
    function init(){
        document.querySelectorAll(".more")[0].addEventListener("click",submenu);
        document.querySelector(".desplegable > ul").style.display = "none";
    }

    function submenu(){
        var estado = document.querySelector(".desplegable > ul").style.display;
        if (estado == "none"){
            document.querySelector(".desplegable > ul").style.display = "inline-block";
        }else{
            document.querySelector(".desplegable > ul").style.display = "none";
        };

    }
