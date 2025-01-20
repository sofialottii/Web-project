<form action="#" method="POST">
    <h2>ME LA LASCI UNA RECENSIONE?</h2>
    <ul>
        <li>
            <label for="testoRecensione">Testo recensione</label><textarea id="testoRecensione" name="testoRecensione"></textarea>
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

            <script>
                let stars = document.querySelectorAll('input[name="rating"]'); // prende tutti gli input con name="rating"
                let output = document.getElementById("output"); // voto: x/5

                // aggiungo eventListener a ogni input
                stars.forEach(star => {
                    star.addEventListener("change", function () {
                        let rating = this.value; // valore input selezionato

                        output.innerText = "Voto: " + rating + "/5"; // aggiorno il testo
                        updateStars(rating); // aggiorno il colore delle stelle
                    });
                });

                function updateStars(rating) {
                    stars.forEach(star => {
                        let starLabel = document.querySelector(`label[for="${star.id}"]`);
                        if (star.value <= rating) { // se il valore dell'input è minore o uguale al rating
                            starLabel.style.color = "gold";
                        } else {
                            starLabel.style.color = "gray";
                        }
                    });
                }
            </script>

        </li>
        <li>
            <input type="submit" name="creaRecensione" value="Invia recensione" />
        </li>
        <li>
            <a href="index.php">Indietro</a>
        </li>
    </ul>
</form>

