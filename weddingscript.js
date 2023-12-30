document.addEventListener('DOMContentLoaded', function() {
  var lastScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  var ticking = false;
  var animationFrame;

  window.addEventListener('scroll', function() {
    lastScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
    if (!ticking) {
      ticking = true;
      animationFrame = requestAnimationFrame(updateImages);
    }
  });

  function updateImages() {
    var currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
    var scrollDirection = currentScrollPosition > lastScrollPosition ? 'down' : 'up';

    var imageContainers = document.querySelectorAll('.jlr_item');
    for (var i = 0; i < imageContainers.length; i++) {
      var imageContainer = imageContainers[i];
      var image = imageContainer.querySelector('img');
      var positionFromTop = imageContainer.getBoundingClientRect().top;
      var windowHeight = window.innerHeight;

      if (scrollDirection === 'down') {
        if (positionFromTop - windowHeight <= 0) {
          var scrollPercent = (positionFromTop / windowHeight) * 100;
          image.style.opacity = scrollPercent / 100;
          image.style.transition = 'opacity 0.5s ease-in-out';
        }
      } else {
        if (positionFromTop < windowHeight) {
          var scrollPercent = (positionFromTop / windowHeight) * 100;
          image.style.opacity = 1 - scrollPercent / 100;
          image.style.transition = 'opacity 0.5s ease-in-out';
        }
      }
    }

    if (Math.abs(currentScrollPosition - lastScrollPosition) < 1) {
      ticking = false;
    } else {
      animationFrame = requestAnimationFrame(updateImages);
    }
  }

  function zoomInImage() {
    this.style.transform = 'scale(1.1)';
    this.style.transition = 'transform 0.3s ease';
  }

  function zoomOutImage() {
    this.style.transform = 'scale(1)';
    this.style.transition = 'transform 0.3s ease';
  }

  var images = document.querySelectorAll('.jlr_item img');
  for (var i = 0; i < images.length; i++) {
    images[i].addEventListener('mouseover', zoomInImage);
    images[i].addEventListener('mouseout', zoomOutImage);
  }

  updateImages(); // Initially update images on page load
});