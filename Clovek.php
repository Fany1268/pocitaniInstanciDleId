<?php

class Clovek
{
    private int $unava = 0;
    public int $id;
    private static int $pocetLidi = 0;

    public function __construct(public string $jmeno, public string $prijmeni, public int $vek, private string $heslo)
    {
        self::$pocetLidi++;
        $this->id = self::$pocetLidi;
    }

    public function spi(int $doba): void
    {
        $this->unava -= $doba * 10;
        if ($this->unava < 0)
            $this->unava = 0;
    }

    public function behej(int $vzdalenost): void
    {
        if ($this->unava + $vzdalenost <= 20)
            $this->unava += $vzdalenost;
        else
            echo('Jsem příliš unavený.');
    }

    public function pozdrav(): void
    {
        echo('Ahoj, já jsem ' . $this->jmeno);
    }

    protected function celeJmeno(): string
    {
        return $this->jmeno . ' ' . $this->prijmeni;
    }

    public function __toString(): string
    {
        return $this->jmeno . ' - ' . $this->id;
    }

    /*
     * vstup ve stringu $heslo
     * výstup bool pravda nebo nepravda viz. mb_strlen >= 5
     */
    public static function validniHeslo(string $heslo): bool
    {
        return (mb_strlen($heslo) >= 5);    // > nebo < psát před =
    }

}




