jQuery(document).ready(function($) {
  var scrollup = $('.scroll-top');

  // Hide the scroll-to-top button initially
  scrollup.hide();

  /*------------------------------------------------
            Scroll Top
  ------------------------------------------------*/
  scrollup.click(function () {
    $('html, body').animate({
      scrollTop: '0px'
    }, 800);
    return false;
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      scrollup.fadeIn();
    } else {
      scrollup.fadeOut();
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const container = document.getElementById("screenshotContainer");
  const image = document.getElementById("scrollImage");
  let scrollInterval;
  let currentTop = 0;
  const speed = 1; // pixels per step
  const delay = 10; // milliseconds per step

  container.addEventListener("mouseenter", function () {
      const containerHeight = container.offsetHeight;
      const imageHeight = image.offsetHeight;
      const maxScroll = imageHeight - containerHeight;

      scrollInterval = setInterval(() => {
          if (currentTop > -maxScroll) {
              currentTop -= speed;
              image.style.top = currentTop + "px";
          } else {
              clearInterval(scrollInterval);
          }
      }, delay);
  });

  container.addEventListener("mouseleave", function () {
      clearInterval(scrollInterval);
      currentTop = 0;
      image.style.top = "0px";
  });
});
