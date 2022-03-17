<?php 
$title = "François Rollin";
$nav_en_cours = "francois";
require '../elements/header.php';
require '../elements/navbar.php';

$frkey = "nm0738391";
$bpmovies = $dataMovie->getFilmo($frkey);
$bpknown = $dataKnown->getKnown($frkey);

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
        <p>François Rollin est diplômé de l'École supérieure des sciences économiques et commerciales (ESSEC). Avec des ex-condisciples de l'ESSEC, il fonde le groupe de chanson burlesque « Tchouk Tchouk Nougâh », qui enregistre quelques disques et se produit sur scène dans les années 1980.<br><br>

        D'abord journaliste au Monde, puis chroniqueur dans les revues Vu de gauche et Fluide glacial, il acquiert la notoriété grâce à la série télévisée Palace où il crée le personnage du « Professeur Rollin ».<br><br>

        François Rollin multiplie ensuite les apparitions sur scène, à la télévision et à la radio. Il a également publié plusieurs livres et apparaît plusieurs fois au cinéma, notamment à partir des années 2000.<br><br>

        En parallèle de sa carrière de seul en scène, François Rollin a également coécrit et/ou mis en scène les spectacles de plusieurs artistes tels qu'Arnaud Tsamère, Pierre Palmade, Chantal Ladesou, Jean-Marie Bigard, Guy Carlier ou Vincent Dedienne.</p>
    </div>

    <div class="trucs-bien">
        <h1>Trucs bien</h1>
        <iframe width="280" height="157" src="https://www.youtube.com/embed/videoseries?list=PL7235B9BEC7C02341" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="280" height="157" src="https://www.youtube.com/embed/videoseries?list=PLBghUzPbkCLSVAL-81MG2DBoaEibK0ZaJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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