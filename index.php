<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dumont & Vauban — Rénovation d’intérieur haut de gamme</title>
  <meta name="description"
    content="Rénovation d’intérieur luxe, plâtres et design sur Hyères, Le Lavandou, La Londe, Le Pradet, Carqueiranne jusqu’à Toulon. Devis gratuit (hors dégâts des eaux)." />
  <meta name="keywords"
    content="rénovation d'intérieur luxe, haut de gamme, plâtres, design, Hyères, Lavandou, La Londe, Pradet, Carqueiranne, Toulon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@400;600;700&display=swap"
    rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            luxe: {
              50: "#faf8f5",
              100: "#f3eee6",
              200: "#e5dccb",
              300: "#d0c2a8",
              400: "#b6a382",
              500: "#9c8868",
              600: "#7f6d53",
              700: "#655644",
              800: "#4b4033",
              900: "#2f2820",
            },
            gold: {
              400: "#d4af37",
              500: "#c5a028",
              600: "#a6841f",
            },
          },
          fontFamily: {
            sans: ["Inter", "system-ui", "sans-serif"],
            serif: ["Playfair Display", "serif"],
          },
        },
      },
    };
  </script>

  <style>
    .link-underline {
      background-size: 0% 2px;
      background-repeat: no-repeat;
      background-position: 0 100%;
      transition: background-size 0.3s ease;
    }

    .link-underline:hover {
      background-image: linear-gradient(to right, #d4af37, #a6841f);
      background-size: 100% 2px;
    }
  </style>
</head>

<body class="bg-luxe-50 text-luxe-900 font-sans">

  <?php include 'header.php'; ?>

  <!-- HERO -->
  <section class="relative">
    <!-- Image de fond -->
    <div class="absolute inset-0">
      <img src="img/img site 1.jpg" alt="Intérieur luxe rénové"
        class="w-full h-[70vh] md:h-[80vh] lg:h-screen object-cover" />
      <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <!-- Contenu -->
    <div class="relative max-w-7xl mx-auto px-4 h-[70vh] md:h-[80vh] lg:h-screen flex items-center">
      <div class="text-white max-w-2xl sm:max-w-xl md:max-w-2xl lg:max-w-3xl">

        <!-- Titre -->
        <h1 class="font-serif text-3xl sm:text-4xl md:text-5xl lg:text-6xl leading-tight">
          Rénovation d’intérieur haut de gamme,<br class="hidden sm:block"> plâtres & design
        </h1>

        <!-- Paragraphe -->
        <p class="mt-4 text-base sm:text-lg md:text-xl lg:text-2xl leading-relaxed">
          Finitions impeccables, détails sur-mesure, matériaux nobles.<br class="hidden md:block">
          Pour clients exigeants sur la Côte d’Azur.
        </p>

        <!-- Boutons -->
        <div class="mt-6 flex flex-col sm:flex-row gap-3 sm:gap-6">
          <a href="contact.html"
            class="px-6 py-3 rounded-full bg-gold-500 text-white hover:bg-gold-600 transition shadow text-center">
            Demander un devis
          </a>

          <a href="a-propos.html"
            class="px-6 py-3 rounded-full bg-white/10 backdrop-blur border border-white/30 
                  text-white hover:bg-white/20 transition text-center">
            Voir nos atouts
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- QUI SOMMES-NOUS -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-1 gap-12">
      <div>
        <h2 class="font-serif text-3xl">Qui sommes-nous ?</h2>

        <p class="mt-6 leading-relaxed">
          L’histoire de Dumont & Vauban Design est avant tout celle de deux amis passionnés,
          réunis par une même vision : redonner vie aux espaces et créer des lieux qui allient
          esthétique, confort et fonctionnalité.
        </p>

        <p class="mt-4 leading-relaxed">
          Ensemble, nous avons décidé de fonder une entreprise à taille humaine, fondée sur des valeurs simples mais
          essentielles :
        </p>

        <ul class="mt-4 space-y-2">
          <li>• <strong>L’écoute</strong>, pour comprendre chaque projet dans ses moindres détails.</li>
          <li>• <strong>La précision</strong>, fruit de nos années d’expérience sur le terrain.</li>
          <li>• <strong>La passion du beau et du bien fait</strong>, parce qu’un espace bien pensé change la vie.</li>
        </ul>

        <p class="mt-4 leading-relaxed">
          Aujourd’hui, Dumont & Vauban Design accompagne particuliers et professionnels dans leurs projets
          de rénovation, de création et de design intérieur, avec une approche sur mesure et un soin particulier
          apporté à chaque finition.
        </p>

        <p class="mt-4 leading-relaxed">
          Nous avons également le privilège de collaborer avec une architecte d’intérieur renommée, dont les créations
          ont été mises en avant dans plusieurs magazines spécialisés. Grâce à son regard artistique et à notre
          savoir-faire terrain, nous transformons chaque projet en un espace unique, harmonieux et pleinement adapté
          à vos besoins.
        </p>

        <p class="mt-4 font-serif italic text-lg">
          Notre promesse : transformer vos idées en réalisations durables et élégantes.
        </p>
      </div>

    </div>
  </section>

  <div class="bg-transparent">
    <div class="max-w-7xl mx-auto px-4">
      <hr class="border-t border-black my-12">
    </div>
  </div>

  <!-- POURQUOI NOUS -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12">

      <!-- Colonne gauche : Pourquoi nous -->
      <div>
        <h2 class="font-serif text-3xl">Pourquoi nous ?</h2>

        <p class="mt-6 font-semibold">Parce que l’excellence ne s’improvise pas.</p>

        <p class="mt-4 leading-relaxed">
          Chez Dumont & Vauban Design, chaque projet est une œuvre pensée dans les moindres détails.
          Nous allions esthétique, savoir-faire et innovation pour créer des espaces à la fois élégants,
          fonctionnels et durables.
        </p>

        <p class="mt-4 leading-relaxed">
          Notre signature : une approche sur mesure, un accompagnement attentif et une exigence constante du beau.
        </p>

        <p class="mt-6 font-serif italic text-lg">
          Votre intérieur mérite le prestige du sur-mesure.
        </p>
      </div>

      <!-- Colonne droite : Devis gratuit -->
      <div class="border border-luxe-200 rounded-xl p-8 bg-luxe-50">
        <h3 class="font-serif text-2xl">Devis gratuit</h3>
        <p class="mt-3 text-luxe-700">
          Demandez une estimation sans frais. Les dégâts des eaux ne sont pas inclus.
        </p>

        <a href="contact.html"
          class="mt-6 inline-block px-5 py-3 rounded-lg bg-gold-500 text-white hover:bg-gold-600 transition">
          Obtenir un devis
        </a>

        <div class="mt-8">
          <h4 class="font-semibold">Zones d’intervention</h4>
          <p class="mt-2 text-luxe-700">
            Le Lavandou, La Londe, Hyères, Le Pradet, Carqueiranne — jusqu’à Toulon compris.
          </p>
        </div>
      </div>
    </div>
  </section>



  <!-- CTA -->
  <section class="py-20 bg-white text-center">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="font-serif text-3xl">Parlons de votre projet</h2>
      <p class="mt-3 text-luxe-700">
        Délais maîtrisés, qualité irréprochable. Intervention de Lavandou à Toulon.
      </p>
      <a href="contact.html"
        class="mt-6 inline-block px-8 py-3 rounded-full bg-gold-500 text-white hover:bg-gold-600 transition">Demander un
        devis</a>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

</body>

</html>