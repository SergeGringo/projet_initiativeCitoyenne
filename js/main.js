$(document).ready(function () {
  var width = $(window).width();
  if (width < 800) {
    $(".contenu_slide").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      arrows: false,
    });
  } else if (width < 1500 && width > 800) {
    $(".contenu_slide").slick({
      slidesToShow: 2,
      slidesToScroll: 2,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      arrows: false,
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const econoItems = document.querySelectorAll(".items_corps.econo");
  const socItems = document.querySelectorAll(".items_corps.soc");
  const terrItems = document.querySelectorAll(".items_corps.terr");

  document.getElementById("doit0").addEventListener("click", function () {
    showItems(econoItems);
    hideItems(socItems);
    hideItems(terrItems);
  });

  document.getElementById("doit1").addEventListener("click", function () {
    hideItems(econoItems);
    showItems(socItems);
    hideItems(terrItems);
  });

  document.getElementById("doit2").addEventListener("click", function () {
    hideItems(econoItems);
    hideItems(socItems);
    showItems(terrItems);
  });

  function showItems(items) {
    items.forEach((item) => (item.style.display = "block"));
  }

  function hideItems(items) {
    items.forEach((item) => (item.style.display = "none"));
  }
});

// $(document).ready(function(){

//   $('#tap1').on('click', function(){

//   })

// });

// script pour l'apparution et de la disparution des cartes

// document.addEventListener("DOMContentLoaded", function () {
//   const taps = document.querySelectorAll('[id^="tap"]'); // Sélectionne tous les éléments avec un ID commençant par "tap"

//   taps.forEach((tap) => {
//     tap.addEventListener("click", function () {
//       const id = this.id; // Récupère l'ID de l'élément cliqué
//       const carteClass = id.replace("tap", "carte"); // Remplace "tap" par "carte" pour obtenir la classe correspondante
//       const carte = document.querySelector(`.${carteClass}`); // Sélectionne la carte correspondante

//       // Vérifie si la div est désactivée
//       if (this.hasAttribute("disabled")) {
//         this.removeAttribute("disabled"); // Retire l'attribut disabled
//         carte.style.display = "block"; // Affiche la carte
//       } else {
//         this.setAttribute("disabled", true); // Ajoute l'attribut disabled
//         carte.style.display = "none"; // Masque la carte
//       }
//     });
//   });
// });

// script pour l'apparution et de la disparution des cartes

document.addEventListener("DOMContentLoaded", function () {
  const taps = document.querySelectorAll('[id^="tap"]'); // Sélectionne tous les éléments avec un ID commençant par "tap"
  taps.forEach((tap) => {
    tap.addEventListener("click", function () {
      const id = this.id; // Récupère l'ID de l'élément cliqué
      const carteClass = id.replace("tap", "carte"); // Remplace "tap" par "carte" pour obtenir la classe correspondante
      const carte = document.querySelector(`.${carteClass}`); // Sélectionne la carte correspondante

      // Vérifie si la div est désactivée
      if (this.hasAttribute("disabled")) {
        this.removeAttribute("disabled"); // Retire l'attribut disabled
        carte.style.display = "block"; // Affiche la carte
        this.classList.remove("tap-active"); // Retire la classe de couleur de fond
      } else {
        this.setAttribute("disabled", true); // Ajoute l'attribut disabled
        carte.style.display = "none"; // Masque la carte
        this.classList.add("tap-active"); // Ajoute la classe de couleur de fond
      }
    });
  });
});

// document.addEventListener("DOMContentLoaded", function() {
//   const econoItems = document.querySelectorAll('.items_corps.econo');
//   const socItems = document.querySelectorAll('.items_corps.soc');
//   const terrItems = document.querySelectorAll('.items_corps.terr');

//   document.getElementById('doit0').addEventListener('click', function() {
//       toggleItems(econoItems, true);
//       toggleItems(socItems, false);
//       toggleItems(terrItems, false);
//   });

//   document.getElementById('doit1').addEventListener('click', function() {
//       toggleItems(econoItems, false);
//       toggleItems(socItems, true);
//       toggleItems(terrItems, false);
//   });

//   document.getElementById('doit2').addEventListener('click', function() {
//       toggleItems(econoItems, false);
//       toggleItems(socItems, false);
//       toggleItems(terrItems, true);
//   });

//   function toggleItems(items, show) {
//       items.forEach(item => {
//           if (show) {
//               item.classList.add('show'); // Ajouter la classe pour afficher
//           } else {
//               item.classList.remove('show'); // Retirer la classe pour cacher
//           }
//       });
//   }
// });

// RESPONSIVE SLIDE PAGE COMPARAISON

$(document).ready(function () {
  var width = $(window).width();
  if (width < 800) {
    $(".items_slide").slick({
      slidesToShow: 1, // Nombre de cartes visibles
      slidesToScroll: 1, // Nombre de cartes à défiler à la fois
      autoplay: false, // Défilement automatique
      autoplaySpeed: 5000, // Vitesse du défilement automatique
      dots: false, // Afficher les points de navigation
      infinite: true, // Boucle infinie
      arrows: false, // Afficher les flèches de navigation
    });
  } else if (width < 1500 && width > 800) {
    $(".items_slide").slick({
      slidesToShow: 2, // Nombre de cartes visibles
      slidesToScroll: 2, // Nombre de cartes à défiler à la fois
      autoplay: false, // Défilement automatique
      autoplaySpeed: 5000, // Vitesse du défilement automatique
      dots: false, // Afficher les points de navigation
      infinite: true, // Boucle infinie
      arrows: false, // Afficher les flèches de navigation
    });
  }
});

// script de la progresse_bare page 2ème tour

document.addEventListener("DOMContentLoaded", function () {
  const progress = document.getElementById("move");
  const percentageText = document.getElementById("percentages");
  const targetValue = 60; // Valeur cible de la progression
  let currentValue = 0; // Valeur actuelle de la progression

  const interval = setInterval(() => {
    if (currentValue < targetValue) {
      currentValue++;
      progress.style.width = currentValue + "%"; // Met à jour la largeur de la barre de progression
      percentageText.textContent = currentValue + "%"; // Met à jour le texte du pourcentage
    } else {
      clearInterval(interval); // Arrête l'intervalle quand la valeur cible est atteinte
    }
  }, 20); // Ajustez la vitesse de progression ici (20 ms par incrément)
});

// transition des elements sur la page 2ème tour (gagnant)

document.addEventListener("DOMContentLoaded", function () {
  const voiceElements = document.querySelectorAll(".per_voice");
  const stairElements = document.querySelectorAll(".stair");

  // Animation pour les éléments per_voice
  voiceElements.forEach((element, index) => {
    setTimeout(() => {
      element.classList.add("show"); // Ajoute la classe 'show' pour déclencher l'animation
    }, index * 300); // Délai de 300 ms entre chaque élément
  });

  // Animation pour les éléments stair
  stairElements.forEach((element, index) => {
    setTimeout(() => {
      element.classList.add("show"); // Ajoute la classe 'show' pour déclencher l'animation
    }, (index + voiceElements.length) * 300); // Délai après les éléments per_voice
  });
});

// script pour les buttons "a"

document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".tours a");

  links.forEach((link) => {
    link.addEventListener("click", function (event) {
      // Empêche le comportement par défaut (navigation) pour pouvoir changer la classe
      event.preventDefault();

      // Retirer la classe 'active' de tous les liens
      links.forEach((l) => l.classList.remove("active"));

      // Ajouter la classe 'active' au lien cliqué
      this.classList.add("active");

      // Naviguer vers la page après un court délai pour voir le changement de classe
      setTimeout(() => {
        window.location.href = this.href;
      }, 100); // 100 ms
    });
  });
});

// script pour les ancres

document.querySelectorAll(".points a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault(); // Empêche le comportement par défaut du lien

    const targetId = this.getAttribute("href"); // Récupère l'ID de la cible
    const targetElement = document.querySelector(targetId); // Sélectionne l'élément cible
    const container = document.querySelector(".conteneurs_themes"); // Sélectionne le conteneur à faire défiler

    // Calcule le décalage
    const offsetTop = targetElement.offsetTop;
    const containerScrollTop = container.scrollTop;
    const targetScrollTop = offsetTop - container.offsetTop;

    // Fait défiler le conteneur
    container.scrollTo({
      top: targetScrollTop,
      behavior: "smooth", // Défilement fluide
    });
  });
});

// animation pour la page resultat

document.addEventListener("DOMContentLoaded", function () {
  const percentDivs = document.querySelectorAll(".percent");

  percentDivs.forEach((div) => {
    // Récupérer la hauteur initiale
    const targetHeight = parseFloat(div.style.height);

    // Mettre la hauteur à 0% au chargement de la page
    div.style.height = "35%";

    // Animation de la hauteur
    setTimeout(() => {
      div.style.height = targetHeight + "%";

      // Vérifier si la hauteur atteint 35% pour afficher les niveaux
      const niveauDivs = div.querySelectorAll(".niveau");
      if (targetHeight >= 35) {
        niveauDivs.forEach((niveauDiv) => {
          niveauDiv.style.display = "block"; // Afficher chaque niveau
        });
      }
    }, 3000); // Délai pour s'assurer que la hauteur est mise à 0 avant d'animer
  });
});

// animation pour la les divs progresst

document.addEventListener("DOMContentLoaded", function () {
  const progressDivs = document.querySelectorAll(".progresst");

  progressDivs.forEach((div) => {
    // Récupérer la largeur cible à partir du style inline
    const targetWidth = div.style.width;

    // Mettre la largeur à 0% au chargement de la page
    div.style.width = "0%";

    // Animation de la largeur
    setTimeout(() => {
      div.style.width = targetWidth; // Animer vers la largeur cible
    }, 3000); // Délai pour s'assurer que la largeur est mise à 0 avant d'animer
  });
});

// script pour le défilement avec la souris sur la page comparer

document.addEventListener("DOMContentLoaded", function () {
  const itemsSlide = document.querySelector(".items_slide");

  let isDown = false;
  let startX;
  let scrollLeft;

  itemsSlide.addEventListener("mousedown", (e) => {
    isDown = true;
    itemsSlide.classList.add("active");
    startX = e.pageX - itemsSlide.offsetLeft;
    scrollLeft = itemsSlide.scrollLeft;
  });

  itemsSlide.addEventListener("mouseleave", () => {
    isDown = false;
    itemsSlide.classList.remove("active");
  });

  itemsSlide.addEventListener("mouseup", () => {
    isDown = false;
    itemsSlide.classList.remove("active");
  });

  itemsSlide.addEventListener("mousemove", (e) => {
    if (!isDown) return; // Si la souris n'est pas enfoncée, ne rien faire
    e.preventDefault();
    const x = e.pageX - itemsSlide.offsetLeft;
    const walk = (x - startX) * 1; // Le facteur de vitesse de défilement
    itemsSlide.scrollLeft = scrollLeft - walk;
  });
});

// document.addEventListener('DOMContentLoaded', function() {
//   const links = document.querySelectorAll('nav a');

//   links.forEach(link => {
//       link.addEventListener('click', function() {
//           // Retirer la classe 'active' de tous les liens
//           links.forEach(l => l.classList.remove('active'));
//           // Ajouter la classe 'active' au lien cliqué
//           this.classList.add('active');
//       });
//   });
// });
