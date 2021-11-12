<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../resources/css/style.css" />
    <title>Accueil</title>
  </head>
<body>
     <header>
      <nav>
        <ul>
          <li><a href="../html/index.html">Accueil</a></li>
          <li><a id="active" href="telephones.php">Téléphones</a></li>
        </ul>
      </nav>
    </header>
    <div class="container-telephone">
        <div class="row rowParent">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Requetes SQL</h4>
                    </div>
                </div>
            </div>
            <!-- Brand List  -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filtre 
                                <button type="submit" class="btn btn-primary btn-sm float-end">Recherche</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Liste des Marques</h6>
                            <hr>
                            <?php
                                require('lib/config.php');

                                $marque_query = "SELECT * FROM t_marque";
                                $marque_query_run  = mysqli_query($bdd, $marque_query);

                                if(mysqli_num_rows($marque_query_run) > 0)
                                {
                                    foreach($marque_query_run as $marquelist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['marques']))
                                        {
                                            $checked = $_GET['marques'];
                                        }
                                        ?>
                                            <div class ="lblContainerCheckbox">
                                                <label>
                                                    <input type="checkbox" name="marques[]" value="<?= $marquelist['idMarque']; ?>" 
                                                        <?php if(in_array($marquelist['idMarque'], $checked)){ echo "checked"; } ?>>
                                                        <span class="checkmarkCheckbox"></span>
                                                </label>
                                                <?= $marquelist['marNom']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "Aucune Marque Trouvée";
                                }
                            ?>
                        </div>

                        <div class="card-body">
                            <h6>Liste des OS</h6>
                            <hr>
                            <?php

                                $tel_query_run  = array ('iOs', 'Android', 'HarmonyOS');

                                if($tel_query_run > 0)
                                {
                                    foreach($tel_query_run as $tellist)
                                    {
                                        $checked2 = [];
                                        if(isset($_GET['osTel']))
                                        {
                                            $checked2 = $_GET['osTel'];
                                        }
                                        ?>
                                            <div class ="lblContainerCheckbox">
                                                <label>
                                                    <input type="checkbox" name="osTel[]" value="<?= $tellist; ?>" 
                                                    <?php if(in_array($tellist, $checked2)){ echo "checked"; } ?>>
                                                    <span class="checkmarkCheckbox"></span>
                                                </label>
                                                <?= $tellist; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "Aucune OS Trouvée";
                                }
                            ?>
                        </div>
                        <div class="card-body">
                            <h6>Filtres</h6><hr>
                            <select name="triOption" id="triOption-selected">
                                <option selected disabled value="telPrixActuel">Sélectionnez une option</option>
                                <option value="telAutonomie">Autonomie</option>
                                <option value="telChipsetGhz">CPU</option>
                                <option value="telPrixActuel">Prix</option>
                                <option value="telTailleEcran">Taille d'écran</option>
                                <option value="telRam">RAM</option>
                                <option value="telMemoire">Mémoire interne</option>
                            </select><br><br>
                            <label class ="lblContainer" for="asc">Ascendant
                                <input type="radio" id="asc" name="orderChoice" value="ASC" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                             <label class ="lblContainer" for="desc">Descendant
                                <input type="radio" id="desc" name="orderChoice" value="DESC">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                            
                        <div class="card-body">
                            <h6>Requetes secondaire</h6>
                            <hr>
                            <label class ="lblContainer" for="autonomieTel">Top 5 Autonomies
                                <input type="radio" id="autonomieTel" name="reqSec" value="autonomieTel">
                                <span class="checkmark"></span>
                            </label>
                            <label class ="lblContainer" for="cpuPower">Top 10 CPU
                                <input type="radio" id="cpuPower" name="reqSec" value="cpuPower">
                                <span class="checkmark"></span>
                            </label>
                            <label class ="lblContainer" for="cpuScreenSizeRAM">Top 5 CPU, Ecran, RAM
                                <input type="radio" id="cpuScreenSizeRAM" name="reqSec" value="cpuScreenSizeRAM">
                                <span class="checkmark"></span>
                            </label>
                            <label class ="lblContainer" for="prixTel">Top 3 Plus cher
                                <input type="radio" id="prixTel" name="reqSec" value="prixTel">
                                <span class="checkmark"></span>
                            </label>
                            <label class ="lblContainer" for="prixTelMarqueOS">Tel - cher (marque + OS)
                                <input type="radio" id="prixTelMarqueOS" name="reqSec" value="prixTelMarqueOS">
                                <span class="checkmark"></span>
                            </label>
                            <label class ="lblContainer" for="evolPrice">Evolution des prix
                                <input type="radio" id="evolPrice" name="reqSec" value="evolPrice">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="card-body">
                            <h6>Requetes clients</h6>
                            <hr>
                            <label class ="lblContainer" for="achatClient">Achat du client
                                <input type="radio" id="achatClient" name="reqClient" value="achatClient">
                                <span class="checkmark"></span>
                            </label>
                            <label class ="lblContainer" for="nbVenteTel">Nb Ventes par téléphone
                                <input type="radio" id="nbVenteTel" name="reqClient" value="nbVenteTel">
                                <span class="checkmark"></span>
                            </label>
                            <label class ="lblContainer" for="venteTel">Vente de téléphones
                                <input type="radio" id="venteTel" name="reqClient" value="venteTel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            // Marque séléctionnée
                            if(isset($_GET['marques']))
                            {
                                $marquechecked = [];
                                $marquechecked = $_GET['marques'];

                                // Marque + OS séléctionnés
                                if(isset($_GET['osTel']))
                                {
                                    $telchecked = [];
                                    $telchecked = $_GET['osTel'];

                                    // Marque + OS + option de trie
                                    if(isset($_GET['triOption']))
                                    {   
                                        $listSelected = $_GET['triOption'];
                                        $orderChoice = $_GET['orderChoice'];
                                        foreach($marquechecked as $rowmarque)
                                        {
                                            foreach($telchecked as $rowtel)
                                            {
                                                $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE fkMarque IN ($rowmarque) AND telOS LIKE '$rowtel%' ORDER BY $listSelected $orderChoice";
                                                ShowAllInfo($products, $bdd);
                                            }
                                        }
                                    }
                                    // Cas de base Marque + OS
                                    else
                                    {
                                        foreach($marquechecked as $rowmarque)
                                        {
                                            foreach($telchecked as $rowtel)
                                            {
                                                $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE fkMarque IN ($rowmarque) AND telOS LIKE '$rowtel%'";
                                                ShowAllInfo($products, $bdd);
                                            }
                                        }
                                    }
                                }
                                // Marque + tri d'écran séléctionnés
                                elseif(isset($_GET['triOption']))
                                {   
                                    $listSelected = $_GET['triOption'];
                                    $orderChoice = $_GET['orderChoice'];
                                    foreach($marquechecked as $rowmarque)
                                    {
                                        $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE fkMarque IN ($rowmarque) ORDER BY $listSelected $orderChoice";
                                        ShowAllInfo($products, $bdd);
                                    }
                                }

                                // Cas de base Marque
                                else
                                {
                                    foreach($marquechecked as $rowmarque)
                                    {
                                        $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE fkMarque IN ($rowmarque)";
                                        ShowAllInfo($products, $bdd);
                                    }
                                }
                            }

                            // OS séléctionné
                            elseif(isset($_GET['osTel']))
                            {
                                $telchecked = [];
                                $telchecked = $_GET['osTel'];
                                
                                // OS + tri d'écran séléctionnés
                                if(isset($_GET['triOption']))
                                {   
                                    $listSelected = $_GET['triOption'];
                                    $orderChoice = $_GET['orderChoice'];

                                    foreach($telchecked as $rowtel)
                                    {
                                        //En fonction des Os selectionnés
                                        $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE telOS LIKE '$rowtel%' ORDER BY $listSelected $orderChoice";
                                        ShowAllInfo($products, $bdd);
                                    }
                                }

                                // Cas de base OS sélécionné
                                else
                                {
                                    foreach($telchecked as $rowtel)
                                    {
                                        //En fonction des Os selectionnés
                                        $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE telOS LIKE '$rowtel%'";
                                        ShowAllInfo($products, $bdd);
                                    }
                                }
                            }

                            // Tri d'écran sélécionné                                         
                            elseif(isset($_GET['triOption']))
                            {
                                $listSelected = $_GET['triOption'];
                                $orderChoice = $_GET['orderChoice'];
                                $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY $listSelected $orderChoice";
                                ShowAllInfo($products, $bdd);
                            }

                            /*
                                REQUETES SECONDAIRE
                            */

                            // Requete autonomie
                            else if(isset($_GET['reqSec']))
                            {
                                $listSelected = $_GET['reqSec'];
                                if($listSelected == 'autonomieTel')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY telAutonomie DESC LIMIT 5";
                                }
                                // Requete cpuPower
                                else if($listSelected == 'cpuPower')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY telChipsetGhz*telNbCoeur DESC LIMIT 10";
                                }
                                // Requetes CPU, taille ecran et RAM
                                else if($listSelected == 'cpuScreenSizeRAM')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY telChipsetGhz DESC, telTailleEcran DESC, telRam DESC LIMIT 5";
                                }
                                else if($listSelected == 'prixTel')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY telPrixActuel DESC LIMIT 3";
                                }
                                else if($listSelected == 'prixTelMarqueOS')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque GROUP BY marNom ORDER BY telPrixActuel DESC";
                                }
                                else if($listSelected == 'evolPrice')
                                {
                                    $products = "SELECT marNom, telModele, telPrixActuel-telPrixSortie AS 'EvolPrix' FROM t_telephone INNER JOIN t_marque ON t_marque.idMarque=t_telephone.fkMarque ORDER BY telModele";
                                    ShowEvolPrice($products, $bdd);
                                }
                                if($listSelected !== 'evolPrice')
                                {
                                    ShowAllInfo($products, $bdd);
                                }                                       
                            }
                            // Requetes clients
                            else if(isset($_GET['reqClient']))
                            {
                                $listSelected = $_GET['reqClient'];

                                if($listSelected == 'achatClient')
                                {
                                    $products = "SELECT cliNom, cliPrenom, marNom, telModele
                                                FROM t_telephone
                                                INNER JOIN t_marque
                                                ON t_marque.idMarque = t_telephone.fkMarque
                                                INNER JOIN t_contenir
                                                ON t_telephone.idTelephone = t_contenir.fkTelephone
                                                INNER JOIN t_commande
                                                ON t_commande.idCommande = t_contenir.fkCommande
                                                INNER JOIN t_client
                                                ON t_client.idClient = t_commande.fkClient
                                                ORDER BY cliNom";
                                    ShowAllInfoReqClient($products, $bdd);
                                }
                                else if($listSelected == 'nbVenteTel')
                                {
                                    $products = "SELECT marNom, telModele, COUNT(fkTelephone)
                                                FROM t_telephone
                                                INNER JOIN t_marque
                                                ON t_marque.idMarque = t_telephone.fkMarque
                                                INNER JOIN t_contenir
                                                ON t_telephone.idTelephone = t_contenir.fkTelephone
                                                GROUP BY telModele";
                                    ShowAllInfoReqNbSoldTel($products, $bdd);
                                }
                                else if($listSelected == 'venteTel')
                                {
                                    $products = "SELECT marNom, telModele, cliNom, cliPrenom
                                                FROM t_telephone
                                                INNER JOIN t_marque
                                                ON t_marque.idMarque = t_telephone.fkMarque
                                                INNER JOIN t_contenir
                                                ON t_telephone.idTelephone = t_contenir.fkTelephone
                                                INNER JOIN t_commande
                                                ON t_commande.idCommande = t_contenir.fkCommande
                                                INNER JOIN t_client
                                                ON t_client.idClient = t_commande.fkClient
                                                ORDER BY telModele";

                                    $products_run = mysqli_query($bdd, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                                <div class="col-md-4 mt-3">
                                                    <div class="border p-2">
                                                        <h5><?=$proditems['marNom']?></h5>
                                                        <h5><?=$proditems['telModele']?></h5>
                                                        <h6><?=$proditems['cliNom'].' '.$proditems['cliPrenom']?></h6>  
                                                    </div>
                                                </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                                
                            }
                            // Requete affichage de tous les téléphones
                            else
                            {
                                $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque";
                                ShowAllInfo($products, $bdd);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        function ShowEvolPrice($products, $bdd)
        {
            $products_run = mysqli_query($bdd, $products);
            if(mysqli_num_rows($products_run) > 0)
            {
                foreach($products_run as $proditems) :
                    ?>
                        <div class="col-md-4 mt-3">
                            <div class="border p-2">
                                <h5><?=$proditems['marNom']?></h5>
                                <h5><?=$proditems['telModele']?></h5>
                                <?php
                                if($proditems['EvolPrix']<=0)
                                {?>
                                    <h6>Evol. du prix: <b style="color:green"><?=$proditems['EvolPrix']?> $</b></h6>  
                                <?php
                                }
                                else
                                {?>
                                    <h6>Evol. du prix: <b style="color:red">+<?=$proditems['EvolPrix']?> $</b></h6>  
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                endforeach;
            }
        }
        function ShowAllInfoReqNbSoldTel($products, $bdd)
        {
            $products_run = mysqli_query($bdd, $products);
            if(mysqli_num_rows($products_run) > 0)
            {
                foreach($products_run as $proditems) :
                    ?>
                        <div class="col-md-4 mt-3">
                            <div class="border p-2">
                                <h5><?=$proditems['marNom']?></h5>
                                <h6><?=$proditems['telModele']?></h6>
                                <h6 style="color:green">Nb de ventes: <?=$proditems['COUNT(fkTelephone)']?></h6>
                            </div>
                        </div>
                    <?php
                endforeach;
            }
        }
        function ShowAllInfoReqClient($products, $bdd)
        {
            $products_run = mysqli_query($bdd, $products);
            if(mysqli_num_rows($products_run) > 0)
            {
                foreach($products_run as $proditems) :
                    ?>
                        <div class="col-md-4 mt-3">
                            <div class="border p-2">
                                <h5><?=$proditems['cliNom'].' '.$proditems['cliPrenom']?></h5>
                                <h6><?=$proditems['marNom']?></h6>
                                <h6><?=$proditems['telModele']?></h6>
                            </div>
                        </div>
                    <?php
                endforeach;
            }
        }

        function ShowAllInfo($products, $bdd)
        {
            $products_run = mysqli_query($bdd, $products);
            if(mysqli_num_rows($products_run) > 0)
            {
                foreach($products_run as $proditems) :
                    ?>
                        <div class="col-md-4 mt-3">
                            <div class="border p-2">
                                <h5><?=$proditems['marNom']?></h5>
                                <h6><?=$proditems['telModele']?></h6>
                                <h6><?=$proditems['telOS'].' '.$proditems['telVersionOs']?></h6>
                                <h6><?='Sortie : '.$proditems['telPrixSortie'].' $'?></h6>
                                <h6><?='Actuel : '.$proditems['telPrixActuel'].' $'?></h6>
                                <h6><?=$proditems['telChipsetRef']?></h6>
                                <h6><?=$proditems['telChipsetGhz'].' Ghz | '.$proditems['telNbCoeur'].' ❤'?></h6>
                                <h6><?='RAM : '.$proditems['telRam'].' Go'?></h6>
                                <h6><?='ROM : '.$proditems['telMemoire'].' Go'?></h6>
                                <h6><?=$proditems['telTailleEcran'].'" | '.$proditems['telResolution']?></h6>
                                <h6><?=$proditems['telAutonomie'].' mAh'?></h6>
                            </div>
                        </div>
                    <?php
                endforeach;
            }
        }?>
    </div>
</body>
</html>