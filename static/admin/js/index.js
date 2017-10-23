window.addEventListener('DOMContentLoaded',
  function () {
    $('button.btn-primary').click(
      function () {
        if ($('nav.system').width() == 70) {
          $('nav.system').css('width', '200px');
        } else {
          $('nav.system').css('width', '70px');
        }
      }
    );
  }
);