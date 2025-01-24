<form action="#" method="POST">
    <h2>ME LA LASCI UNA RECENSIONE?</h2>
    <?php if(isset($templateParams["erroreRecensione"])): ?>
    <p><?php echo $templateParams["erroreRecensione"]; ?></p>
    <?php endif; ?>
    <ul>
        <li>
            <label for="testoRecensione">Testo recensione</label><textarea id="testoRecensione" name="testoRecensione" autocomplete="off"></textarea>
        </li>
        <li>
            <label for="numeroStelle">Seleziona stelle:</label>
            <div>
                <input type="radio" id="star1" name="rating" value="1" hidden />
                <label for="star1" class="star">★</label>

                <input type="radio" id="star2" name="rating" value="2" hidden />
                <label for="star2" class="star">★</label>

                <input type="radio" id="star3" name="rating" value="3" hidden />
                <label for="star3" class="star">★</label>

                <input type="radio" id="star4" name="rating" value="4" hidden />
                <label for="star4" class="star">★</label>

                <input type="radio" id="star5" name="rating" value="5" hidden />
                <label for="star5" class="star">★</label>
            </div>
            <p id="output">Voto: 0/5</p>
            <script src="../js/recensione.js"></script>

        </li>
        <li>
            <label for="creaRecensione" hidden></label><input type="submit" id="creaRecensione" name="creaRecensione" value="Pubblica" />
        </li>
        <li>
            <a href="index.php">Indietro</a>
        </li>
    </ul>
</form>

