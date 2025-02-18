<div class="container">
    <form action="" method="POST" class="text-center my-4">
        <label for="svuotaCarrello" hidden></label><input type="submit" name="svuotaCarrello" id="svuotaCarrello" value="Svuota carrello" />
    </form>
    <?php if(isset($templateParams["errore"])): ?>
        <div class="alert alert-danger text-center align-items-center mx-5 mt-3" role="alert">
            <p class="h4"><?php echo $templateParams["errore"]; ?></p>
        </div>
    <?php endif; ?>

    <div class="card">
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
                        <?php foreach($templateParams["carrello"] as $prodotto): ?>
                            <tr>
                                <td>
                                    <a href="prodotto.php?IDProdotto=<?php echo $prodotto["IDProdotto"]; ?>">
                                        <img src="<?php echo $prodotto['ImmagineProdotto']; ?>" alt="immagine <?php echo $prodotto['NomeProdotto']; ?>"  />
                                    </a>
                                </td>
                                <td> <!-- nome e pulsante rimuovi -->
                                    <a href="prodotto.php?IDProdotto=<?php echo $prodotto["IDProdotto"]; ?>" class="text-dark" ><?php echo $prodotto["NomeProdotto"]; ?></a>
                                    <form action="" method="POST">
                                        <label for="idProd" hidden></label><input type="hidden" id="idProd" name="IDProdotto_<?php echo $prodotto["IDProdotto"]; ?>" value="<?php echo $prodotto["IDProdotto"]; ?>" /> <!--lo uso per aggiornare le query del carrello -->
                                        <label for="idProd2" hidden></label><input type="hidden" id="idProd2" name="IDProdotto" value="<?php echo $prodotto["IDProdotto"]; ?>" />
                                        <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi" />
                                    </form>
                                </td>
                                <td>€<?php echo $prodotto["PrezzoProdotto"]; ?></td>
                                <td>
                                    <form action="" method="POST">
                                        <!-- le due label seguenti sono hidden -->
                                        <label for="AidProd" hidden></label><input type="hidden" id="AidProd" name="IDProdotto_<?php echo $prodotto["IDProdotto"]; ?>" value="<?php echo $prodotto["IDProdotto"]; ?>" /> <!--lo uso per aggiornare le query del carrello -->
                                        <label for="AidProd2" hidden></label><input type="hidden" id="AidProd2" name="IDProdotto" value="<?php echo $prodotto["IDProdotto"]; ?>" />
                                        <!--le due label sono: nuova quantità del carrello e pulsante aggiorna -->
                                        <label for="quantitaCarr" hidden></label><input type="number" autocomplete="off" name="quantita_<?php echo $prodotto["IDProdotto"]; ?>" id="quantitaCarr" 
                                        class="col-md-4 col-8" min="1" max="<?php echo $dbh->getProdotto($prodotto["IDProdotto"])[0]["QuantitaDisponibile"]+$prodotto["QuantitaInCarrello"]; ?>" value=<?php echo $prodotto["QuantitaInCarrello"]; ?> />
                                        <div class="w-100"></div> <!-- per fare la newline -->
                                        <label for="aggiorna" hidden></label><input type="submit" id="aggiorna" name="aggiorna" value="Aggiorna" />
                                    </form>
                                </td>
                                <td>€<?php echo $prodotto["PrezzoProdotto"]*$prodotto["QuantitaInCarrello"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<p class="fs-2 text-uppercase text-center" >Totale: €<?php echo prezzoTotale($templateParams["carrello"]); ?></p>

<p class="text-center"><a href="acquisto.php">Torna agli acquisti</a></p>
<form action="" method="POST" class="text-center">
    <label for="vaiInCassa" hidden></label><input type="submit" name="vaiInCassa" id="vaiInCassa" value="Vai alla cassa" />
</form>
</div>

