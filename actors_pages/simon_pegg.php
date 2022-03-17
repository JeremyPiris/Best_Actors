<?php 
$title = "Simon Pegg";
$nav_en_cours = "simon";
require '../elements/header.php';
require '../elements/navbar.php';

$spkey = "nm0670408";
$bpmovies = $dataMovie->getFilmo($spkey);
$bpknown = $dataKnown->getKnown($spkey);

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
        <p>Simon John Beckingham est né dans le village de Brockworth, près de Gloucester. Sa mère, Gillian Rosemary (née Smith), était fonctionnaire et son père, John Henry Beckingham, musicien de jazz. Ses parents divorcent lorsqu'il a sept ans. Il adopte le patronyme « Pegg » après le remariage de sa mère.<br><br>

        Il a fréquenté de nombreuses écoles, dont Castle Hill Primary School à Bolton dans le Grand Manchester, Brockworth Comprehensive Secondary School puis The King's School à Gloucester, et plus tard Stratford-upon-Avon College à Stratford-upon-Avon dans le comté de Warwickshire, pour étudier la littérature anglaise et les Performance studies. Il a ensuite étudié l'art dramatique à l'Université de Bristol où il a écrit un mémoire de licence sur le Marxisme intitulée A Marxist overview of popular 1970s cinema and hegemonic discourses.<br><br>

        À Bristol, il a fait une apparition dans une adaptation de la pièce de théâtre Victory, écrite par Howard Barker, aux côtés de Sarah Kane et David Greig.<br><br>
        C'est en 1993 qu'il déménage à Londres, et qu'il fait avec succès ses premiers pas dans le milieu du stand-up. En 1995, il est invité à présenter son one-man-show au Festival international d'Édimbourg, ce qui lui vaut d'être ensuite convié à se produire dans des festivals à Adélaïde et Melbourne en Australie puis à Auckland, Wellington et Christchurch en Nouvelle-Zélande en 1996 et 1997.<br><br>

        Son travail est vite remarqué par des producteurs de télévision qui l'engagent dans des séries télévisées comme Asylum, Six Pairs of Pants, Faith in the Future, Big Train et Hippies. De 1998 à 2004, Simon Pegg est régulièrement présent à la BBC Radio 4 où il anime The 99p Challenge.</p>
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