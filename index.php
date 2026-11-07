<?php
$firma = 'Szprycha';
$rok = date('Y');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Szprycha – serwis rowerowy</title>
  <link rel="stylesheet" href="style.css">
  <script src="app.js" defer></script>
</head>
<body>
  <header class="site-header">
    <p class="logo">Szprycha</p>
    <button class="menu-toggle" aria-expanded="false" aria-label="Menu">Menu</button>
    <nav class="menu">
      <a href="#uslugi">Usługi</a>
      <a href="#cennik">Cennik</a>
      <a href="#kontakt">Kontakt</a>
    </nav>
  </header>
  <main>
    <section id="uslugi">
      <h2>Usługi</h2>
      <p>Przeglądy okresowe, regulacja napędu, centrowanie kół, serwis hamulców hydraulicznych.</p>
    </section>

    <section id="cennik">
      <h2>Cennik</h2>

      <div class="cards">
        <article class="card card--highlight">
          <span class="badge">Najczęściej wybierane</span>
          <h3>Przegląd</h3>
          <p>Hamulce i przerzutki.</p>
          <p class="card__price">od 120 zł</p>
        </article>

        <article class="card">
          <h3>Serwis</h3>
          <p>Napęd.</p>
          <p class="card__price">od 60 zł</p>
        </article>

        <article class="card">
          <h3>Odpowietrzanie hamulców</h3>
          <p>Hamulce.</p>
          <p class="card__price">od 50 zł</p>
        </article>
      </div>

      <table class="price-table">
        <thead>
          <tr>
            <th>Usługa</th>
            <th class="num">Cena</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Przegląd podstawowy</td>
            <td class="num">120 zł</td>
          </tr>
          <tr>
            <td>Regulacja napędu</td>
            <td class="num">60 zł</td>
          </tr>
          <tr>
            <td>Odpowietrzanie hamulców</td>
            <td class="num">50 zł</td>
          </tr>
          <tr>
            <td>Centrowanie koła</td>
            <td class="num">40 zł</td>
          </tr>
        </tbody>
      </table>
      
    </section>
  </main>
  <footer id="kontakt"><h2>Kontakt</h2>
    <p>Adres: ul. Rowerowa 12, Warszawa</p>
    <p>Telefon: <a href="tel:+48500100200">500 100 200</a></p>
    <p>E-mail: <a href="mailto:kontakt@szprycha.pl">kontakt@szprycha.pl</a></p>
    <p>&copy; 2026 Szprycha – serwis rowerowy</p>
  </footer>
</body>
</html>