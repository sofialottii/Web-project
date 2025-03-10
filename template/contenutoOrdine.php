
<!--article class="container mt-4 col-10"-->
<div class="container mt-4">
    
            <!-- Informazioni prodotto -->
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Immagine</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col">Quantità</th>
                                <th scope="col">Totale</th>
                            </tr>
                        </thead>
                        <tbody class="text-center align-self-center">
                            <?php foreach($templateParams["contenuto"] as $elemento):?>
                                <tr>
                                    <td>
                                    <a href="prodotto.php?IDProdotto=<?php echo $elemento["IDProdotto"]; ?>">
                                        <img src="<?php echo $elemento['ImmagineProdotto'];?>" alt="immagine <?php echo $elemento['NomeProdotto'];?>" />
                                    </a>
                                    </td>
                                    <td>
                                    <a href="prodotto.php?IDProdotto=<?php echo $elemento["IDProdotto"]; ?>" class="text-dark" >
                                        <?php echo $elemento["NomeProdotto"]; ?>
                                    </a>
                                    </td>
                                    <td>

                                        <p>€<?php echo $elemento["PrezzoProdotto"];?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $elemento["QuantitaOrdinata"];?></p>
                                    </td>
                                    <td>
                                        <p>€<?php echo $elemento["QuantitaOrdinata"]*$elemento["PrezzoProdotto"];?></p>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
    </div>
    <p class="text-center"><a href="acquisto.php">Indietro</a></p>
    <p class="fs-2 text-uppercase text-center" >Totale: €<?php  ?></p>

    <!--/article-->
