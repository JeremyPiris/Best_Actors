<?php 
$title = "Sara Forestier";
$nav_en_cours = "sara";
require '../elements/header.php';
require '../elements/navbar.php';

$sfkey = "nm1271759";
$bpmovies = $dataMovie->getFilmo($sfkey);
$bpknown = $dataKnown->getKnown($sfkey);

?>


<div class="known-for">
    <?php foreach($bpknown as $bpknown): ?>
        <div class="known-div">
            <a href=<?= "https://www.imdb.com/title/" . $bpknown['kf_search'] ?>>
                <img class="known-img" src="<?= $bpknown['kf_image'] ?>" />
            </a>
            <p><?= $bpknown['kf_role'] ?></p>
        </div>
    <?php endforeach ?>
</div>



<div class="section-principale">
    <div class="biography">
        <h1>Juste avant le succès</h1>
        <p>Sara Forestier, née à Copenhague au Danemark, a grandi à Paris, aux côtés de ses deux frères. Son père travaille dans la rénovation d’appartements et sa mère est secrétaire dans un cabinet d'avocat.<br><br>

        À l'âge de 13 ans, elle obtient son premier rôle au cinéma en accompagnant une amie à un casting : c'est finalement elle qui est retenue. Après son apparition dans le film Les Fantômes de Louba, son nom commence à circuler parmi les agents, et elle passe des castings parallèlement à sa scolarité.<br><br>

        En 2004, elle tient le rôle féminin principal dans L'Esquive, réalisé par Abdellatif Kechiche. Son interprétation de Lydia, fille de cité HLM répétant une pièce de Marivaux pour une représentation de fin d'année scolaire, lui vaut le César du meilleur espoir féminin.</p>
    </div>

    <div class="trucs-bien">
        <h1>Trucs bien</h1>
    </div>
</div>

<div class="filmo">
    <h1>Filmo</h1>
    <ul>
        <?php foreach($bpmovies as $bpmovies): ?>
            <li>
                <a href=<?= "https://www.imdb.com/title/" . $bpmovies['filmoid'] ?>>🧐</a>
                <?= $bpmovies['filmotitle'] . " - " . $bpmovies['filmoyear'] ?>
            </li>
        <?php endforeach ?>
    </ul>
</div>








<?php 
require '../elements/footer.php';
?>