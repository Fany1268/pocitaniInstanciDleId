<?php

class FormatHelper
{
    /**
     * Zformátuje hodnotu jako částku v českých korunách
     * @param float $cena Cena
     * @return string Částka v českých korunách
     */
    public static function mena(float $cena): string
    {
        return number_format($cena, 2, ',', ' ') . ' Kč';
    }



    /**
     * Zformátuje boolean hodnotu jako Ano/Ne
     * @param bool $hodnota Boolean hodnota
     * @return string Hodnota Ano/Ne
     */
    public static function anoNe(bool $hodnota): string
    {
        return $hodnota ? 'Ano' : 'Ne';
    }




    /**
     * Zkrátí text na požadovanou maximální délku tak, že ho usekne a zakončí "..."
     * @param string $text Text
     * @param int $delka Počet znaků
     * @return string Zkrácený text
     */
    public static function kratkyText(string $text, int $delka): string
    {
        if (mb_strlen($text) - 3 > $delka)
            $text = mb_substr($text, 0, $delka - 3) . '...';
        return $text;
    }

    /*
     *
        //mb_strlen-Získá délku řetězce.
        //mb_strpos-Najde pozici prvního výskytu podřetězce v řetězci.
        //mb_substr-Vrátí podřetězec od startovní pozice s určitým počtem znaků.
        //mb_strtoupper-Převede všechna písmena v rětězci na velká.
        //mb_strtolower-Převede všechna písmena v rětězci na malá.
        //trim-Odstraní bílé místo na okolo řetězce.
        //htmlspecialchars-Převede speciální znaky v textu na HTML entity.
        //htmlspecialchar­s_decode-Převede entity v textu zpět na speciální znaky.
        //strip_tags-Odstraní z daného řětězce HTML tagy.
        //nl2br-Nahradí konce řádků (\n) tagem <br />
        //str_replace-Nahradí všechny výskyty podřetězce v řetězci daným podřetězcem.
        //strtr-Přeloží podřetězce podle slovníku.
        //parse_st-Rozbalí proměnné z textového řetězce ve tvaru QUERY stringu.
        //explode-Převede řetězec na pole podřetězců.
        //implode-Zabalí pole do textového řetězce.
        //hash-Vypočítá otisk (hash) řetězce, což budeme potřebovat pro ukládání hesel.

     */

}