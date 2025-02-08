<!-- Bottone per il menu offcanvas (visibile solo su schermi piccoli) -->
<label for="first" hidden></label>
<button class="btn btn-light d-lg-none" id="first" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
  <img src="../utils/img/icons/menu.png" alt="menu" />
</button>

<!-- NAVIGATION PER SCHERMI GRANDI -->
<nav class="d-none d-lg-flex justify-content-around align-items-center bg-light p-3 col-12">
    <a href="profilo.php">Account</a>
    <?php if(!isset($_SESSION["E_mail"]) || !$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
        <a href="fruttaPreferita.php">Frutta Preferita</a>
        <a href="carrello.php">Carrello</a>
        <a href="ordini.php">I miei ordini</a>
    <?php else: ?>
        <a href="acquisto.php">Gestisci Prodotti</a>
        <a href="ordini.php">Visualizza ordini</a>
    <?php endif; ?>
    <a href="storicoNotifiche.php">Notifiche 
        <?php if(isset($_SESSION["E_mail"])): ?>
            <span class="badge text-bg-secondary">
                <?php echo !$dbh->isUtenteAdmin($_SESSION["E_mail"]) ? $dbh->countNotificheDaLeggere() : $dbh->countNotificheAdminDaLeggere(); ?>
            </span>
        <?php endif; ?>
    </a>

    <form action="" method="POST">
        <?php if(isset($_SESSION["E_mail"])): ?>
            <label for="logoutButton" hidden></label>
            <input type="submit" id="logoutButton" name="logout" value="Logout" />
        <?php else: ?>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../utils/img/icons/imgAccesso.png" alt="icona accesso" />
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="register.php">Registrati</a></li>
                    <li><a class="dropdown-item" href="login.php">Accedi</a></li>
                    <li><a class="dropdown-item" href="areaRiservata.php">Area Riservata</a></li>
                </ul>
            </div>
            <!--
            <label for="regButton" hidden></label>
            <input type="submit" id="regButton" name="registrati" value="Registrati" class="btn btn-outline-primary me-2" />
            <label for="loginButton" hidden></label>
            <input type="submit" id="loginButton" name="login" value="Accedi" class="btn btn-outline-success me-2" />
            <label for="adminButton" hidden></label>
            <input type="submit" id="adminButton" name="loginAdmin" value="Area Riservata" class="btn btn-outline-warning" />
            -->
        <?php endif; ?>
    </form>
</nav>

<!-- Offcanvas per schermi piccoli -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
    <header class="offcanvas-header">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo getImmagineProfilo($sessoUtente); ?>" alt="icona profilo"/> 
                </div>
                <div class="col-6">
                    <h2 class="offcanvas-title" id="offcanvasResponsiveLabel"><?php echo $utente; ?></h2>
                </div>
                <div class="col-3">
                    <label for="btnOffCanvas" hidden></label>
                    <button type="button" class="btn-close" id="btnOffCanvas" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </header>    
    <hr class="offcanvas-header">
    <div class="offcanvas-body">
        <nav>
            <ul class="list-unstyled">
                <li><a href="profilo.php">Account</a></li>
                <?php if(!isset($_SESSION["E_mail"]) || !$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
                    <li><a href="fruttaPreferita.php">Frutta Preferita</a></li>
                    <li><a href="carrello.php">Carrello</a></li>
                    <li><a href="ordini.php">I miei ordini</a></li>
                <?php else: ?>
                    <li><a href="acquisto.php">Gestisci Prodotti</a></li>
                    <li><a href="ordini.php">Visualizza ordini</a></li>
                <?php endif; ?>
                <li>
                    <a href="storicoNotifiche.php">Notifiche  
                        <?php if(isset($_SESSION["E_mail"])): ?>
                            <span class="badge text-bg-secondary">
                                <?php echo !$dbh->isUtenteAdmin($_SESSION["E_mail"]) ? $dbh->countNotificheDaLeggere() : $dbh->countNotificheAdminDaLeggere(); ?>
                            </span>
                        <?php endif; ?>
                    </a>
                </li>
            </ul>
        </nav>

        <form action="" method="POST">
            <?php if(isset($_SESSION["E_mail"])): ?>
                <label for="logoutButton" hidden></label>
                <input type="submit" id="logoutButton" name="logout" value="Logout" class="btn btn-outline-danger w-100" />
            <?php else: ?>
                <ul class="list-unstyled">
                    <li>
                        <label for="regButton" hidden></label>
                        <input type="submit" id="regButton" name="registrati" value="Registrati" class="btn btn-outline-primary w-100 mb-2" />
                    </li>
                    <li>
                        <label for="loginButton" hidden></label>
                        <input type="submit" id="loginButton" name="login" value="Accedi" class="btn btn-outline-success w-100 mb-2" />
                    </li>
                    <li>
                        <label for="adminButton" hidden></label>
                        <input type="submit" id="adminButton" name="loginAdmin" value="Area Riservata" class="btn btn-outline-warning w-100" />
                    </li>
                </ul>
            <?php endif; ?>
        </form>
    </div>
</div>
