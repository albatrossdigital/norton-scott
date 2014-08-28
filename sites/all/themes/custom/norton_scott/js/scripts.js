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
      modalClick(e, 1);
    });

    var modalClick = function(e, step) {
      var $trigger = $('a.th[data-reveal-id="' + $('.reveal-modal.open').attr('id') + '"]').parents('li');
      var $container = $('.view-case-studies ul li');
      var index = $container.index($trigger);
      index += step;
      var max = $container.length;
      index = (index < 0) ? max-1 : index;
      index = (index >= max) ? 0 : index;
      console.log(index);
      $('.view-case-studies ul li:eq('+index+') a').trigger('click');
      e.preventDefault();
    }

    $('.reveal-modal-bg').html('').append($prev).append($next);
  });
});


// Story read more
console.log('asdf');
$('.l-news .body:not(.processed)', context).each(function() {
  var $body = $(this);
  console.log('s')
  $body.find('p:not(:first)').hide();
  var $more = $('<a href="">Read More</a>').bind('click', function(e) {
    $(this).parent().find('p').show();
    e.preventDefault();
  });
  $body.append($more).addClass('processed');
});

    }
  };

})(jQuery, Drupal);
