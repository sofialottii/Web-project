<form action="#" method="POST">
    <h2>ME LA LASCI UNA RECENSIONE?</h2>
    <ul>
        <li>
            <label for="testoRecensione">Testo recensione</label><textarea id="testoRecensione" name="testoRecensione"></textarea>
        </li>
        <li>
            <label for="numeroStelle">Numero stelle</label><input type="number" id="numeroStelle" name="numeroStelle" required />
            <div class="rating">
                <span data-value="5"></span>
                <span data-value="4.5"></span>
                <span data-value="4"></span>
                <span data-value="3.5"></span>
                <span data-value="3"></span>
                <span data-value="2.5"></span>
                <span data-value="2"></span>
                <span data-value="1.5"></span>
                <span data-value="1"></span>
                <span data-value="0.5"></span>
            </div>
<input type="hidden" name="rating" id="rating-value" value="0" />
<p id="rating-text">Valutazione: Nessuna</p>

        </li>
        <li>
            <input type="submit" name="creaRecensione" value="Invia recensione" />
        </li>
        <li>
            <a href="index.php">Indietro</a>
        </li>
    </ul>
</form>