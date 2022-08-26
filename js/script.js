/*------Start Slider-------*/
    const nav = document.querySelector('nav')
    window.addEventListener('scroll', fixNav)

    function fixNav() {
    if(window.scrollY > nav.offsetHeight + 150) {
        nav.classList.add('active')
    } else {
        nav.classList.remove('active')
    }
    }
/*-------End Slider--------*/

/*------Start Btn Wsp----------*/
    $(document).ready(function(){

        $('#whatsapp').on('mouseover', fnCambiaBtn);
        $('#wsp').on('mouseout', fnCambiaBtn2);

        function fnCambiaBtn(){
            console.log('entre a la funcion')
        $('#whatsapp').removeClass('visible').addClass('oculto');
        $('#wsp').removeClass('oculto').addClass('visible');
        }

        function fnCambiaBtn2(){
            console.log('entreeeee')
        $('#wsp').removeClass('visible').addClass('oculto');
        $('#whatsapp').removeClass('oculto').addClass('visible');
        }
    })
/*----------End Btn Wsp---------*/

/*------Start Btn Llamar----------*/

    $('#btnLlamar').on('click', fnLlamar);

    function fnLlamar(){
        var llamar = window.confirm('Desea llamar por telefono?');
        if (llamar == true){
            window.alert('Llmando 03471-492315');
         
        } else{
            $('#btnLlamar').removeAttr('href');
            window.alert('No llamar');
        }
    }

/*----------End Btn Llamar---------*/
    
/*------Start sidenav----------*/
    
    $("#button-hide1").on("click",fncerrarsidenav1);
    $("#button-hide2").on("click",fncerrarsidenav2);
    $("#button-hide3").on("click",fncerrarsidenav3);
    $("#button-hide4").on("click",fncerrarsidenav4);
    $("#button-hide5").on("click",fncerrarsidenav5);
    $("#button-ingresar").on("click",fncerraringresar);
    
    function fncerrarsidenav1(){
        $(location).attr('href','#inicio')
        console.log("1");
    }
    function fncerrarsidenav2(){
        $(location).attr('href','#institucion')
        console.log("2");
    }
    function fncerrarsidenav3(){
        $(location).attr('href','#historia')
        console.log("3");
    }
    function fncerrarsidenav4(){
        $(location).attr('href','#disciplinas')
        console.log("4");
    }
    function fncerrarsidenav5(){
        $(location).attr('href','#contacto')
        console.log("5");
    }
    function fncerraringresar(){
        $(location).attr('href','pages/ingreso.html')
        console.log("5");
    }
    
/*----------End sidenav---------*/

/*---------Start Timeline------- */

    $(document).ready(function(){
    var $animation_elements = $('.anim');
    var $window = $(window);
    
    function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    
    $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
    
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
    (element_top_position <= window_bottom_position)) {
    $element.addClass('animated');
    } else {
    $element.removeClass('animated');
    }
    });
    }
    
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
    });
   /*--------- End Timeline ---------*/

   /*---------- Start Picture Galery --------*/
   $(document).ready(function(){
    $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
          
          $(this).addClass('transition');
      }, function(){
          
          $(this).removeClass('transition');
      });
  });

  /*-------- End Picture Galery ----------*/
