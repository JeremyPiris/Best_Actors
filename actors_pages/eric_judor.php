<?php 
$title = "Eric Judor";
$nav_en_cours = "eric";
require '../elements/header.php';
require '../elements/navbar.php';

$ejkey = "nm0431956";
$bpmovies = $dataMovie->getFilmo($ejkey);
$bpknown = $dataKnown->getKnown($ejkey);

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
        <p>Éric Judor est né le 25 juillet 1968, à Meaux, d'un père français originaire de Guadeloupe et d'une mère autrichienne.<br><br>

        À 18 ans, il tente une carrière de tennisman professionnel aux États-Unis. Les résultats ne suivant pas, il ne persévère pas. Il aurait cependant battu Hicham Arazi, deux fois quart de finaliste à Roland-Garros, alors que celui-ci était classé trois centième au classement mondial.<br><br>

        Après avoir été accompagnateur touristique aux États-Unis pendant deux ans puis au Canada, il est recruté comme logisticien chez Bouygues. Il y organise les plannings des ingénieurs qui travaillent sur les plates-formes pétrolières.<br><br>
        Éric Judor rencontre son alter-ego comique Ramzy Bedia en 1994. La célébrité acquise par leurs sketchs à la télévision dans l'émission Les Mots d'Éric et Ramzy sur M6 se combine au succès de leurs spectacles sur scène ainsi qu'à celui de la série H en 1998.</p>
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