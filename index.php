<?php  
//création d'une variable en PHP
$name="David";
$bestFood="tagine";
$age=30

?>

<!--Je demande au php de généré du html avec un h1, incluant bonjour suivi de la valeur de la variable
 $name suivi de la fermeture de la balise h1. Pour faire une instruction php je réouvre la balise echo 
 en php d'afficher sa valeur, qui s' affiche dans le navigateur-->



<h1>Hello <?php echo $name;?> j'aime le <?php echo $bestFood;?> et mon âge : <?php echo $age?> ans</h1>

<p>
    <!--Je demande avec mon if si je suis majeur et sinon je suis mineur
    <?php if($age >= 18)
    {?>
        <p>Vous êtes majeur</p>
    <?php 
    }
    else
    {?>
        <p>Vous êtes mineur</p>
    <?php 
}?>
</p>

<?php
$languages = ["PHP", "HTML", "CSS", "JS"];


?>

<p>
    <!Je demande à mon php de générer une liste de mes langages de programmation préférés-->
    <?php foreach($languages as $language)
    {
         echo $language;
    }?>
    </p>

















