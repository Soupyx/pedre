<?php
  // Récupère le nom du fichier en cours (ex: "contact.php")
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="bg-white border-b border-luxe-100">
  <div class="max-w-screen-xxl mx-auto px-6 md:px-12 lg:px-28 py-4 flex items-center justify-between">
    <a href="index.php" class="flex-shrink-0">
      <img src="img/logo.png" alt="Logo DV Design Dumont & Vauban"
        class="h-16 md:h-[6.5rem] w-auto object-contain drop-shadow-md" />
    </a>

    <span class="hidden md:block text-xl italic tracking-wide md:text-3xl lg:text-4xl font-serif text-luxe-900 text-center flex-1">
      DV Design Dumont & Vauban
    </span>

    <!-- Navigation desktop -->
    <nav class="hidden md:flex items-center gap-6 lg:gap-10 text-base lg:text-lg">
      <a href="index.php" class="<?= $currentPage == 'index.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Accueil</a>
      <a href="nos-realisations.php" class="<?= $currentPage == 'nos-realisations.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Nos réalisations</a>
      <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Contact</a>
    </nav>

    <!-- Bouton mobile -->
    <button id="menu-btn" class="md:hidden text-luxe-900 focus:outline-none">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Navigation mobile -->
  <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
    <nav class="flex flex-col gap-4 text-lg items-center text-center">
      <a href="index.php" class="<?= $currentPage == 'index.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Accueil</a>
      <a href="nos-realisations.php" class="<?= $currentPage == 'nos-realisations.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Nos réalisations</a>
      <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'font-semibold' : '' ?> hover:text-gold-500">Contact</a>
    </nav>
  </div>
</header>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
