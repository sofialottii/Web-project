<section>
<form action="#" method="POST">
    <h2>MODIFICA IL TUO PROFILO</h2>
    <ul>
        <li>
            <label for="nome">Nome</label><input type="text" id="nome" name="nome" />
        </li>
        <li>
            <label for="cognome">Cognome</label><input type="text" id="cognome" name="cognome" />
        </li>       
        <li>
            <label for="dataNascita">Data di nascita</label><input type="date" id="dataNascita" name="dataNascita" />
        </li>
        <li>
            <label for="sesso">Sesso</label><select name="sesso" id="sesso">
                <option value="Nessuno" selected="selected" hidden>Scegli sesso</option>
                <option value="Uomo">Uomo</option>
                <option value="Donna">Donna</option>
                <option value="Altro">Altro</option>
            </select>
        </li>
        <li>
            <input type="submit" name="Salva" value="Salva Modifiche" />
        </li>
    </ul>
</form>
<a href="profilo.php">Ho cambiato idea </a>
<img src="../utils/img/Grimilde-CestoMele.png" alt="Grimilde con un cesto di mele">
</section>