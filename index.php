<?php
$firma = 'Szprycha';
$rok = date('Y');

$cennik = [
  ['nazwa' => 'Przegląd podstawowy', 'cena' => 120],
  ['nazwa' => 'Regulacja napędu', 'cena' => 60],
  ['nazwa' => 'Odpowietrzanie hamulców', 'cena' => 50],
  ['nazwa' => 'Centrowanie koła', 'cena' => 40],
  ['nazwa' => 'Wymiana dętki', 'cena' => 30],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $firma ?> – serwis rowerowy</title>
  <link rel="stylesheet" href="style.css">
  <script src="app.js" defer></script>
</head>
<body>
  <header class="site-header">
    <a class="logo" href="#">
      <svg viewBox="0 0 120 64" width="72" height="38" role="img" aria-labelledby="logo-tytul">
        <title id="logo-tytul">Szprycha</title>
        <circle cx="28" cy="42" r="18" fill="none" stroke="currentColor" stroke-width="4"/>
        <circle cx="92" cy="42" r="18" fill="none" stroke="currentColor" stroke-width="4"/>
        <polyline points="28,42 56,42 46,20 80,20 92,42 56,42 80,20" 
                  fill="none" 
                  stroke="currentColor" 
                  stroke-width="4" 
                  stroke-linecap="round" 
                  stroke-linejoin="round"/>
      </svg>
      <span><?= $firma ?></span>
    </a>

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
      <p>Oferujemy kompleksowy serwis rowerów miejskich, szosowych i MTB. Zadbamy o każdy detal Twojego sprzętu.</p>
    </section>

    <section id="cennik">
      <h2>Cennik</h2>
      <p>Wybierz jeden z pakietów lub skorzystaj z pojedynczych usług serwisowych.</p>

      <div class="cards">
        <article class="card card--highlight">
          <span class="badge">Najczęściej wybierane</span>
          <h3>Przegląd</h3>
          <p>Hamulce i przerzutki.</p>
          <p class="card__price">od 120 zł</p>
        </article>

        <article class="card">
          <h3>Serwis napędu</h3>
          <p>Czyszczenie i smarowanie.</p>
          <p class="card__price">od 60 zł</p>
        </article>

        <article class="card">
          <h3>Hamulce</h3>
          <p>Odpowietrzanie i regulacja.</p>
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
          <?php foreach ($cennik as $usluga): ?>
            <tr>
              <td><?= htmlspecialchars($usluga['nazwa']) ?></td>
              <td class="num"><?= $usluga['cena'] ?> zł</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </main>

  <footer id="kontakt">
    <h2>Kontakt</h2>
    <p>Adres: ul. Rowerowa 12, Warszawa</p>
    <p>Telefon: <a href="tel:+48500100200">500 100 200</a></p>
    <p>E-mail: <a href="mailto:kontakt@szprycha.pl">kontakt@szprycha.pl</a></p>
    <p>&copy; <?= $rok ?> <?= $firma ?> – Wszelkie prawa zastrzeżone.</p>
  </footer>
</body>
</html>