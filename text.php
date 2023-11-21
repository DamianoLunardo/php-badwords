<?php 
$text = 'Febbraio è sbarazzino.
Non ha i riposi del grande inverno,
ha le punzecchiature,
i dispetti
di primavera che nasce.
Dalla bora di febbraio
requie non aspettare.
Questo mese è un ragazzo
fastidioso, irritante
che mette a soqquadro la casa, rimuove il sangue, annuncia il folle
marzo
periglioso e mutante.';

$parolaDaCensurare = $_GET['parola'];

?>

<div>
    <h1>Testo originale</h1>
    <div><?php echo $text; ?></div>
    <h5>Lunghezza del testo originale: <?php echo strlen($text); ?> caratteri</h5>
</div>

<?php
$paragrafoCensurato = str_replace($parolaDaCensurare, '***', $text);
?>

<div>
    <h1>Testo censurato</h1>
    <div><?php echo $paragrafoCensurato; ?></div>
    <h5>Lunghezza del testo censurato: <?php echo strlen($paragrafoCensurato); ?> caratteri</h5>
</div>


