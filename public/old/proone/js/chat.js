var lastScrollPos = 0;
var throttleTimer;
window.addEventListener('scroll', function() {
  clearTimeout(throttleTimer);
  throttleTimer = setTimeout(function() {
    var currentScrollPos = window.pageYOffset;
    var posts = document.querySelectorAll('.Posts');
    for (var i = 0; i < posts.length; i++) {
      var post = posts[i];
      var rect = post.getBoundingClientRect();
      if (rect.bottom < 0 || rect.top > window.innerHeight) {
        post.classList.add('hidden');
      } else {
        post.classList.remove('hidden');
      }
    }
    var visiblePosts = document.querySelectorAll('.Posts:not(.hidden)');
    if (visiblePosts.length > 0) {
      var firstVisiblePost = visiblePosts[0];
      var lastVisiblePost = visiblePosts[visiblePosts.length - 1];
      var prevSiblings = [];
      var nextSiblings = [];
      var current = firstVisiblePost;
      while (current) {
        prevSiblings.push(current.previousElementSibling);
        current = current.previousElementSibling;
      }
      current = lastVisiblePost;
      while (current) {
        nextSiblings.push(current.nextElementSibling);
        current = current.nextElementSibling;
      }
      for (var i = 0; i < prevSiblings.length; i++) {
        var sibling = prevSiblings[i];
        sibling.classList.add('hidden');
      }
      for (var i = 0; i < nextSiblings.length; i++) {
        var sibling = nextSiblings[i];
        sibling.classList.add('hidden');
      }
    }
    lastScrollPos = currentScrollPos;
  }, 100);
});