<form action="#" method="POST">
    <h2>ME LA LASCI UNA RECENSIONE?</h2>
    <ul>
        <li>
            <label for="testoRecensione">Testo recensione</label><textarea id="testoRecensione" name="testoRecensione"></textarea>
        </li>
        <li>
            <label for="numeroStelle">Numero stelle</label><input type="number" id="numeroStelle" name="numeroStelle" required />
            
            <div class="card">
                <span onclick="gfg(1)"
                    class="star">★
                </span>
                <span onclick="gfg(2)"
                    class="star">★
                </span>
                <span onclick="gfg(3)"
                    class="star">★
                </span>
                <span onclick="gfg(4)"
                    class="star">★
                </span>
                <span onclick="gfg(5)"
                    class="star">★
                </span>
                <p id="output">
                    voto: 0/5
                </p>
            </div>
            <script src="script.js"></script>

        </li>
        <li>
            <input type="submit" name="creaRecensione" value="Invia recensione" />
        </li>
        <li>
            <a href="index.php">Indietro</a>
        </li>
    </ul>
</form>