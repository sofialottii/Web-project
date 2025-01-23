<!--immagina tutto nel main-->
<img src="../utils/img/frutta.jpg" alt="background" />
<form action="" method="POST">
    <label for="acquista" hidden></label><input type="submit" name="acquista" id="acquista" value="COMPRA ORA" />
</form>

<article class="text-center">
    <h2>CHI SIAMO?</h2>
    <p>
        Benvenuti all'Emporio di Grimilde, il miglior servizio che vi permette di gustare dell'ottima frutta ricevendola
        direttamente a casa vostra! Il nostro emporio è unico sulla scena degli E-Commerce e rappresenta un <strong>marchio di qualit&agrave 
        certificata</strong> grazie ai nostri prodotti biologici e coltivati in modo 100% naturale. <br>
        L'Emporio di Grimilde vi permette di gustare frutta sempre fresca grazie al suo servizio di consegna di meno di 24 ore. Com'&egrave
        possibile che sia cos&igrave veloce vi chiederete, la risposta &egrave semplicissima: abbiamo<strong> pi&ugrave di 100 fornitori</strong> 
        sparsi in tutto il paese, su cui effettuiamo un rigorosissimo controllo di qualit&agrave (per verificare che sia all'altezza degli 
        standard di Grimilde).<br>
        Il nostro emporio vi permette di scegliere tra un'ampia gamma di frutta deliziosa e appena raccolta dal nostro fornitore pi&ugrave 
        vicino a casa vostra, questo ci permette anche di andare a ridurre al minimo le emissioni e i danni all'ambiente!<br>
        Acquista sul nostro sitto per fare un ottima, gustosissima e super salutare merenda. <strong>Provate la  frutta di Grimilde per
        essere anche voi, i pi&ugrave belli del reame!</strong>
        <!--L'emporio di Grimilde è un servizio di <strong>spesa online</strong> su cui puoi acquistare
        prodotti sostenibili e di qualità e riceverli a casa in <strong>meno di 48h.</strong><br>
        Portiamo sulla tua tavola solo prodotti autentici e genuini,
        di cui sosteniamo e valorizziamo la tracciabilità-->
    </p>
</article>

<article>
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
        <label for="creaRecensione" hidden></label><input type="submit" name="creaRecensione" id="creaRecensione" value="Lascia una recensione" />
    </form>
</article>
