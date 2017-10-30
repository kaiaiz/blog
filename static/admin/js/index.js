window.addEventListener('DOMContentLoaded',
  function () {

    function active() {
      if ($('nav.system').width() == 70) {
        $('div.nav-mark').css('width', '200px');
        $('nav.system').css('width', '200px');
        $('nav.system >ul > li > a >span:not(.see)').css('display', 'inline-block');
      } else {
        $('div.nav-mark').css('width', '70px');
        $('nav.system').css('width', '70px');
        $('nav.system >ul > li > a >span:not(.see)').css('display', 'none');
          $('nav.system li.menu a').nextAll('ul.second-level').css('display','none');
      }
    }
    $('button.btn-primary').click(
      function () {
        active();
      }
    );
    // $('nav.system').click(
    //   function (event) {
    //     let active = event.target;
    //     if ((active.nodeName.toLocaleLowerCase() == 'a' && active.className.includes('item')) || (active.parentNode.nodeName.toLocaleLowerCase() == 'a' && active.parentNode.className.includes('item'))) {
    //       $('nav.system li.menu > li').css('display', 'block');
    //       if ($ulNode.css('display') == 'none') {
    //         $ulNode.css('display', 'block');
    //         $(active).children('span:last').removeClass('icon-icon');
    //         $(active).children('span:last').addClass('icon-jiantou9');
    //       }else{
    //         $ulNode.css('display', 'none');
    //         $(active).children('span:last').addClass('icon-icon');
    //         $(active).children('span:last').removeClass('icon-jiantou9');
    //       }
    //     }
    //   }
    // );
    $('nav.system li.menu a').click(
      function () {
        if ($('nav.system').width() == 70) {
          $('nav.system').css('width', '200px');
          $('nav.system >ul > li > a >span:not(.see)').css('display', 'inline-block');
        } else {
          $ulNode = $(this).nextAll('ul.second-level');
          if ($ulNode.css('display') == 'none') {
            $ulNode.css('display', 'block');
            $(this).children('span:last').removeClass('icon-icon');
            $(this).children('span:last').addClass('icon-jiantou9');
          } else {
            $ulNode.css('display', 'none');
            $(this).children('span:last').addClass('icon-icon');
            $(this).children('span:last').removeClass('icon-jiantou9');
          }
        }

      }
    );
  }
);