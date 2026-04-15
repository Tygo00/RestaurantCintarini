<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Da Cintarinni - Login</title>
    </head>
<body class="login-pagina">
 
<!-- NAV -->
<nav>
  <a class="nav-logo" href="index.php">Da Cintarinni</a>
  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="menu.php">Menu</a></li>
    <li><a href="reservering.php">Reservering</a></li>
    <li><a href="login.php" class="actief nav-cta">Inloggen</a></li>
  </ul>
</nav>
 
<!-- VOLLEDIGE PAGINA LAYOUT -->
<div class="login-pagina-wrap">
 
  <!-- LINKER HELFT — merkboodschap over achtergrondafbeelding -->
  <div class="login-links">
    <div class="login-links-overlay"></div>
    <div class="login-links-inhoud">
      <div class="login-logo">Da Cintarinni</div>
      <h1>Uw persoonlijk<br/><em>account</em></h1>
      <p>Beheer reserveringen, sla favorieten op en ontvang exclusieve aanbiedingen.</p>
      <ul class="voordelen-lijst">
        <li><span class="v-icon">🗓️</span> Reserveringen inzien &amp; wijzigen</li>
        <li><span class="v-icon">❤️</span> Favoriete gerechten opslaan</li>
        <li><span class="v-icon">🎁</span> Exclusieve kortingen &amp; aanbiedingen</li>
        <li><span class="v-icon">⭐</span> Spaarpunten voor gratis pizza's</li>
      </ul>
    </div>
  </div>
 
  <!-- RECHTER HELFT — formulier -->
  <div class="login-rechts">
 
    <!-- CSS-only tabs: radio inputs als eerste kinderen -->
    <input type="radio" name="tab" id="tab-in" checked class="tab-radio"/>
    <input type="radio" name="tab" id="tab-reg" class="tab-radio"/>
 
    <div class="formulier-kaart">
 
      <!-- TAB BALK -->
      <div class="tab-balk">
        <label for="tab-in" class="tab-label">Inloggen</label>
        <label for="tab-reg" class="tab-label">Registreren</label>
      </div>
 
      <!-- ── INLOGGEN ── -->
      <div class="tab-paneel" id="paneel-in">
        <div class="form-kop">
          <h2>Welkom terug</h2>
          <p>Log in op uw La Fiamma account</p>
        </div>
 
        <form action="#" method="post">
 
          <div class="veld-groep">
            <label for="email-in">E-mailadres</label>
            <div class="veld-wrap">
              <span class="veld-icoon">✉️</span>
              <input type="email" id="email-in" name="email" placeholder="uw@email.nl" required/>
            </div>
          </div>
 
          <div class="veld-groep">
            <label for="ww-in">Wachtwoord</label>
            <div class="veld-wrap">
              <span class="veld-icoon">🔒</span>
              <input type="password" id="ww-in" name="wachtwoord" placeholder="Uw wachtwoord" required/>
            </div>
          </div>
 
          <div class="extra-opties">
            <label class="checkbox-label">
              <input type="checkbox" name="onthoud"/>
              <span class="checkbox-vak"></span>
              Onthoud mij
            </label>
            <a href="#" class="vergeten-link">Wachtwoord vergeten?</a>
          </div>
 
          <button type="submit" class="login-knop">Inloggen →</button>
        </form>
 
        <div class="social-verdeler"><span>of ga verder met</span></div>
 
        <div class="social-rij">
          <a href="#" class="social-btn google"><strong>G</strong> Google</a>
          <a href="#" class="social-btn facebook"><strong>f</strong> Facebook</a>
        </div>
      </div>
 
      <!-- ── REGISTREREN ── -->
      <div class="tab-paneel" id="paneel-reg">
        <div class="form-kop">
          <h2>Account aanmaken</h2>
          <p>Word lid van de La Fiamma familie</p>
        </div>
 
        <form action="#" method="post">
 
          <div class="twee-kolommen">
            <div class="veld-groep">
              <label for="voornaam">Voornaam</label>
              <div class="veld-wrap">
                <span class="veld-icoon">👤</span>
                <input type="text" id="voornaam" name="voornaam" placeholder="Jan" required/>
              </div>
            </div>
            <div class="veld-groep">
              <label for="achternaam">Achternaam</label>
              <div class="veld-wrap">
                <span class="veld-icoon">👤</span>
                <input type="text" id="achternaam" name="achternaam" placeholder="De Vries" required/>
              </div>
            </div>
          </div>
 
          <div class="veld-groep">
            <label for="email-reg">E-mailadres</label>
            <div class="veld-wrap">
              <span class="veld-icoon">✉️</span>
              <input type="email" id="email-reg" name="email" placeholder="uw@email.nl" required/>
            </div>
          </div>
 
          <div class="veld-groep">
            <label for="tel-reg">Telefoonnummer</label>
            <div class="veld-wrap">
              <span class="veld-icoon">📞</span>
              <input type="tel" id="tel-reg" name="telefoon" placeholder="06 – 12 34 56 78"/>
            </div>
          </div>
 
          <div class="veld-groep">
            <label for="ww-reg">Wachtwoord</label>
            <div class="veld-wrap">
              <span class="veld-icoon">🔒</span>
              <input type="password" id="ww-reg" name="wachtwoord" placeholder="Minimaal 8 tekens" required/>
            </div>
          </div>
 
          <div class="veld-groep">
            <label for="ww-herhaal">Wachtwoord herhalen</label>
            <div class="veld-wrap">
              <span class="veld-icoon">🔒</span>
              <input type="password" id="ww-herhaal" name="wachtwoord2" placeholder="Herhaal uw wachtwoord" required/>
            </div>
          </div>
 
          <label class="checkbox-label akkoord-label">
            <input type="checkbox" name="akkoord" required/>
            <span class="checkbox-vak"></span>
            Ik ga akkoord met de <a href="#">algemene voorwaarden</a>
          </label>
 
          <button type="submit" class="login-knop">Account aanmaken →</button>
        </form>
      </div>
 
    </div><!-- /formulier-kaart -->
  </div><!-- /login-rechts -->
 
</div><!-- /login-pagina-wrap -->

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
      <p>✉️ info@DaCintarinni.nl</p>
    </div>
  </div>
  <div class="footer-bottom">© 2026 Da Cintarinni – Alle rechten voorbehouden.</div>
</footer>
 
</body>
</html>