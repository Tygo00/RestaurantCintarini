<?php
  include('dbcalls/conn.php');
  include('dbcalls/menukaart/read.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Da Cintarinni - menu</title>
    </head>
<body>

<nav>
  <a class="nav-logo" href="index.php">Da Cintarinni</a>
  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="menu.php">Menu</a></li>
    <li><a href="reservering.php">Reservering</a></li>
    <li><a href="login.php" class="actief nav-cta">Inloggen</a></li>
  </ul>
</nav>

<div class="search-wrap">
  <input type="text" id="menuZoek" placeholder="Zoek in het menu… bijv. 'truffel', 'vegetarisch', 'pasta'"/>
  <button>🔍 Zoeken</button>
</div>

<!-- HEADER -->
<div class="menu-hero">
  <div class="eyebrow">Da Cintarinni Keuken</div>
  <h1>Onze <span>Menukaart</span></h1>
  <p>Alle gerechten worden bereid met verse, seizoensgebonden ingrediënten. Onze pizza's worden gebakken in een traditionele houtgestookte oven op 450°C.</p>
</div>
<?php
  var_dump($result);
?>

<!-- FILTER -->
<div class="filter-bar">
  <button class="filter-btn actief">Alles</button>
  <button class="filter-btn">🍕 Pizza's</button>
  <button class="filter-btn">🍝 Pasta</button>
  <button class="filter-btn">🥗 Salades</button>
  <button class="filter-btn">🍰 Desserts</button>
  <button class="filter-btn">🥤 Dranken</button>
</div>

<div class="menu-wrap">

  <!-- ALLERGENEN -->
  <div class="allergie-note">
    <strong>Allergenen informatie:</strong> Onze gerechten kunnen sporen bevatten van gluten, noten, lactose en andere allergenen. Informeer uw medewerker als u allergieën heeft. 🌿 = Vegetarisch &nbsp;|&nbsp; 🌶 = Pittig &nbsp;|&nbsp; ⭐ = Aanbevolen
  </div>

  <!-- PIZZA'S -->
  <div class="menu-categorie">
    <div class="categorie-header"><span class="icon">🍕</span><h2>Pizza's</h2></div>
    <div class="menu-grid">

    <?php foreach ($result as $menuitem){ ?>
      <div class="menu-item">
        

        <img class="menu-item-img" src="<?php echo $menuitem['afbeelding']?>" alt="Margherita"/>
        <div class="menu-item-body">
          <h3><?php echo $menuitem['naam'] ?></h3>
          <p><?php echo $menuitem['omschrijving'] ?></p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€13,50</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>
     <?php } ?>

<!-- vanaf hier word de code onoverbodig-->



      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=200&q=80" alt="Diavola"/>
        <div class="menu-item-body">
          <h3>Diavola Piccante</h3>
          <p>Pikante salami, San Marzano, mozzarella, chili, rucola</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€15,50</span><span class="menu-tag hot">🌶 Pittig</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?w=200&q=80" alt="Tartufo"/>
        <div class="menu-item-body">
          <h3>Tartufo Nero</h3>
          <p>Truffelcrème, wilde paddenstoelen, parmigiano, truffelschilfers</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€19,00</span><span class="menu-tag star">⭐ Favoriet</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1604917877934-07d8d248d396?w=200&q=80" alt="Quattro Formaggi"/>
        <div class="menu-item-body">
          <h3>Quattro Formaggi</h3>
          <p>Mozzarella, gorgonzola, parmigiano, scamorza, honing</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€16,50</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1528137871618-79d2761e3fd5?w=200&q=80" alt="Prosciutto"/>
        <div class="menu-item-body">
          <h3>Prosciutto e Rucola</h3>
          <p>Parmaham, rucola, parmigiano, kerstomaatjes, olijfolie</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€17,00</span><span class="menu-tag">Klassiek</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1594007654729-407eedc4be65?w=200&q=80" alt="Bufala"/>
        <div class="menu-item-body">
          <h3>Bufala e Pomodoro</h3>
          <p>Buffelmozzarella, heirloom tomaten, verse basilicum, zeezout</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€18,00</span><span class="menu-tag star">⭐ Favoriet</span></div>
        </div>
      </div>

    </div>
  </div>

  <!-- PASTA -->
  <div class="menu-categorie">
    <div class="categorie-header"><span class="icon">🍝</span><h2>Pasta</h2></div>
    <div class="menu-grid">

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1551183053-bf91798d3e5b?w=200&q=80" alt="Carbonara"/>
        <div class="menu-item-body">
          <h3>Spaghetti Carbonara</h3>
          <p>Guanciale, eigeel, pecorino romano, zwarte peper</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€14,50</span><span class="menu-tag star">⭐ Favoriet</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=200&q=80" alt="Cacio e Pepe"/>
        <div class="menu-item-body">
          <h3>Cacio e Pepe</h3>
          <p>Tonnarelli, pecorino romano, parmigiano, zwarte peper</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€13,00</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?w=200&q=80" alt="Amatriciana"/>
        <div class="menu-item-body">
          <h3>Bucatini all'Amatriciana</h3>
          <p>Guanciale, San Marzano tomaten, pecorino, peper</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€14,00</span><span class="menu-tag">Klassiek</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?w=200&q=80" alt="Pesto"/>
        <div class="menu-item-body">
          <h3>Trofie al Pesto Genovese</h3>
          <p>Verse basiliumpesto, pijnboompitten, parmigiano, kerstomaatjes</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€13,50</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

    </div>
  </div>

  <!-- SALADES -->
  <div class="menu-categorie">
    <div class="categorie-header"><span class="icon">🥗</span><h2>Salades &amp; Antipasti</h2></div>
    <div class="menu-grid">

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1529059997568-3d847b1154f9?w=200&q=80" alt="Caprese"/>
        <div class="menu-item-body">
          <h3>Insalata Caprese</h3>
          <p>Buffelmozzarella, heirloom tomaten, basilicum, balsamico</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€11,00</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1572441713132-c542fc4fe282?w=200&q=80" alt="Rucola Salade"/>
        <div class="menu-item-body">
          <h3>Rucola &amp; Parmigiano Salade</h3>
          <p>Rucola, parmigiano, pijnboompitten, citroen-olijfolie dressing</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€10,50</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1607877742574-a7d9a7449af3?w=200&q=80" alt="Bruschetta"/>
        <div class="menu-item-body">
          <h3>Bruschetta Mista</h3>
          <p>Geroosterd brood, heirloom tomaten, knoflook, basilicum, olijfolie</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€8,50</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

    </div>
  </div>

  <!-- DESSERTS -->
  <div class="menu-categorie">
    <div class="categorie-header"><span class="icon">🍰</span><h2>Desserts</h2></div>
    <div class="menu-grid">

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=200&q=80" alt="Tiramisu"/>
        <div class="menu-item-body">
          <h3>Tiramisù della Casa</h3>
          <p>Huisgemaakte tiramisù met mascarpone, espresso, ladyfingers</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€7,50</span><span class="menu-tag star">⭐ Favoriet</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1488477181946-6428a0291777?w=200&q=80" alt="Panna Cotta"/>
        <div class="menu-item-body">
          <h3>Panna Cotta ai Frutti di Bosco</h3>
          <p>Romige panna cotta met rood fruit coulis</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€7,00</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=200&q=80" alt="Gelato"/>
        <div class="menu-item-body">
          <h3>Gelato Artigianale</h3>
          <p>Ambachtelijk gelato: citroen, pistacchio of chocolato (2 bolletjes)</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€5,50</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

    </div>
  </div>

  <!-- DRANKEN -->
  <div class="menu-categorie">
    <div class="categorie-header"><span class="icon">🥤</span><h2>Dranken</h2></div>
    <div class="menu-grid">

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?w=200&q=80" alt="Wijn"/>
        <div class="menu-item-body">
          <h3>Chianti Classico (glas)</h3>
          <p>Toscaanse rode wijn, Sangiovese druiven, vol en fruitig</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€6,50</span><span class="menu-tag">Rood</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1596803244897-00e10e92c0a0?w=200&q=80" alt="Limonade"/>
        <div class="menu-item-body">
          <h3>Limonata Italiana</h3>
          <p>Verse Siciliaanse citroenlimonade met munt en suiker</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€4,00</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

      <div class="menu-item">
        <img class="menu-item-img" src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=200&q=80" alt="Espresso"/>
        <div class="menu-item-body">
          <h3>Espresso / Cappuccino</h3>
          <p>Verse Italiaanse espresso of luchtige cappuccino</p>
          <div class="menu-item-meta"><span class="menu-item-prijs">€2,80 / €3,50</span><span class="menu-tag vega">🌿 Vega</span></div>
        </div>
      </div>

    </div>
  </div>

</div><!-- /menu-wrap -->

<footer>
  <div class="footer-grid">
    <div class="footer-col">
      <h4>Da Cintarinni</h4>
      <p>Authentieke Napolitaanse pizza's bereid met liefde en de beste Italiaanse ingrediënten.</p>
    </div>
    <div class="footer-col">
      <h4>Navigatie</h4>
      <a href="index.php">Home</a>
      <a href="menu.php">Menu</a>
      <a href="reservering.php">Reservering</a>
    </div>
    <div class="footer-col">
      <h4>Openingstijden</h4>
      <p>Ma – Do: 12:00 – 22:00</p>
      <p>Vr – Za: 12:00 – 23:00</p>
      <p>Zondag: 13:00 – 21:30</p>
    </div>
    <div class="footer-col">
      <h4>Contact</h4>
      <p>📍 Dorpsstraat 36, 6681 BN Bemmel</p>
      <p>📞 020 – 123 4567</p>
      <p>✉️ info@daCintarinni.nl</p>
    </div>
  </div>
  <div class="footer-bottom">© 2026 Da Cintarinni – Alle rechten voorbehouden.</div>
</footer>
</body>
</html>
