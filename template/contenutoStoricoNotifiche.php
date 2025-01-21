<section>
    <?php if($templateParams["notifiche"])?>
    <?php foreach($templateParams["notifiche"] as $notifica): ?>
        <table>
        <tr>
        <th><?php echo $notifica["IdNotifica"];?></th>
        
        <th><?php echo $notifica["TipoNotifica"]; ?> </th>
        </tr><tr>
        <td colspan="2"><?php echo $notifica["TestoNotifica"]; ?> </td>
        </tr>
        </table>
    <?php endforeach ?>   
</section>