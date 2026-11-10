document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
  const currentUrl = window.location.pathname.split("/").pop(); // Récupérer le nom du fichier de la page actuelle

  navLinks.forEach((link) => {
    if (link.getAttribute("href") === currentUrl) {
      link.classList.add("active"); // Ajouter la classe active à l'élément correspondant
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const section1 = document.querySelector("#section1 .display_scroll");
  const section2 = document.querySelector("#section2 .display_scroll");

  // Fonction pour activer ou désactiver la gestion du scroll dans la section
  function initScrollSection(section) {
    const images = section.querySelectorAll(".scroll_img");
    const miniBarres = section.querySelectorAll(".mini_barre");
    let currentIndex = 0;
    let scrollCount = 0; // Compteur pour les scrolls
    let scrollingEnabled = true; // État de défilement
    let sectionVisible = false; // Pour suivre si la section est visible ou non
    let scrollUpCount = 0; // Compteur pour les scrolls vers le haut sur la première image
    let scrollDownCount = 0;

    function showImage(index) {
      images.forEach((img, i) => {
        img.style.display = i === index ? "block" : "none";
      });
      miniBarres.forEach((bar, i) => {
        bar.classList.toggle("activate", i === index);
      });
    }

    function handleScroll(event) {
      if (!scrollingEnabled) return; // Si le défilement n'est pas activé, rien ne se passe

      event.preventDefault(); // Empêcher le défilement par défaut
      scrollCount++; // Incrémenter le nombre de scrolls

      // Lorsque le nombre de scrolls atteint 5, changer l'image
      if (scrollCount >= 10) {
        if (event.deltaY > 0 && currentIndex < images.length - 1) {
          // Scroll vers le bas
          currentIndex++;
          showImage(currentIndex);
        } else if (event.deltaY < 0 && currentIndex > 0) {
          // Scroll vers le haut
          currentIndex--;
          showImage(currentIndex);
        }
        scrollCount = 0; // Réinitialiser le compteur après avoir changé l'image
      }

      // Si on atteint la dernière image et qu'on fait défiler vers le bas

      if (currentIndex === images.length - 1 && event.deltaY > 0) {
        scrollDownCount++; // Incrémenter le compteur de scroll vers le bas
        if (scrollDownCount >= 15) {
          // Réactiver le défilement normal de la page après 5 scrolls
          scrollingEnabled = false;
          document.documentElement.style.overflow = "auto"; // Réactiver le défilement de la page
          scrollDownCount = 0; // Réinitialiser le compteur
        }
      }

      // Si on atteint la première image et qu'on fait défiler vers le haut, on gère le compteur
      if (currentIndex === 0 && event.deltaY < 0) {
        scrollUpCount++; // Incrémenter le compteur de scroll vers le haut
        if (scrollUpCount >= 15) {
          // Réactiver le défilement normal de la page après 5 scrolls
          scrollingEnabled = false;
          document.documentElement.style.overflow = "auto"; // Réactiver le défilement de la page
          scrollUpCount = 0; // Réinitialiser le compteur
        }
      }

      // Si on est sur la première ou la dernière image, augmenter le nombre de scroll avant de changer l'image
      if (currentIndex === 0 && event.deltaY < 0) {
        scrollCount = 10; // Augmenter le nombre de scrolls pour que le comportement de page reprenne normalement
      }

      if (currentIndex === images.length - 1 && event.deltaY > 0) {
        scrollCount = 10; // Augmenter le nombre de scrolls pour que le comportement de page reprenne normalement
      }
    }

    // Ajouter un écouteur d'événements pour le défilement
    section.addEventListener("wheel", handleScroll);

    // Gérer les clics sur les éléments de la liste
    const links = section.querySelectorAll(".scroll_list ul li a");
    links.forEach((link, index) => {
      link.addEventListener("click", function (event) {
        event.preventDefault();
        currentIndex = index;
        showImage(currentIndex);
      });
    });

    // Initialiser l'affichage
    showImage(currentIndex);

    // IntersectionObserver pour vérifier si la section est visible ou non
    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            sectionVisible = true; // La section est visible
            if (scrollingEnabled === false) {
              scrollingEnabled = true; // Réactiver le défilement de la section lorsque la section devient visible
              document.documentElement.style.overflow = "hidden"; // Empêcher le scroll de la page jusqu'à ce que la section soit entièrement affichée
            }
          } else {
            sectionVisible = false; // La section n'est plus visible
            if (scrollingEnabled === true) {
              scrollingEnabled = false; // Désactiver le défilement de la section lorsque la section devient invisible
              document.documentElement.style.overflow = "auto"; // Permettre le défilement de la page
            }
          }
        });
      },
      {
        threshold: 0.90, // Observer lorsque 90% de la section est visible
      }
    );

    observer.observe(section); // Observer la section
  }

  // Initialiser les sections
  initScrollSection(section1);
  initScrollSection(section2);
});
