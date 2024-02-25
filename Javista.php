<?php

class Javista extends Clovek
{

    public function __construct(string $jmeno, string $prijmeni, int $vek, string $heslo, public string $ide)
    {
        parent::__construct($jmeno, $prijmeni, $vek, $heslo);
    }

    public function programuj(): void
    {
        echo("Programuji v {$this->ide}...");
    }

    public function pozdrav(): void
    {
        echo('Hello world! Jsem ' . $this->jmeno);
    }

}

