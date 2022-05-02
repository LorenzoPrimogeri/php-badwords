<?php
/*
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza,
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 */
$paragrafo = "lorenzo sta iniziando a usare php!, lorenzo sta iniziando a usare php!, lorenzo sta iniziando a usare php!, lorenzo sta iniziando a usare php!";
$lunghezza =   strlen($paragrafo);
$occorrenza = $_GET["occorrenze"];

?>

<h1>
    la porzione di testo scelta è:
    <?php
    echo $paragrafo
    ?>
</h1>

<p>
    la sua lunghezza è
    <?php
    echo $lunghezza
    ?>
</p>

<?php
$sostituzione = str_replace($occorrenza, "***", $paragrafo)
?>
<p>
    l'la stringa rimuovendo l'occorenza è:
    <?php
    echo $sostituzione
    ?>

</p>