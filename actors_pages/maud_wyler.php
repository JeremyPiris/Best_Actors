<?php 
$title = "Maud Wyler";
$nav_en_cours = "maud";
require '../elements/header.php';
require '../elements/navbar.php';

$mwkey = "nm3426050";
$bpmovies = $dataMovie->getFilmo($mwkey);
$bpknown = $dataKnown->getKnown($mwkey);

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
        <p>Née en 1982, Maud Wyler a été élevée par une mère danseuse, bercée dans les coulisses des salles de spectacle. À 5 ans à peine, elle prend ses premiers cours de théâtre. Ce goût précoce pour l’interprétation ne sera pas renié par la suite.<br><br>

        C’est en 2002, dans une adaptation théâtrale du Comte de Monte Cristo d’Alexandre Dumas, que Maud Wyler se lance véritablement sur les planches. Elle intègre ensuite le Conservatoire national supérieur d’art dramatique et décroche en 2009, à 27 ans, son premier rôle dans un long métrage, Vertige d’Abel Ferry.<br><br>

        En 2019, et avec plus d’une dizaine de films à son actif, elle est très remarquée pour son interprétation dans Perdrix, d’Erwan Le Duc.</p>
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