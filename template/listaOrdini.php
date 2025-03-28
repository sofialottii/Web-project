<div class="container mt-4">
    <?php if(isset($templateParams["errore"])): ?>
        <div class="alert alert-primary text-center mx-5" role="alert">
            <h2><?php echo $templateParams["errore"]; ?></h2>
        </div>
        <?php else : ?>
            <h2 class="text-center mt-3 mb-4">STORICO ORDINI</h2>
  
    <div class="card shadow-sm">
        <div class="card-body">
            <?php foreach($templateParams["ordini"] as $ordin): ?>
                <section class="p-3 border rounded shadow-sm mb-3 bg-light">
                    <form action="ordineSingolo.php" method="GET" class="d-flex flex-column">
                        <label for="IDOrdine" hidden></label><input type="hidden" id="IDOrdine" name="IdSingoloOrdine" value="<?php echo $ordin["IDOrdine"]; ?>" />
                        <label for="IDE_mail" hidden></label><input type="hidden" id="IDE_mail" name="mail" value="<?php echo $ordin["E_mail"]; ?>" />
                        
                        <!-- Layout Desktop -->
                        <div class="d-none d-md-flex justify-content-between align-items-center">
                            <small class="text-muted">#0<?php echo $ordin["IDOrdine"];?>
                                <?php if($dbh->isUtenteAdmin($_SESSION["E_mail"])): ?> - <?php echo $ordin["E_mail"]; ?> <?php endif;?></small>
                            <small class="text-muted"><?php echo $ordin["DataOra"]; ?></small>
                        </div>

                        <!-- Layout Mobile -->
                        <div class="d-md-none text-center">
                            <small class="text-muted">ORDINE: #0<?php echo $ordin["IDOrdine"];?>
                                <?php if($dbh->isUtenteAdmin($_SESSION["E_mail"])): ?> - <?php echo $ordin["E_mail"]; ?> <?php endif;?></small>
                            <div class="w-100"></div> <!-- per fare la newline -->
                            <small class="text-muted"><?php echo $ordin["DataOra"]; ?></small>
                        </div>
                        
                        <div class="d-flex justify-content-between mt-2">
                            <div class="d-block justify-content-between align-items-center mt-2">
                                <p class="mt-2 fw-bold h5">Importo: €<?php echo number_format($ordin["ImportoTotale"],2,'.',' '); ?></p>
                                <?php if(!$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
                                    <footer>
                                        <p><a href="tracciamentoOrdine.php?IDOrdine=<?php echo $ordin["IDOrdine"]; ?>">Traccia ordine</a></p>
                                    </footer>
                                <?php endif; ?>
                            </div>
                            <label for="aprii" hidden></label><button type="submit" class="btn btn-primary btn-sm" id="aprii">></button>
                        </div>


                        <!--<div class="d-flex justify-content-between align-items-center mt-2">
                            <p class="mt-2 fw-bold h5">Importo: €<?php echo $ordin["ImportoTotale"]; ?></p>
                            
                        </div>

                        <?php if(!$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
                            <footer>
                                <p><a href="tracciamentoOrdine.php?IDOrdine=<?php echo $ordin["IDOrdine"]; ?>">Traccia ordine</a></p>
                            </footer>
                        <?php endif; ?>
                        <label for="aprii" hidden></label><button type="submit" class="btn btn-primary btn-sm" id="aprii">Visualizza ordine</button>
                        -->
                        
                        <!--<div class="d-flex justify-content-between align-items-center mt-2">
                            <p class="mt-2 fw-bold h5">Importo: €<?php echo $ordin["ImportoTotale"]; ?></p>
                            <label for="aprii" hidden></label><button type="submit" class="btn btn-primary btn-sm" id="aprii">></button>
                        </div>

                        <?php if(!$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
                            <footer>
                                <p><a href="tracciamentoOrdine.php?IDOrdine=<?php echo $ordin["IDOrdine"]; ?>">Traccia ordine</a></p>
                            </footer>
                        <?php endif; ?>-->

                    </form>
                </section>        
            <?php endforeach ?>
        </div>
    </div>
    <?php endif; ?>
    <p class="mt-3"><a href="index.php" class="bottone">Torna alla home</a></p>

<script src="../js/hoverSection.js">    
</script>
</div>