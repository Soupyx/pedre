<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nos réalisations — Dumont & Vauban</title>
  <meta name="description" content="Découvrez nos réalisations haut de gamme en rénovation et design intérieur." />
  <meta name="keywords" content="réalisations, rénovation luxe, design intérieur, Hyères, Toulon" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@400;600;700&display=swap"
    rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            luxe: {
              50: '#faf8f5',
              100: '#f3eee6',
              200: '#e5dccb',
              300: '#d0c2a8',
              400: '#b6a382',
              500: '#9c8868',
              600: '#7f6d53',
              700: '#655644',
              800: '#4b4033',
              900: '#2f2820'
            },
            gold: {
              400: '#d4af37',
              500: '#c5a028',
              600: '#a6841f'
            }
          },
          fontFamily: {
            sans: ['Inter', 'system-ui', 'sans-serif'],
            serif: ['Playfair Display', 'serif']
          }
        }
      }
    }
  </script>
</head>

<body class="bg-luxe-50 text-luxe-900 font-sans">
  <?php include 'header.php'; ?>

  <main>
   
    <section class="relative overflow-hidden">
      <div class="relative h-[70vh]">
        <!-- Container des slides -->
        <div id="carousel" class="absolute inset-0 flex w-full transition-transform duration-700 ease-in-out">
          <!-- Les images seront injectées par JS -->
        </div>
        <!-- Overlay sombre -->
        <div class="absolute inset-0 bg-black/40"></div>
        <!-- Texte centré -->
        <div class="relative max-w-5xl mx-auto px-4 h-[70vh] flex items-center justify-center">
          <h1 class="text-white font-serif text-4xl md:text-5xl">Nos réalisations</h1>
        </div>
      </div>
    </section>

    <script>
      // Liste des images du carousel
      const images = [
        "img/interieur_deco/photo1.jpeg",
        "img/interieur_deco/photo2.jpeg",
        "img/interieur_deco/photo3.jpeg",
        "img/interieur_deco/photo4.jpeg",
        "img/interieur_deco/photo5.jpeg",
        "img/salledebain_deco/photo1.jpeg"
      ];

      const carousel = document.getElementById("carousel");
      let currentIndex = 0;

      // Génère les slides
      images.forEach(src => {
        const img = document.createElement("img");
        img.src = src;
        img.className = "w-full h-screen object-cover flex-shrink-0 min-w-full";
        carousel.appendChild(img);
      });

      // Mise à jour initiale
      function updateCarousel() {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
      }
      updateCarousel();

      // Auto-play toutes les 4 secondes
      setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;
        updateCarousel();
      }, 4000);
    </script>




    <!-- INTRO -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-serif text-3xl">Un savoir-faire mis en lumière</h2>
        <p class="mt-4 text-luxe-700 leading-relaxed">
          Découvrez quelques-unes de nos réalisations en rénovation et design intérieur.
          Chaque projet est pensé dans les moindres détails pour refléter l’élégance et la
          qualité qui font la réputation de Dumont & Vauban.
        </p>
      </div>
    </section>

    <!-- GALERIE -->
    <section class="pb-20 bg-white">
      <div class="max-w-screen-xl mx-auto px-4 grid gap-12 sm:grid-cols-1 lg:grid-cols-2">

        <!-- Carrousel 1 : Rénovation d'intérieur -->
        <div class="rounded-lg shadow-lg overflow-hidden relative">
          <div id="carousel-interieur" class="flex transition-transform duration-700 ease-in-out">
            <!-- Images injectées par JS -->
          </div>
          <!-- Flèches -->
          <button id="prev-interieur" class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/40 text-white p-3 rounded-full hover:bg-black/60 text-xl">‹</button>
          <button id="next-interieur" class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/40 text-white p-3 rounded-full hover:bg-black/60 text-xl">›</button>
          <!-- Légende -->
          <div class="bg-luxe-100 p-6 text-center">
            <span class="font-serif text-xl text-luxe-900">Rénovation d'intérieur</span>
          </div>
        </div>

        <!-- Carrousel 2 : Salle de bain -->
        <div class="rounded-lg shadow-lg overflow-hidden relative">
          <div id="carousel-salledebain" class="flex transition-transform duration-700 ease-in-out">
            <!-- Images injectées par JS -->
          </div>
          <!-- Flèches -->
          <button id="prev-salledebain" class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/40 text-white p-3 rounded-full hover:bg-black/60 text-xl">‹</button>
          <button id="next-salledebain" class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/40 text-white p-3 rounded-full hover:bg-black/60 text-xl">›</button>
          <!-- Légende -->
          <div class="bg-luxe-100 p-6 text-center">
            <span class="font-serif text-xl text-luxe-900">Salle de bain</span>
          </div>
        </div>

      </div>
    </section>

    <script>
      // --- Carrousel 1 : intérieur ---
      const interieurImages = [
        "img/interieur_deco/photo1.jpeg",
        "img/interieur_deco/photo2.jpeg",
        "img/interieur_deco/photo3.jpeg",
        "img/interieur_deco/photo4.jpeg",
        "img/interieur_deco/photo5.jpeg",
        "img/interieur_deco/photo6.jpeg",
        "img/interieur_deco/photo7.jpeg",
        "img/interieur_deco/photo8.jpeg",
        "img/interieur_deco/photo9.jpeg",
        "img/interieur_deco/photo10.jpeg",
        "img/interieur_deco/photo11.jpeg",
        "img/interieur_deco/photo12.jpeg"
      ];

      const carouselInterieur = document.getElementById("carousel-interieur");
      let interieurIndex = 0;

      interieurImages.forEach(src => {
        const img = document.createElement("img");
        img.src = src;
        img.className = "w-full h-[70vh] object-cover flex-shrink-0 min-w-full";
        carouselInterieur.appendChild(img);
      });

      function updateInterieur() {
        carouselInterieur.style.transform = `translateX(-${interieurIndex * 100}%)`;
      }

      document.getElementById("prev-interieur").addEventListener("click", () => {
        interieurIndex = (interieurIndex - 1 + interieurImages.length) % interieurImages.length;
        updateInterieur();
      });
      document.getElementById("next-interieur").addEventListener("click", () => {
        interieurIndex = (interieurIndex + 1) % interieurImages.length;
        updateInterieur();
      });

      // --- Carrousel 2 : salle de bain ---
      const salledebainImages = [
        "img/salledebain_deco/photo1.jpeg",
        "img/salledebain_deco/photo2.jpeg",
        "img/salledebain_deco/photo3.jpeg",
        "img/salledebain_deco/photo4.jpeg",
        "img/salledebain_deco/photo5.jpeg",
        "img/salledebain_deco/photo6.jpeg",
        "img/salledebain_deco/photo7.jpeg",
        "img/salledebain_deco/photo8.jpeg",
        "img/salledebain_deco/photo9.jpeg",
        "img/salledebain_deco/photo10.jpeg",
        "img/salledebain_deco/photo11.jpeg",
        "img/salledebain_deco/photo12.jpeg",
        "img/salledebain_deco/photo13.jpeg",
        "img/salledebain_deco/photo14.jpeg"
      ];

      const carouselSalledebain = document.getElementById("carousel-salledebain");
      let salledebainIndex = 0;

      salledebainImages.forEach(src => {
        const img = document.createElement("img");
        img.src = src;
        img.className = "w-full h-[70vh] object-cover flex-shrink-0";

        carouselSalledebain.appendChild(img);
      });

      function updateSalledebain() {
        carouselSalledebain.style.transform = `translateX(-${salledebainIndex * 100}%)`;
      }

      document.getElementById("prev-salledebain").addEventListener("click", () => {
        salledebainIndex = (salledebainIndex - 1 + salledebainImages.length) % salledebainImages.length;
        updateSalledebain();
      });
      document.getElementById("next-salledebain").addEventListener("click", () => {
        salledebainIndex = (salledebainIndex + 1) % salledebainImages.length;
        updateSalledebain();
      });
    </script>

  </main>

  <?php include 'footer.php'; ?>
</body>

</html>