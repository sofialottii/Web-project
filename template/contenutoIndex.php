<!--immagina tutto nel main-->
<img src="../utils/img/frutta.jpg" alt="background" />

<form action="" method="POST">
    <a href="acquisto.php"><input type="submit" name="acquista" value="COMPRA ORA" /></a>
</form>

<article>
    <h2>CHI SIAMO?</h2>
    <p>
        L'emporio di Grimilde è un servizio di <em>spesa online</em> su cui puoi acquistare
        prodotti sostenibili e di qualità e riceverli a casa in <em>meno di 48h.</em><br>
        Portiamo sulla tua tavola solo prodotti autentici e genuini,
        di cui sosteniamo e valorizziamo la tracciabilità
    </p>
</article>

<article>
    <h2>DICONO DI NOI</h2>
    <?php foreach($templateParams["recensioni"] as $recensione): ?>
    <article>
        <header>    <!-- questo per i contenuti delle liste da db: il foreach è per iterare la lista. templateParams contiene il risultato delle
            query. quindi per ogni recensione (che è il nome della tabella, quindi per ogni riga della tabella) prende nome, numerostelle...gitgoit -->
            <p><?php echo $recensione["Nome"]; ?> <?php echo $recensione["Cognome"]; ?></p>
            <p><?php echo $recensione["NumeroStelle"]; ?></p>
        </header>
        <section>
            <p><?php echo $recensione["TestoRecensione"]; ?></p>
        </section>
        <footer>
            <p><?php echo $recensione["DataRecensione"]; ?></p>
        </footer>
    </article>
    <?php endforeach; ?>
    <form action="" method="POST">
        <input type="submit" name="creaRecensione" value="Lascia una recensione" />
    </form>
</article>
