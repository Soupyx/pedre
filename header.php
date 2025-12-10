<?php
  // Récupère le nom du fichier en cours (ex: "contact.php")
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="bg-white border-b border-luxe-100 relative">
  <div class="max-w-screen-xxl mx-auto px-6 md:px-12 lg:px-28 py-4 grid grid-cols-3 items-center">
    
    <!-- Logo -->
    <a href="index.php" class="justify-self-start">
      <img src="img/logo.png" alt="Logo DV Design Dumont & Vauban"
        class="h-16 md:h-[6.5rem] w-auto object-contain drop-shadow-md" />
    </a>

    <!-- Titre centré -->
    <span class="hidden md:block justify-self-center text-xl italic tracking-wide md:text-3xl lg:text-4xl font-serif text-luxe-900">
      DV Design Dumont & Vauban
    </span>

    <!-- Navigation desktop -->
    <nav class="hidden md:flex justify-self-end items-center gap-6 lg:gap-10 text-base lg:text-lg">
      <a href="index.php" class="<?= $currentPage == 'index.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Accueil</a>
      <a href="nos-realisations.php" class="<?= $currentPage == 'nos-realisations.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Nos réalisations</a>
      <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Contact</a>
    </nav>
  </div>

  <!-- Bouton burger mobile -->
  <button id="menu-btn" 
          class="md:hidden text-luxe-900 focus:outline-none absolute top-4 right-6 z-50">
    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M4 6h16M4 12h16M4 18h16" />
    </svg>
  </button>

  <!-- Popup menu mobile -->
  <div id="mobile-menu" 
       class="fixed inset-0 bg-black/90 hidden flex flex-col items-center justify-center text-white text-2xl z-40">
    
    <!-- Bouton fermer -->
    <button id="close-btn" class="absolute top-6 right-6 text-white focus:outline-none">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Liens centrés -->
    <nav class="flex flex-col gap-8 items-center justify-center text-center">
      <a href="index.php" class="<?= $currentPage == 'index.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Accueil</a>
      <a href="nos-realisations.php" class="<?= $currentPage == 'nos-realisations.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Nos réalisations</a>
      <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Contact</a>
    </nav>
  </div>
</header>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeBtn = document.getElementById('close-btn');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
  });

  closeBtn.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
  });
</script>
