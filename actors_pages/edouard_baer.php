<?php 
$title = "Edouard Baer";
$nav_en_cours = "edouard";
require '../elements/header.php';
require '../elements/navbar.php';

$ebkey = "nm0046347";
$bpmovies = $dataMovie->getFilmo($ebkey);
$bpknown = $dataKnown->getKnown($ebkey);

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
        <p>Édouard Baer est issu d'une famille juive alsacienne du côté paternel. Il est le frère de Pauline Baer et du chanteur Julien Baer, et il est le petit-neveu du parolier et écrivain René Baer. Son père, Philippe Baer, gaulliste, énarque et ami de Jean d'Ormesson, a siégé à la Cour des comptes, passionné d'art, il possède un magasin de brocante et a pantouflé en tant que président de l'UGC puis Président du conseil d'administration. Sa mère, Isabelle Saint-André-Perrin, catholique fervente, est issue d'une riche famille d'industriels lyonnais, et, en lignée cognatique, de la famille de Nassau.<br><br>

        Édouard Baer grandit à Paris : « Chez les Baer, il faut s'instruire, lire, faire toujours mieux, être spirituel sans trop la ramener ». Il étudie, notamment au Collège Stanislas puis à l'École alsacienne (au lycée, entre 1983 et 1984) où il obtient un bac B (économique).<br><br>

        À 18 ans, il s'inscrit au cours Florent, où il est l'élève de l'actrice et metteuse en scène Isabelle Nanty, dont il deviendra l'assistant.<br><br>

        Durant quelques années, il travaille comme employé de banque.<br><br>
        Baer rencontre Ariel Wizman puis, en 1993, les deux compères commencent à animer ensemble La Grosse Boule, émission diffusée sur Radio Nova jusqu’en 1997. Après un détour par Canal Jimmy pour l’émission Nonante en 1993, ils se font remarquer par Alain de Greef et animent, en 1994, leur propre émission sur Canal+ : À la rencontre de divers aspects du monde contemporain ayant en commun leur illustration sur support audiovisuel. De 1997 à 1999, Édouard Baer continue seul sur Canal+, et anime la rubrique du Centre de visionnage.</p>
    </div>

    <div class="trucs-bien">
        <h1>Trucs bien</h1>
        <iframe width="280" height="157" src="https://www.youtube.com/embed/videoseries?list=PL3C5222688377D77D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="280" height="157" src="https://www.youtube.com/embed/videoseries?list=PL3D5C05619007C8B6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="280" height="157" src="https://www.youtube.com/embed/videoseries?list=PL9wDNu3ZrVQ7ZnWU5SQZPVrOZMXI6gP78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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