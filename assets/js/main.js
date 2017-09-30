(function($) {
  function mobileMenu() {
    // hide cross icon, hide menu and on click transition them in
    $('.cross').hide();
    $('.blue-box').hide();
    $('.primary-nav').hide();
    $('.mobile-menu').show();
    $('.hamburger').show();
    $('.hamburger').on('click', function(){
      $('.primary-nav').slideToggle('fast', function() {
        $('.hamburger').hide();
        $('.cross').show();
        $(this).css({
          'height' : '7px'
        });
        $('.mobile-menu').css({
          'height': '60px'
        });
      });
    });

    $('.cross').on('click', function() {
      $('.primary-nav').slideToggle('fast', function() {
        $('.cross').hide();
        $('.hamburger').show();
      });
    });
  }

  // GET all posts via ajax
  function getPosts(endpoint) {
    $.ajax({
          type: "GET",
          url: endpoint,
          success: function(response) {
            console.log(response)
          },
          error: function (xhr, ajaxOptions, thrownError) {
            if(xhr.status==403) {
              console.log('403 forbidden')
            }
          },
          timeout: 5000
        })
  }

  // run javascript after other files have loaded
  $(document).ready(function(){
    if (window.outerWidth < 991) {
      // mobileMenu()
    }
    getPosts('./wp-json/wp/v2/posts')
  });

})( jQuery );
