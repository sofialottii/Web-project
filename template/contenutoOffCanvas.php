<button class="btn btn-light d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
  <img src="../utils/img/icons/menu.png" alt="menu" />
</button>
    
    <!--<div class="alert alert-info d-none d-lg-block">NAV PER QUANDO LO SCHERMO è DESKTOP</div>-->
    
    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
      <header class="offcanvas-header">
        <div class="container">
            <div class="row">
                <div class="col-3"><img src="<?php echo getImmagineProfilo($sessoUtente); ?>" alt="icona profilo"/> </div>
                <div class="col-6"><h2 class="offcanvas-title" id="offcanvasResponsiveLabel"><?php echo $utente; ?></h2></div>
                <div class="col-3"><button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button></div>
            </div>
        </div>
      </header>    
      <hr class="offcanvas-header">
      <div class="offcanvas-body">
        <section>
            <ul>
                <li><a href="profilo.php">Account</a></li>
                <li><a href="fruttaPreferita.php">Frutta Preferita</a></li>
                <li><a href="carrello.php">Carrello</a></li>
                <li><a href="carrello.php">I miei ordini</a></li>
                <li><a href="carrello.php">Notifiche</a></li>
            </ul>
        </section>
        <?php if(isset($_SESSION["E_mail"])): ?>
        <form action="" method="POST">
          <input type="submit" name="logout" value="Logout" />
        </form>
        <?php endif; ?>
      </div>
    </div>