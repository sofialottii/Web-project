<section>
    <h2> PROFILO</h2>
    <table>
    <?php foreach($templateParams["profilo"] as $info):?>
        <tr>
            <td>Nome</td>
            <td><?php echo $info["Nome"];?></td>
        </tr><tr>
            <td>Cognome </td>
            <td><?php echo $info["Cognome"];?></td>
        </tr><tr>
            <td>E-Mail </td>
            <td><?php echo $info["E_mail"];?></td>
        </tr><tr>
            <td>Data di Nascita </td>
            <td><?php echo $info["DataNascita"];?></td>
        </tr>
    <?php endforeach?>
    </table>
    <form action="">
        <ul>
            <li><a href="modificaCampi.php"> <input type="button" value="Modifica Campi" /></a> </li>
            <li><a href="modificaPassword.php"> <input type="button" value="Modifica Password" /></a></li>
            <!--<li><a href="https://studenti.unibo.it/sol/studenti/nuoveRichieste.htm?execution=e2s1"> <input
            type="button" value="Rinuncia Agli Studi" /></a> </li>-->
        </ul>
    </form>

    <img src="../utils/img/Grimilde-CestoMele.png" alt="Grimilde con un cesto di mele">
</section>