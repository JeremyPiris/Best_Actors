<?php 
$title = "Benoit Poelvoorde";
$nav_en_cours = "benoit";
require '../elements/header.php';
require '../elements/navbar.php';

$bpkey = "nm0688143";
$bpmovies = $dataMovie->getFilmo($bpkey);
$bpknown = $dataKnown->getKnown($bpkey);

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
        <p>Benoît Poelvoorde est le fils cadet d'un père routier et de Jacqueline Pappaert, épicière (que l'on peut voir dans son propre rôle dans le film C'est arrivé près de chez vous). À 12 ans, après la mort de son père, il est placé chez les Jésuites à l'internat de Godinne en Belgique. À 17 ans et demi, Poelvoorde quitte le domicile familial pour suivre des cours d'arts appliqués à l'institut technique Félicien Rops à Namur où il rencontre Rémy Belvaux.<br><br>

        Poelvoorde se passionne pour le théâtre et se fait remarquer grâce à ses interprétations atypiques. Durant ses études de graphisme à l'École de recherche graphique de Bruxelles, il se lie d'amitié avec André Bonzel et, avec Rémy Belvaux, ils réalisent Pas de C4 pour Daniel Daniel.<br><br>

        Quatre ans plus tard, en 1992, le trio récidive en réalisant le long métrage : C'est arrivé près de chez vous. Inspiré de la célèbre émission belge Strip-Tease, mélangeant cynisme, humour et drame et réalisé avec relativement peu de moyens (200 000 francs), ce film obtient rapidement un succès retentissant, qui le propulse au rang de film culte. Cette même année, Poelvoorde rencontre sa future épouse, Coralie, alors assistante à la Semaine de la Critique au Festival de Cannes.</p>
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



