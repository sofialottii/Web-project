<div class="row justify-content-center m-0">
<section class="temporaneo mt-5 col-10 col-md-8 col-lg-5 pb-0">
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
            <li class="mb-3">
                <a href="index.php" class="btn btn-primary w-75">Torna alla home</a>
            </li>
            <li class="mb-3">
                <a href="modificaCampi.php" class="btn btn-primary w-75" >Modifica campi</a>
            </li>
            <li class="mb-3">
                <a href="modificaPassword.php" class="btn btn-primary w-75">Modifica password</a>
            </li>
        </ul>
        </div>
    <!--</form>-->

    <?php if (isset($templateParams["emily"])): ?>
    <img src="../utils/img/emily.jpg" alt="Foto di Emily" class="text-center">
<?php endif; ?>

    <img src="../utils/img/Grimilde-CestoMele.png" alt="" class="text-center">
</section>
    </div>
