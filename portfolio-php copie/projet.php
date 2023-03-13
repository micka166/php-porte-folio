<style>
    <?php include "assets/css/style-projet.css" ;?>
</style>



<?php


include "pdo.php" ;
?>
    
<?php
    include "./includes/pages/header.php";
    include "./includes/pages/navbar.php"
    
?>

<?php 
    $sql = "SELECT * FROM projets";
    $requete = $db->query($sql);
    $projets = $requete->fetchAll();
?> 
<article>
    <?php foreach($projets as $projet):?> 
    <p class="id"><?= $projet["id-projet"]?></p>    
    <p class="date"><?= $projet["date-projet"]?></p>
    <h2><?= $projet["nom-projet"]?></h2>
    <img class="proj" src="<?=$projet["image-projet"];?>">
    <blockquote><?= $projet["descriptif-projet"]?></blockquote>
    <?php endforeach;?>
</article>   
 



<?php
    include "./includes/pages/footer.php"
    ;?> 




