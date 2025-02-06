

    <!-- immagine -->
    <div class="row justify-content-center mt-md-4 mt-lg-5">
        <div class="col-md-6 col-lg-7 text-center p-0">
            <img src="../utils/img/fruttaa.jpg" class="img-fluid rounded shadow" alt="Frutta" />
        </div>
    </div>

    <!-- bottone -->
    <div class="row justify-content-center mt-3">
        <div class="col-auto">
            <form action="" method="POST">
                <input type="submit" class="px-4" name="acquista" id="acquista"
                    value="<?php echo (!isset($_SESSION['E_mail']) || !$dbh->isUtenteAdmin($_SESSION['E_mail'])) ? 'COMPRA ORA' : 'GESTISCI PRODOTTI'; ?>" />
            </form>
        </div>
    </div>

    
    <div class="row justify-content-evenly mt-5">
        <article class="col-10 col-md-5 text-center temporaneo">
            <h2 class="fw-bold mt-2 mb-3">CHI SIAMO?</h2>
            <p>
                Benvenuti all'Emporio di Grimilde, il miglior servizio che vi permette di gustare dell'ottima frutta ricevendola
                direttamente a casa vostra! Il nostro emporio è unico sulla scena degli e-commerce e rappresenta un 
                <strong>marchio di qualità certificata</strong> grazie ai nostri prodotti biologici e coltivati in modo 100% naturale.
                <br><br>
                Con più di 100 fornitori sparsi nel paese, garantiamo una consegna rapidissima in meno di 24 ore, riducendo al minimo 
                le emissioni e i danni all'ambiente. Scegli la frutta di Grimilde per una merenda sana e gustosa!  
                <strong>Provate la nostra frutta per essere anche voi, i più belli del reame!</strong>
            </p>
        </article>

        <article class="col-10 col-md-5 mt-3 mt-md-0 temporaneo">
            <h2 class="text-center mt-2 mb-3 fw-bold">DICONO DI NOI</h2>
            <?php foreach($templateParams["recensioni"] as $recensione): ?>
            <div class="border rounded p-3 mb-3 shadow-sm bg-light">
                <header class="d-flex justify-content-between">
                    <p class="fw-bold"><?php echo $recensione["Nome"] . " " . $recensione["Cognome"]; ?></p>
                    <p>
                        <?php for ($i = 1; $i <= 5; $i++) {
                            echo ($i <= $recensione["NumeroStelle"]) ? '<span class="text-warning">★</span>' : '<span class="text-secondary">★</span>';
                        } ?>
                    </p>
                </header>
                <section>
                    <p><?php echo $recensione["TestoRecensione"]; ?></p>
                </section>
                <footer class="text-end text-muted">
                    <small><?php echo $recensione["DataRecensione"]; ?></small>
                </footer>
            </div>
            <?php endforeach; ?>

            <!-- Pulsante Recensioni -->
            <form action="" method="POST" class="text-center mt-3">
                <input type="submit" class="btn btn-primary" name="<?php echo (!isset($_SESSION["E_mail"]) || !$dbh->isUtenteAdmin($_SESSION["E_mail"])) ? 'creaRecensione' : 'vediRecensioni'; ?>"
                    id="<?php echo (!isset($_SESSION["E_mail"]) || !$dbh->isUtenteAdmin($_SESSION["E_mail"])) ? 'creaRecensione' : 'vediRecensioni'; ?>"
                    value="<?php echo (!isset($_SESSION["E_mail"]) || !$dbh->isUtenteAdmin($_SESSION["E_mail"])) ? 'Lascia una recensione' : 'Vedi tutte le recensioni'; ?>" />
            </form>
        </article>
    </div>


