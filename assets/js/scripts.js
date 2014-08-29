$(document).ready(function () {
  init();
});

function init () {

  function DynamicPostsLoad(container, loadcount) {

    this.container = container;
    this.loadcount = loadcount;

    var cat = $(container).attr('data-category');
    var ajax_url = $(container).attr('data-ajaxurl');
    var total = $(container).attr('data-total');

    // Load posts
    function loadPosts (me) {
      this.me = me;
      var buttonText = me.html();
      var count = $(container + " .post-item").length;
      var post_offset = count;

      var odd = total - count;

      if ( odd == 1 ) {
        var count_ = 1;
      }
      else {
        var count_ = loadcount;
      }

      $.ajax({
        url: ajax_url,
        type:'POST',
        data:{
          action: 'load_posts',
          category: cat,
          count: count_,
          post_offset: post_offset
        },
        success: function(data) {
          if (data) {
            $(container).append(data);
            me.html(buttonText);
          }
          else {
            me.html("All posts loaded");
          }
        },
        beforeSend: function() {
          me.html("Loading");
        }
      });

    }

    $("a.load-more-posts").on("click touchstart", function() {
      loadPosts( $(this) );
      return false;
    });

  }

  // Init functions
  DynamicPostsLoad(".posts-container", 2);

}