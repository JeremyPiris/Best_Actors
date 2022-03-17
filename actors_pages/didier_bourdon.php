<?php 
$title = "Didier Bourdon";
$nav_en_cours = "didier";
require '../elements/header.php';
require '../elements/navbar.php';

$dbkey = "nm0099828";
$bpmovies = $dataMovie->getFilmo($dbkey);
$bpknown = $dataKnown->getKnown($dbkey);

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
        <p>Didier Bourdon naît à Alger le 22 janvier 19592 d'un père agent EDF et d'une mère au foyer. Il a un frère aîné et une sœur cadette.<br><br>

        La famille Bourdon, comme beaucoup de pieds-noirs, est rapatriée en France en 1962. Elle habite d’abord à Paris, puis à Mulhouse, à Biarritz, avant de s’établir à Saint-Germain-en-Laye, au gré des mutations professionnelles du père de Didier Bourdon.<br><br>

        À 11 ans, en 1970, il monte une pièce de Courteline avec ses amis de collège. À 20 ans, en 1979, il entre au Conservatoire national (promotion 1981) avec comme camarade de jeu Christophe Lambert.<br><br>

        En 1982, il s'installe à Paris et débute au Petit Théâtre de Bouvard. C’est là qu’il rencontre Bernard Campan, Pascal Légitimus, Smaïn, ainsi que Seymour Brussel. Entre 1986 et 1988 se créera le trio des « Inconnus », qui en 1991 sera consacré par le Molière du rire.</p>
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