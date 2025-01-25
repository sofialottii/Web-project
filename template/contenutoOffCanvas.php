<label for="first" hidden></label><button class="btn btn-light d-lg-none" id="first" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
  <img src="../utils/img/icons/menu.png" alt="menu" />
</button>
    
    <!--<div class="alert alert-info d-none d-lg-block">NAV PER QUANDO LO SCHERMO è DESKTOP</div>-->
    
    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
      <header class="offcanvas-header">
        <div class="container">
            <div class="row">
                <div class="col-3"><img src="<?php echo getImmagineProfilo($sessoUtente); ?>" alt="icona profilo"/> </div>
                <div class="col-6"><h2 class="offcanvas-title" id="offcanvasResponsiveLabel"><?php echo $utente; ?></h2></div>
                <div class="col-3"><label for="btnOffCanvas" hidden></label><button type="button" class="btn-close" id="btnOffCanvas" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button></div>
            </div>
        </div>
      </header>    
      <hr class="offcanvas-header">
      <div class="offcanvas-body">
        <nav>
            <ul>
                <li><a href="profilo.php">Account</a></li>
                <?php if(!isset($_SESSION["E_mail"]) || !$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
                <li><a href="fruttaPreferita.php">Frutta Preferita</a></li>
                <li><a href="carrello.php">Carrello</a></li>
                <li><a href="ordini.php">I miei ordini</a></li>
                <?php else: ?>
                <li><a href="acquisto.php">Gestisci Prodotti</a></li>
                <li><a href="ordini.php">Visualizza ordini</a></li>
                <?php endif; ?>
                <li><a href="storicoNotifiche.php">Notifiche  <?php if(isset($_SESSION["E_mail"])): ?><span class="badge text-bg-secondary">
                <?php if(!$dbh->isUtenteAdmin($_SESSION["E_mail"])) {echo $dbh->countNotificheDaLeggere();}
                else{echo $dbh->countNotificheAdminDaLeggere();} ?></span><?php endif; ?>
                </a></li>
            </ul>
        </nav>

        <form action="" method="POST">
        <?php if(isset($_SESSION["E_mail"])): ?>
          <label for="logoutButton" hidden></label><input type="submit" id="logoutButton" name="logout" value="Logout" />
        <?php else: ?>
          <ul>
            <li><label for="regButton" hidden></label><input type="submit" id="regButton" name="registrati" value="Registrati" /></li>
            <li><label for="loginButton" hidden></label><input type="submit" id="loginButton" name="login" value="Accedi" /></li>
            <li><label for="adminButton" hidden></label><input type="submit" id="adminButton" name="loginAdmin" value="Area Riservata"/></li>
            <li><label for="homeButton" hidden></label><input type="submit" id="homeButton" name="notLogin" value="Home" hidden/></li>
          </ul>
        <?php endif; ?>
        
        </form>
        
      </div>
    </div>