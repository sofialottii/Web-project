<!--immagina tutto nel main-->
<img src="../utils/img/frutta.jpg" alt="background" />

<form action="">
    <input type="button" value="COMPRA ORA" />
</form>

<article>
    <h2>CHI SIAMO?</h2>
    <p>
        L'emporio di Grimilde è un servizio di <b>spesa online</b> su cui puoi acquistare
        prodotti sostenibili e di qualità e riceverli a casa in <b>meno di 48h.</b><br>
        Portiamo sulla tua tavola solo prodotti autentici e genuini,
        di cui sosteniamo e valorizziamo la tracciabilità
    </p>
</article>

<article>
    <h2>DICONO DI NOI</h2>
    <?php foreach($templateParams["recensioni"] as $recensione): ?>
    <article>
        <header>    
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
    <form action="">
        <input type="button" value="Lascia una recensione" />
    </form>
</article>
