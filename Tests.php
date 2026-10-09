<?php
/** 
 * Mission : architecture MVC GsbParam
 
 * @file ModeleFront.php
 * @author Marielle Jouin <jouin.marielle@gmail.com>
 * @version    3.0
 * @details contient les fonctions d'accès BD pour le FrontEnd
 */

include 'modele/ModeleFront.php';
$mf=new ModeleFront();

//var_dump($mf->getLesProduitsDeCategorie($mf->getLesCategories()[0]->id));

/*  $ProduitCate=$mf->getLesProduitsDeCategorie($mf->getLesCategories()[0]->id);
  var_dump($ProduitCate);*/

for($i=0;$i<count($mf->getLesCategories());$i=$i+1)
    {
        echo "<br><strong>Les produits de la catégorie ".$mf->getLesCategories()[$i]->id." est de: "."</strong><br><br>";
        //echo var_dump($mf->getLesProduitsDeCategorie($mf->getLesCategories()[$i]->id));
        $LesProduits= $mf->getLesProduitsDeCategorie($mf->getLesCategories()[$i]->id);
        foreach($LesProduits as $UnProduit)
            {
                echo $UnProduit->id." ".$UnProduit->description."<br><br>";
            }
    }



?>