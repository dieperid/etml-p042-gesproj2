<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- 
        Auteur      : Alexis Rojas, David Dieperink, Stefan Petrovic
        Date        : 26.11.2021
        Description : Page d'affichage des requêtes SQL
    -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../resources/css/style.css" />
    <script src="../../resources/js/darkmode.js" defer></script>
    <title>Accueil</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a id="active" href="telephones.php">Téléphones</a></li>
            </ul>
        </nav>
    </header>
    <!-- Balises pour l'animation du soleil et la lune -->
    <div class="sun"></div>
    <div class="moonShadow"></div>
    <div class="moon"></div>
    <div id="star1" class="star"></div>
    <div id="star2" class="star"></div>
    <div id="star3" class="star"></div>
    <div id="star4" class="star"></div>
    <div id="star5" class="star"></div>
    <div id="star6" class="star"></div>
    <!--End-->
    <!-- Container données des téléphones  -->
    <div class="container-telephone">
        <div class="row rowParent">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Requetes SQL</h4>
                    </div>
                </div>
            </div>
            <!-- Liste des requêtes Filtres + Tris -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filtre 
                                <button type="submit" class="btn btn-primary btn-sm float-end">Recherche</button>
                            </h5>
                        </div>
                        <!-- Liste des marques -->
                        <div class="card-body">
                            <h6>Liste des Marques</h6>
                            <hr>
                            <?php
                                //Connexion avec la base de données
                                require('lib/config.php');

                                //Requête preparée
                                $marque_query = "SELECT * FROM t_marque";

                                //Exécution de la requête
                                $marque_query_run  = mysqli_query($bdd, $marque_query);

                                //Si la requête a au moins un enregistrement
                                if(mysqli_num_rows($marque_query_run) > 0)
                                {
                                    //Parcourt tous les lignes de la requête
                                    foreach($marque_query_run as $marquelist)
                                    {
                                        //Array pour récupérer les marques selectionnées
                                        $checked = [];

                                        //Si l'utilisateur selectionne des marques
                                        if(isset($_GET['marques']))
                                        {
                                            //Get marques selectionnées pour les mettre dans le array $checked
                                            $checked = $_GET['marques'];
                                        }
                                        ?>
                                        <!-- Génération Divs pour l'affichage des marques -->
                                        <div class ="lblContainerCheckbox">
                                            <label>
                                                <input type="checkbox" name="marques[]" value="<?= $marquelist['idMarque']; ?>" 
                                                    <?php if(in_array($marquelist['idMarque'], $checked)){ echo "checked"; } ?>>
                                                    <span class="checkmarkCheckbox"></span>
                                            </label>
                                            <?= $marquelist['marNom']; ?>
                                        </div>
                                        <!-- End -->
                                    <?php
                                    }
                                }
                                //Sinon, affiche qu'il n'y a aucun enregistrement
                                else
                                {
                                    echo "Aucune Marque Trouvée";
                                }
                            ?>
                        </div>
                        <!-- End -->
                        <!-- Liste des OS -->
                        <div class="card-body">
                            <h6>Liste des OS</h6>
                            <hr>
                            <?php
                                //Liste des Os
                                $tel_query_run  = array ('iOs', 'Android', 'HarmonyOS');
                                
                                //Si la requête à au moins un enregistrement
                                if($tel_query_run > 0)
                                {
                                    //Parcour la liste d'Os
                                    foreach($tel_query_run as $tellist)
                                    {
                                        //Array pour récupérer les Os selectionnés
                                        $checked2 = [];

                                        //Si l'utilisateur a selectionné des Os
                                        if(isset($_GET['osTel']))
                                        {
                                            //Get Os selectionnés
                                            $checked2 = $_GET['osTel'];
                                        }
                                        ?>
                                        <!-- Génération Divs pour l'affichage des Os -->
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
                                //S'il n'y a aucun Os
                                else
                                {
                                    echo "Aucune OS Trouvée";
                                }
                            ?>
                        </div>
                        <!-- Section des filtres -->
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
                        <!-- End -->
                        <!-- Section des requêtes sécondaires -->
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
                        <!-- End -->
                        <!-- Section des requêtes clients -->
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
                        <!-- End -->
                    </div>
                </form>
            </div>
            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            //Si une ou + marques ont été selectionnées
                            if(isset($_GET['marques']))
                            {
                                //Array pour get les marques selectionnées
                                $marqueChecked = [];
                                $marqueChecked = $_GET['marques'];

                                //Si un ou + Os ont été selectionnés
                                if(isset($_GET['osTel']))
                                {
                                    //Array pour get les Os selectionnées
                                    $osChecked = [];
                                    $osChecked = $_GET['osTel'];

                                    //Si une option de trie à été selectionnée
                                    if(isset($_GET['triOption']))
                                    {   
                                        //Option de tri selectionnée
                                        $listSelected = $_GET['triOption'];

                                        //Ordre du tri (Asc | Desc)
                                        $orderChoice = $_GET['orderChoice'];
                                        
                                        //Parcourt les marques selectionnées
                                        foreach($marqueChecked as $rowmarque)
                                        {
                                            //Parcourt les Os selectionnés
                                            foreach($osChecked as $rowtel)
                                            {
                                                //Requête preparée
                                                $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE fkMarque IN ($rowmarque) AND telOS LIKE '$rowtel%' ORDER BY $listSelected $orderChoice";
                                                
                                                //Execute la requête et affiche les données dans la page
                                                ShowAllInfo($products, $bdd);
                                            }
                                        }
                                    }
                                    //Si aucune option de tri a été selectionnée
                                    else
                                    {
                                        //Parcourt les marques selectionnées
                                        foreach($marqueChecked as $rowmarque)
                                        {
                                            //Parcourt les Os selectionnés
                                            foreach($osChecked as $rowtel)
                                            {
                                                //Requête preparée
                                                $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE fkMarque IN ($rowmarque) AND telOS LIKE '$rowtel%'";
                                                
                                                //Execute la requête et affiche les données dans la page
                                                ShowAllInfo($products, $bdd);
                                            }
                                        }
                                    }
                                }
                                //Sinon, si une option de tri a été selectionnée
                                elseif(isset($_GET['triOption']))
                                {   
                                    //Option de tri selectionnée
                                    $listSelected = $_GET['triOption'];

                                    //Ordre du tri (Asc | Desc)
                                    $orderChoice = $_GET['orderChoice'];

                                    //Parcourt les marques selectionnées
                                    foreach($marqueChecked as $rowmarque)
                                    {
                                        //Requête preparée
                                        $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE fkMarque IN ($rowmarque) ORDER BY $listSelected $orderChoice";
                                        
                                        //Execute la requête et affiche les données dans la page
                                        ShowAllInfo($products, $bdd);
                                    }
                                }
                                //Si juste des marques on été selectionnées
                                else
                                {
                                    //Parcourt les marques selectionnées
                                    foreach($marqueChecked as $rowmarque)
                                    {
                                        //Requête preparée
                                        $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE fkMarque IN ($rowmarque)";
                                        
                                        //Execute la requête et affiche les données dans la page
                                        ShowAllInfo($products, $bdd);
                                    }
                                }
                            }
                            //Sinon, si un ou + Os ont été selectionnés
                            elseif(isset($_GET['osTel']))
                            {
                                //Array pour get les Os selectionnées
                                $osChecked = [];
                                $osChecked = $_GET['osTel'];
                                
                                //Si une option de tri a été selectionnée
                                if(isset($_GET['triOption']))
                                {   
                                    //Option de tri selectionnée
                                    $listSelected = $_GET['triOption'];

                                    //Ordre du tri (Asc | Desc)
                                    $orderChoice = $_GET['orderChoice'];

                                    //Parcourt les Os selectionnés
                                    foreach($osChecked as $rowtel)
                                    {
                                        //Requête preparée
                                        $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE telOS LIKE '$rowtel%' ORDER BY $listSelected $orderChoice";
                                        
                                        //Execute la requête et affiche les données dans la page
                                        ShowAllInfo($products, $bdd);
                                    }
                                }
                                //Si aucune option de tri est selectionnée
                                else
                                {
                                    //Parcourt les Os selectionnés
                                    foreach($osChecked as $rowtel)
                                    {
                                        //Requête preparée
                                        $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque WHERE telOS LIKE '$rowtel%'";
                                        
                                        //Execute la requête et affiche les données dans la page
                                        ShowAllInfo($products, $bdd);
                                    }
                                }
                            }
                            //Sinon, si une option de tri est selectionnée                                      
                            elseif(isset($_GET['triOption']))
                            {
                                //Option de tri selectionnée
                                $listSelected = $_GET['triOption'];

                                //Ordre du tri (Asc | Desc)
                                $orderChoice = $_GET['orderChoice'];

                                //Requête preparée
                                $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY $listSelected $orderChoice";
                                
                                //Execute la requête et affiche les données dans la page
                                ShowAllInfo($products, $bdd);
                            }
                            #Requetes Secondaires
                            //Sinon si une requête sécondaire est selectionnée
                            else if(isset($_GET['reqSec']))
                            {
                                //Get le nom de la requete sécondaire
                                $listSelected = $_GET['reqSec'];

                                //Requete 5 autonomies
                                if($listSelected == 'autonomieTel')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY telAutonomie DESC LIMIT 5";
                                }
                                //Requete 10 CpuPower
                                else if($listSelected == 'cpuPower')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY telChipsetGhz*telNbCoeur DESC LIMIT 10";
                                }
                                //Requete CPU, taille ecran et RAM
                                else if($listSelected == 'cpuScreenSizeRAM')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY telChipsetGhz DESC, telTailleEcran DESC, telRam DESC LIMIT 5";
                                }
                                //Requete 3 plus chers
                                else if($listSelected == 'prixTel')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque ORDER BY telPrixActuel DESC LIMIT 3";
                                }
                                //Requete prix par marque et par Os
                                else if($listSelected == 'prixTelMarqueOS')
                                {
                                    $products = "SELECT * FROM t_telephone INNER JOIN t_marque ON t_telephone.fkMarque = t_marque.idMarque GROUP BY marNom ORDER BY telPrixActuel DESC";
                                }
                                //Requete evolution des prix
                                else if($listSelected == 'evolPrice')
                                {
                                    $products = "SELECT marNom, telModele, telPrixActuel-telPrixSortie AS 'EvolPrix' FROM t_telephone INNER JOIN t_marque ON t_marque.idMarque=t_telephone.fkMarque ORDER BY telModele";
                                    ShowEvolPrice($products, $bdd);
                                }
                                //Pour tous les requetes sécondaires sauf pour evolPrice
                                if($listSelected !== 'evolPrice')
                                {
                                    ShowAllInfo($products, $bdd);
                                }                                       
                            }
                            #Requetes clients
                            //Sinon, si une requête client est selectionné
                            else if(isset($_GET['reqClient']))
                            {
                                //Récupère le nom de la requête client
                                $listSelected = $_GET['reqClient'];
                                
                                //Requête Achats de chaque client
                                if($listSelected == 'achatClient')
                                {
                                    //Requête preparée
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

                                    //Affichage des données
                                    ShowAllInfoReqClient($products, $bdd);
                                }
                                //Requête nombre de ventes par téléphone
                                else if($listSelected == 'nbVenteTel')
                                {
                                    //Requête preparée
                                    $products = "SELECT marNom, telModele, COUNT(fkTelephone)
                                                FROM t_telephone
                                                INNER JOIN t_marque
                                                ON t_marque.idMarque = t_telephone.fkMarque
                                                INNER JOIN t_contenir
                                                ON t_telephone.idTelephone = t_contenir.fkTelephone
                                                GROUP BY telModele";

                                    //Affichage des données
                                    ShowAllInfoReqNbSoldTel($products, $bdd);
                                }
                                //Requête ventes de chaque téléphone
                                else if($listSelected == 'venteTel')
                                {
                                    //Requête preparée
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

                                    //Execution de la requête Affichage des données
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
                            //Requete affichage de tous les téléphones
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
        // Affiche l'évolution des prix de chaque téléphone
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
        //Affiche le nombre de ventes par téléphone
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
        //Affiche les données du client + téléphones achetés
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
        //Affiche les données des téléphones
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
    <!-- End -->
</body>
</html>