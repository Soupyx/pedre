<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact — Dumont & Vauban</title>
  <meta name="description"
    content="Demandez votre devis gratuit (hors dégâts des eaux). Intervention du Lavandou à Toulon.">
  <meta name="keywords" content="devis gratuit, rénovation luxe, Hyères, Toulon, plâtres, contact">
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
            luxe: { 50: '#faf8f5', 100: '#f3eee6', 200: '#e5dccb', 300: '#d0c2a8', 400: '#b6a382', 500: '#9c8868', 600: '#7f6d53', 700: '#655644', 800: '#4b4033', 900: '#2f2820' },
            gold: { 400: '#d4af37', 500: '#c5a028', 600: '#a6841f' }
          },
          fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'], serif: ['Playfair Display', 'serif'] }
        }
      }
    }
  </script>
</head>

<body class="bg-luxe-50 text-luxe-900 font-sans">
<?php include 'header.php'; ?>
  <main>
    <section class="py-16">
      <div class="max-w-5xl mx-auto px-4">
        <h1 class="font-serif text-4xl">Contact & devis</h1>
        <p class="mt-4 text-luxe-700">Devis gratuit (hors dégâts des eaux). Détaillez votre projet, nous revenons vers
          vous rapidement.</p>

        <div class="mt-8 grid md:grid-cols-1 gap-8">
          <!-- Formulaire AJAX -->
          <form id="contactForm" class="bg-white border border-luxe-100 rounded-xl p-6 space-y-5">
            <div>
              <label class="block text-sm font-semibold">Nom complet</label>
              <input type="text" name="nom" required
                class="mt-2 w-full rounded-lg border border-luxe-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold-500"
                placeholder="Ex: Jeanne Dupont">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
              <div>
                <label class="block text-sm font-semibold">Email</label>
                <input type="email" name="email" required
                  class="mt-2 w-full rounded-lg border border-luxe-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold-500"
                  placeholder="Ex: jeanne@exemple.com">
              </div>
              <div>
                <label class="block text-sm font-semibold">Téléphone</label>
                <input type="tel" name="tel"
                  class="mt-2 w-full rounded-lg border border-luxe-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold-500"
                  placeholder="Ex: 06 12 34 56 78">
              </div>
            </div>
            <div>
              <label class="block text-sm font-semibold">Localisation du projet</label>
              <select name="localisation"
                class="mt-2 w-full rounded-lg border border-luxe-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold-500">
                <option>Hyères</option>
                <option>Le Lavandou</option>
                <option>La Londe</option>
                <option>Le Pradet</option>
                <option>Carqueiranne</option>
                <option>Toulon</option>
                <option>Autre (proche)</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-semibold">Message</label>
              <textarea name="message" rows="5"
                class="mt-2 w-full rounded-lg border border-luxe-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold-500"
                placeholder="Décrivez vos besoins, délais, budget..."></textarea>
            </div>
            <button type="submit"
              class="w-full rounded-lg px-5 py-3 bg-gold-500 text-white hover:bg-gold-600 transition">Envoyer la
              demande</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
 <?php include 'footer.php'; ?>

  <!-- Toast container -->
  <div id="toast" class="fixed top-5 right-5 hidden px-6 py-4 rounded-lg shadow-lg text-white font-semibold"></div>

  <!-- Script AJAX + Toast -->
  <script>
    document.getElementById("contactForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(this);

      fetch("send.php", {
        method: "POST",
        body: formData
      })
        .then(response => response.text())
        .then(data => {
          showToast("Votre message a bien été envoyé ✅", "bg-green-600");
          this.reset();
        })
        .catch(error => {
          showToast("Erreur lors de l'envoi ❌", "bg-red-600");
        });
    });

    function showToast(message, colorClass) {
      const toast = document.getElementById("toast");
      toast.textContent = message;
      toast.className = `fixed top-5 right-5 px-6 py-4 rounded-lg shadow-lg text-white font-semibold ${colorClass}`;
      toast.style.display = "block";

      // Disparaît automatiquement après 4 secondes
      setTimeout(() => {
        toast.style.display = "none";
      }, 4000);
    }
  </script>

</body>

</html>