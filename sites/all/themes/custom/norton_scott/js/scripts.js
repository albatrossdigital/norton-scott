(function ($, Drupal) {

  Drupal.behaviors.flight_subtheme = {
    attach: function(context, settings) {



// Modal next/back buttons
$('.view-case-studies', context).once(function() {
  $(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
    
    var $prev = $('<a class="modal-icon" id="modal-prev">&lt;</a>');
    $prev.bind('click', function(e) {
      modalClick(e, -1);
    });
    var $next = $('<a class="modal-icon" id="modal-prev">&gt;</a>');
    $next.bind('click', function(e) {
      modalClick(e, 1);6
    });

    var modalClick = function(e, step) {
      var $trigger = $('a.th[data-reveal-id="' + $('.reveal-modal.open').attr('id') + '"]').parents('li');
      var $container = $('.view-case-studies ul li');
      var index = $container.index($trigger);
      index += step;
      var max = $container.length;
      index = (index < 0) ? max-1 : index;
      index = (index >= max) ? 0 : index;
      $('.view-case-studies ul li:eq('+index+') a').trigger('click');
      e.preventDefault();
    }

    $('.reveal-modal-bg').html('').append($prev).append($next);
  });
});


// Story read more
$('.l-news .body:not(.processed)').each(function() {
  var $body = $(this);
  $body.find('p:not(:first)').hide();
  var $more = $('<a href="" class="news-read-more">Read More</a>').bind('click', function(e) {
    if ($(this).text() == 'Read More') {
      $(this).parent().find('p').show();
      $(this).text('Collapse').hide();
    }
    else {
      $(this).parent().find('p:not(:first)').hide();
      $(this).text('Read More');
    }
    e.preventDefault();
  });
  $body.append($more).addClass('processed');
});


// Update action prop
$('.webform-client-form').attr('action', '/#contact');


// Read more button
$(".l-featured .button").bind('click', function(e) {
    $('html, body').animate({
        scrollTop: $(".l-about").offset().top - 70
    }, 1000);
    e.preventDefault();
});


// Add additional padding to footer
var windowHeight = $(window).height();
var sectionHeight = $('.navy-section').height();
if (windowHeight - sectionHeight > 100) {
  $('.navy-section').css('padding-bottom', windowHeight - sectionHeight - 20 + 'px');
}



    }
  };

})(jQuery, Drupal);
