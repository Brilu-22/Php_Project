<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>splash</title>
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <div class="loader">
      <h1 class="counter">0%</h1>
      <div class="site-teaser">
        <span>Use headphones</span>
      </div>

      <div class="circles">
        <div class="circle circle-outer"></div>
        <div class="circle circle-inner"></div>
        <div class="circle-inner-rotator"></div>
        <div class="block"></div>
      </div>
    </div>

    <div class="container">
      <h1>H<span>i</span></h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
      function startLoader() {
        let counterElement = document.querySelector(".counter");
        let currentValue = 0;

        function updateCounter() {
          if (currentValue === 100) {
            return;
          }
          currentValue += Math.floor(Math.random() * 10) + 1;

          if (currentValue > 100) {
            currentValue = 100;
          }

          counterElement.textContent = currentValue + "%";

          let delay = Math.floor(Math.random() * 200) + 250;
          setTimeout(updateCounter, delay);
        }
        updateCounter();
      }

      startLoader();

      gsap.from(".circles", 2, {
        top: "-100%",
        ease: "elastic.out",
        delay: 0.5,
      });

      gsap.to(".circle-inner", 1, {
        width: "75px",
        height: "75px",
        ease: "power4.inOut",
        delay: 2,
      });

      gsap.to(".circle-inner-rotator", 1, {
        scale: 1,
        ease: "power4.inOut",
        delay: 2.5,
      });

      gsap.to(".circles", 1.5, {
        rotation: 360,
        ease: "power4.inOut",
        delay: 3,
      });

      gsap.to(".block", 0.75, {
        display: 360,
        height: "200px",
        ease: "power4.inOut",
        delay: 3,
      });

      gsap.to(".block", 0.75, {
        display: 360,
        height: "200px",
        ease: "power4.inOut",
        delay: 3,
      });

      gsap.to(".block", 0.75, {
        width: "800px",
        ease: "power4.inOut",
        delay: 4.5,
      });

      gsap.fromTo(
        ".container",
        {
          duration: 2,
          left: "100%",
          scale: 0.5,
          ease: "power4.inOut",
          delay: 4,
        },
        {
          duration: 2,
          left: "50%",
          scale: 0.5,
          transform: "translateX(-50%)",
          ease: "power4.inOut",
          delay: 4,
        }
      );

      gsap.to(".block", 1.5, {
        width: "0px",
        ease: "power4.inOut",
        delay: 5,
      });

      gsap.to(".block", 1.5, {
        width: "0px",
        ease: "power4.inOut",
        delay: 6,
      });

      gsap.to(".circles", 1.5, {
        rotation: 0,
        ease: "power4.inOut",
        delay: 6.5,
      });

      gsap.to(".loader", 2.5, {
        scale: 0,
        ease: "power4.inOut",
        delay: 7,
      });

      gsap.to(".container", 2, {
        scale: 1,
        ease: "power4.inOut",
        delay: 7.5,
      });

      // Redirect to words.html after 2 seconds
      setTimeout(function () {
        window.location.href = "words.html";
      }, 10000);
    </script>

    <!-- Example of PHP: Display Current Date -->
    <footer>
      <p>Current date: <?php echo date("Y-m-d H:i:s"); ?></p>
    </footer>
  </body>
</html>
