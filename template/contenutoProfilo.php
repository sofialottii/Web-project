<section>
    <h2>PROFILO</h2>
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
    <!--<form action="" method="POST">-->
        <div class="text-center">
        <ul>
            <li><a href="index.php">Torna alla home</a></li>
            <li><a href="modificaCampi.php">Modifica campi</a> </li>
            <li><a href="modificaPassword.php">Modifica password</a></li>
        </ul>
        </div>
    <!--</form>-->

    <img src="../utils/img/Grimilde-CestoMele.png" alt="" class="text-center">
</section>