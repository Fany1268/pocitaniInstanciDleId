<?php

mb_internal_encoding("UTF-8");

spl_autoload_register("nactiTridu");
function nactiTridu(string $trida): void
{
    require("tridy/$trida.php");
}



/*
 * vypíše jména a pořadí, z nějakého důvodu nechce vypsat javisty
 */
/*
$lide = array();
$lide[] = new Clovek('Karel', 'Novák', 30);
$lide[] = new Javista('Jan', 'Hnědý', 24);
$lide[] = new Clovek('Josef', 'Nový', 50);
$lide[] = new Javista("Tomáš", 'Marný', 28);
$lide[] = new Clovek("Marie", "Nová", 32);

foreach ($lide as $clovek) {
    echo($clovek . '<br />');  //echo jako $clovek vypsaný do stringu lze pouze když je ve třídě funkce __toString
}
*/


//
/*
foreach ($lide as $clovek) {
    $clovek->pozdrav();
    echo('<br />');
}
*/




$heslo = "hesl";
if (Clovek::validniHeslo($heslo)){ //zavolám statickou funkci validniHeslo
    new Clovek('Fanda', 'Nováček', 35, $heslo); //pokud heslo splňuje podmínky viz. 
    echo ("Heslo je OK");
}
else
    echo("Heslo musí být delší než 5 znaků");






echo ('<br>');
/*
 *Vypsání statických funkcí z FormatHelperu
 */
echo('<li>Lekce programování stojí ' . FormatHelper::mena(350));

echo('<li>Elektrická okénka: ' . FormatHelper::anoNe(false));

echo('<li>' . FormatHelper::kratkyText('To jsem jednou takhle implementoval rozhraní a v tom jsem narazil na výjimku', 50));






//touto funkcí jsem si změřil délku textu
echo '</br>';
$textik = "To jsem jednou takhle implementoval rozhraní a v tom jsem narazil na výjimku";
$tx = mb_strlen($textik);
echo($tx);





echo('</br>');
/*
 * Praktické využití pro ověření validity uživatelské přezdívky:
 */
$nickname = 'Honza';
if (preg_match('/\A[A-Za-z0-9]{4,16}\z/', $nickname)) {
    echo 'Přezdívka "'.$nickname.'" je v pořádku!';
} else {
    echo 'Přezdívka "'.$nickname.'" není v pořádku!';
}

echo '<br>';

$nickname = 'El Banana';
if (preg_match('/\A[A-Za-z0-9]{4,16}\z/', $nickname)) {
    echo 'Přezdívka "'.$nickname.'" je v pořádku!';
} else {
    echo 'Přezdívka "'.$nickname.'" není v pořádku!';
}