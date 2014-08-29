$(document).ready(function () {
  init();
});

function init () {

  function DynamicPostsLoad(container) {

    this.container = container;
    default_offset = 0;

    var cat = $(container).attr('data-category');
    var ajax_url = $(container).attr('data-ajaxurl');
    var count = $(container).attr('data-count');

    // Load posts
    function loadPosts () {

      this.container = container;
      default_offset = parseInt(default_offset) + count;

      $.ajax({
        url: ajax_url,
        type:'POST',
        data:{
          action: 'load_posts',
          category: cat,
          count: count,
          post_offset: default_offset,
        },
        success: function(data) {
          if (data) {
            $(container).append(data);
            $("a.load-more-posts.loading").html("Load more posts");
            $("a.load-more-posts.loading").removeClass("loading");
          }
          else {
            $("a.load-more-posts").html("All posts loaded");
            $("a.load-more-posts").addClass("all-posts-loaded");
            $("a.load-more-posts.loading").removeClass("loading");
          }
        },
        beforeSend: function() {
          $("a.load-more-posts").html("Loading");
          $("a.load-more-posts").addClass("loading");
        }
      });

    }

    $("a.load-more-posts").on("click touchstart", function() {
      loadPosts();
      return false;
    });

  }

  // Init functions
  DynamicPostsLoad(".posts-container");

}