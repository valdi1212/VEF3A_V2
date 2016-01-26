<?php

class Bok
{
    protected $titill;
    protected $verd;

    function setPrice($verd)
    {
        $this->verd = $verd;
    }

    function getPrice()
    {
        echo $this->verd;
    }

    function setTitle($titill)
    {
        $this->titill = $titill;
    }

    function getTitle()
    {
        echo $this->titill;
    }

    function __construct($titill, $verd)
    {
        $this->setTitle($titill);
        $this->setPrice($verd);
    }
}

class BokMedPublisher extends Bok
{
    protected $utgefandi;

    function setPublisher($utgefandi)
    {
        $this->utgefandi = $utgefandi;
    }

    function getPublisher()
    {
        echo $this->utgefandi;
    }
}

$efnafraedi = new Bok("Efnafræði 101", 6990);
$staerdfraedi = new Bok("STÆ 303", 5990);
$islenska = new BokMedPublisher("Íslenska 101", 3990);

$islenska->setPublisher("Mál og Menning");

$islenska->getTitle();
echo "\n";
$islenska->getPublisher();
echo "\n";
$islenska->getPrice();