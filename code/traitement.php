<?php
$prix = $_POST['prix'];

function application_tva($prix_produit)
{
    if($prix_produit > 0)
    {
        $tva = 0.20;
        return $prix_produit * $tva;
    }
    return NULL;
}

$prix = application_tva($prix);

echo "Le prix avec TVA est de : ".$prix.".";
?>