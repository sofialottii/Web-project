<!--immagina tutto nel main-->
<div class="container col-md-3">
<img src="../utils/img/frutta.jpg" class="offset-md-12" alt="background" />
</div>
<form action="" method="POST">
    <label for="acquista" hidden></label><input type="submit" name="acquista" id="acquista" value="<?php if(!isset($_SESSION["E_mail"]) || !$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>COMPRA ORA<?php else: ?>GESTISCI PRODOTTI<?php endif; ?>" />
</form>


<div class="container">
    <div class="row justify-content-around">
    <article class="text-center temporaneo col-10 col-md-5 mb-5">
        <h2>CHI SIAMO?</h2>
        <p>
            Benvenuti all'Emporio di Grimilde, il miglior servizio che vi permette di gustare dell'ottima frutta ricevendola
            direttamente a casa vostra! Il nostro emporio è unico sulla scena degli E-Commerce e rappresenta un <strong>marchio di qualit&agrave 
            certificata</strong> grazie ai nostri prodotti biologici e coltivati in modo 100% naturale. <br>
            L'Emporio di Grimilde vi permette di gustare frutta sempre fresca grazie al suo servizio di consegna di meno di 24 ore. Com'&egrave
            possibile che sia cos&igrave veloce vi chiederete, la risposta &egrave semplicissima: abbiamo<strong> pi&ugrave di 100 fornitori</strong> 
            sparsi in tutto il paese, su cui effettuiamo un rigorosissimo controllo di qualit&agrave (per verificare che sia all'altezza degli 
            standard di Grimilde).<br>
            Il nostro emporio vi permette di scegliere tra un'ampia gamma di frutta deliziosa e <strong>appena raccolta</strong> dal nostro fornitore pi&ugrave 
            vicino a casa vostra, questo ci permette anche di andare a ridurre al minimo le emissioni e i danni all'ambiente!<br>
            Acquista sul nostro sitto per fare un ottima, gustosissima e super salutare merenda. <strong>Provate la  frutta di Grimilde per
            essere anche voi, i pi&ugrave belli del reame!</strong>
        </p>
    </article>

    <article class="temporaneo col-10 col-md-5 mb-5">
        <h2>DICONO DI NOI</h2>
        <?php foreach($templateParams["recensioni"] as $recensione): ?>
        <article>
            <header>    <!-- questo per i contenuti delle liste da db: il foreach è per iterare la lista. templateParams contiene il risultato delle
                query. quindi per ogni recensione (che è il nome della tabella, quindi per ogni riga della tabella) prende nome, numerostelle...gitgoit -->
                <p><?php echo $recensione["Nome"]; ?> <?php echo $recensione["Cognome"]; ?></p>
                <p><?php for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $recensione["NumeroStelle"]) {
                        echo '<span data-filled="true">★</span>';
                    } else {
                        echo '<span data-filled="false">★</span>';
                    }
                } ?>
                </p>
            </header>
            <section>
                <p><?php echo $recensione["TestoRecensione"]; ?></p>
            </section>
            <footer>
                <p><?php echo $recensione["DataRecensione"]; ?></p>
            </footer>
        </article>
        <?php endforeach; ?>
        <form action="" method="POST" class="text-end">
            <?php if(!isset($_SESSION["E_mail"]) || !$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
            <label for="creaRecensione" hidden></label><input type="submit" name="creaRecensione" id="creaRecensione" value="Lascia una recensione" />
            <?php else: ?>
            <label for="vediRecensioni" hidden></label><input type="submit" name="vediRecensioni" id="vediRecensioni" value="Vedi tutte le recensioni" />
            <?php endif; ?>
        </form>
    </article>
    </div>
</div>