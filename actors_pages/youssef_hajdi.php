<?php 
$title = "Youssef Hajdi";
$nav_en_cours = "youssef";
require '../elements/header.php';
require '../elements/navbar.php';

$yhkey = "nm1763487";
$bpmovies = $dataMovie->getFilmo($yhkey);
$bpknown = $dataKnown->getKnown($yhkey);

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
        <p>Né le 8 juin 1979 à Tarascon dans les Bouches-du-Rhône de parents Marocains, il grandit de l'autre côté du Rhône à Beaucaire dans le Gard. Une ville qui lui est chère, il deviendra, plus tard, le parrain du festival de Cinéma organisé par l’association « Têtes à Clap ».<br><br>

        Ayant toujours rêvé de devenir comédien, il arrive à Paris à vingt ans. Il fait ses premiers pas sur scène au café-théâtre « Le Bout » et au théâtre de l’Avancée, puis de 2002 à 2005, il suit une formation d’acteur dispensée par Jack Waltzer, membre à vie de l’Actors Studio.<br><br>

        Il débute au cinéma dans 13 m² de Barthélémy Grossmann qui lui vaut une pré-nomination au Césars 2008, catégorie Meilleur Espoir Masculin, parrainé par Jacques Audiard. Il se fait remarquer dans Les Aventures extraordinaires d'Adèle Blanc-Sec de Luc Besson et dans Micmacs à tire-larigot de Jean-Pierre Jeunet. En 2012, il est le partenaire d’Omar Sy et Laurent Lafitte dans De l'autre côté du périph de David Charhon et partage l'affiche avec Éric Judor dans Mohamed Dubois d'Ernesto Ona, en 2013.</p>
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