(function ($, Drupal) {
  // Original JavaScript code.
  $(document).ready(function () {

    /*WEBFORM*/
    $(".webform-client-form input:text, .webform-client-form textarea, #edit-submitted-correo, #edit-submitted-su-correo-electronico").each(function (i) {
      $(this).data("default", this.value).bind("focus", function (e) {
        if ($.trim(this.value) == $(this).data("default")) this.value = "";
      }).bind("blur", function (e) {
        if ($.trim(this.value).length == 0) this.value = $(this).data("default");
      });
    });

    /* MENU */

    $('button').click(function () {
      $('#block-system-main-menu').slideToggle('fast');
    });


    $('.is-expanded ul').hide();

    var slidesArray = document.querySelectorAll('.hero-img');
    console.log(slidesArray);
    for (var i = 0; i < slidesArray.length; i++) {
      var url = slidesArray[i].dataset['url'];
      slidesArray[i].style.backgroundImage = 'url(' + url + ')';
    }

    // $('.is-expanded').hoverIntent(function () {
    //   var menuChild = $(this).children('ul')
    //   $(menuChild).slideToggle(100);
    // });

    /*RESPONSIVENESS*/

    $(window).resize(function () {
      if ($(window).width() > 768) {
        $('#block-system-main-menu').show();
      }

    });

  });
})(jQuery, Drupal);
