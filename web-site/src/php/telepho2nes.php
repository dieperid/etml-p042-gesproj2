<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../resources/css/style.css" />
    <title>Accueil</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="../html/index.html">Accueil</a></li>
          <li><a id="active" href="telephones.php">Télé</a></li>
        </ul>
      </nav>
    </header>
    <div class="container">
            <?php
            require('lib/config.php');
            // Récupération des 10 derniers messages
            $reponse = $bdd->query(
            'SELECT cliNom, marNom, telModele
            FROM t_telephone
            INNER JOIN t_marque
            ON t_marque.idMarque = t_telephone.fkMarque
            INNER JOIN t_contenir
            ON t_telephone.idTelephone = t_contenir.fkTelephone
            INNER JOIN t_commande
            ON t_commande.idCommande = t_contenir.fkCommande
            INNER JOIN t_client
            ON t_client.idClient = t_commande.fkClient
            ORDER BY cliNom');
            ?>
            <div id="infoTelephones">
            <table id="tableau">
            <tr><th>Clients</th><th>Marque</th><th>Modele</th></tr>
            <?php
            // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
            
            while ($donnees = $reponse->fetch())
            { 
              ?>
              <tr>
                <td><?php echo $donnees['cliNom']?></td>
                <td><?php echo $donnees['marNom']?></td>
                <td><?php echo $donnees['telModele']?></td>
              </tr>
              <?php
            } 
            $reponse->closeCursor();
            ?>
            </table>
            </div>
        </div>
        <aside>
          <form action="..php">
            <label for="sport[]">Os</label>
            <input type="checkbox" name="sport[]" value="iOs"/>
            <input type="checkbox" name="sport[]" value="Android"/>
            <!--<input type="submit"></input>-->
          </form>
          <?php
          $sport=" sports LIKE ";
          for($a=0;a<count($_POST['sport']);$a++)
          {
            if( isset($_POST['sport'][$a]))
            {
              $sport.=($sport=="")?"":" OR sports LIKE";
              $sport.="'%".$_POST['sport'][$a]."%'"; 
            }
          }
          $query=mysql_query("SELECT * FROM schools WHERE $sport ");
          while($fetch=mysql_fetch_assoc($query))
          {
          //fetch a schools data
          }
          ?>
        </aside>
  </body>
</html>
