<?php 
$title = "Edgar Wright";
$nav_en_cours = "edgar";
require '../elements/header.php';
require '../elements/navbar.php';

$egkey = "nnm0942367";
$bpmovies = $dataMovie->getFilmo($egkey);
$bpknown = $dataKnown->getKnown($egkey);

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
        <p>Edgar Wright naît le 18 avril 1974 à Poole, dans le Dorset en Angleterre.<br><br>

        Très jeune, il se passionne pour le cinéma. Avec une caméra Super 8, il réalise des courts métrages et rêve d'en faire son métier. À 20 ans, il réalise son premier long métrage, une comédie à petit budget intitulée A Fistful of Fingers. Malgré un premier film qui ne le satisfait pas vraiment, cette expérience lui permet d'être engagé pour réaliser quelques épisodes de séries télévisées.<br><br>
        En 1998, c'est sa rencontre avec le comédien et scénariste Simon Pegg qui bouleverse sa carrière. Ensemble, ils créent la série comique Les Allumés (Spaced) diffusée sur Channel 4. En l'espace de deux saisons et quatorze épisodes, la série devient culte. Fort de ce succès, Edgar Wright réunit l’équipe de la série autour du projet Shaun of the Dead, comédie horrifique sur fond d’invasion de zombies coécrite avec Pegg. Sorti en 2004, le film est un succès mondial inattendu. George A. Romero, spécialiste du genre, apprécie le film et décide de faire apparaître Edgar Wright et Simon Pegg dans Le Territoire des morts.</p>
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