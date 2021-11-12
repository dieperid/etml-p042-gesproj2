<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Accueil</title>
  </head>
<body>
    
    <div class="container">
        <div class="row">
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
                                            <div>
                                                <input type="checkbox" name="marques[]" value="<?= $marquelist['idMarque']; ?>" 
                                                    <?php if(in_array($marquelist['idMarque'], $checked)){ echo "checked"; } ?>
                                                 />
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
                                        if(isset($_GET['tel']))
                                        {
                                            $checked2 = $_GET['tel'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="tel[]" value="<?= $tellist; ?>" 
                                                    <?php if(in_array($tellist, $checked2)){ echo "checked"; } ?>
                                                 />
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

                    </div>
                </form>
            </div>

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            if(isset($_GET['marques']))
                            {
                                $marquechecked = [];
                                $marquechecked = $_GET['marques'];
                                if (isset($_GET['tel']))
                                {
                                    $telchecked = [];
                                    $telchecked = $_GET['tel'];
                                    foreach($marquechecked as $rowmarque)
                                    {
                                        foreach($telchecked as $rowtel)
                                        {
                                            // echo $rowmarque;
                                            $products = "SELECT * FROM t_telephone WHERE fkMarque IN ($rowmarque) AND telOS LIKE '$rowtel%'";
                                            $products_run = mysqli_query($bdd, $products);
                                            if(mysqli_num_rows($products_run) > 0)
                                            {
                                                foreach($products_run as $proditems) :
                                                    ?>
                                                        <div class="col-md-4 mt-3">
                                                            <div class="border p-2">
                                                                <h6><?= $proditems['telModele']; ?></h6>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endforeach;
                                            }
                                        }
                                    }
                                }
                                else
                                {
                                    $marquechecked = [];
                                    $marquechecked = $_GET['marques'];
                                    foreach($marquechecked as $rowmarque)
                                    {
                                        // echo $rowmarque;
                                        $products = "SELECT * FROM t_telephone WHERE fkMarque IN ($rowmarque)";
                                        $products_run = mysqli_query($bdd, $products);
                                        if(mysqli_num_rows($products_run) > 0)
                                        {
                                            foreach($products_run as $proditems) :
                                                ?>
                                                    <div class="col-md-4 mt-3">
                                                        <div class="border p-2">
                                                            <h6><?= $proditems['telModele']; ?></h6>
                                                        </div>
                                                    </div>
                                                <?php
                                            endforeach;
                                        }
                                    }
                                }
                            }
                            else
                            {
                                if (isset($_GET['tel']))
                                {
                                    $telchecked = [];
                                    $telchecked = $_GET['tel'];
                                    foreach($telchecked as $rowtel)
                                    {
                                        // echo $rowmarque;
                                        $products = "SELECT * FROM t_telephone WHERE telOS LIKE '$rowtel%'";
                                        $products_run = mysqli_query($bdd, $products);
                                        if(mysqli_num_rows($products_run) > 0)
                                        {
                                            foreach($products_run as $proditems) :
                                                ?>
                                                    <div class="col-md-4 mt-3">
                                                        <div class="border p-2">
                                                            <h6><?= $proditems['telModele']; ?></h6>
                                                        </div>
                                                    </div>
                                                <?php
                                            endforeach;
                                        }
                                    }
                                }
                                else
                                {
                                    $products = "SELECT * FROM t_telephone";
                                    $products_run = mysqli_query($bdd, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                                <div class="col-md-4 mt-3">
                                                    <div class="border p-2">
                                                        <h6><?= $proditems['telModele']; ?></h6>
                                                    </div>
                                                </div>
                                            <?php
                                        endforeach;
                                    }
                                    else
                                    {
                                        echo "No Items Found";
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>