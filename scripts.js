

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

  var imageContainers = document.querySelectorAll('.image-container');
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
    cancelAnimationFrame(animationFrame);
    ticking = false;
  } else {
    animationFrame = requestAnimationFrame(updateImages);
  }
}


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

    var imageContainers = document.querySelectorAll('.image-container');
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

      // Add the condition to show other images
      if (scrollDirection === 'down' && image.getAttribute('data-show') === 'true') {
        // Show additional images
        imageContainer.classList.add('show');
      } else if (scrollDirection === 'up' && image.getAttribute('data-show') === 'true') {
        // Hide additional images
        imageContainer.classList.remove('show');
      }
    }

    if (Math.abs(currentScrollPosition - lastScrollPosition) < 1) {
      cancelAnimationFrame(animationFrame);
      ticking = false;
    } else {
      animationFrame = requestAnimationFrame(updateImages);
    }
  }
});

    function showWedding() {
        var weddingImage = document.getElementById("wedding-photos");
        if (weddingImage.style.display === "none") {
            weddingImage.style.display = "block";
        } else {
            weddingImage.style.display = "none";
        }
        /*var list="<ul><li>excel</li><li>word</li></ul>";
        document.getElementById("demo").innerHTML=list;
        document.getElementById("button3").value="Hide";*/
      }

  
