<?php 

class Book
{

private $Titill;
private $Verd;

public function __construct()
	{
		$this->Titill =  '';
		$this->Verd = '';
	}

public function setPrice($Verd)
	{
		$this->Verd = $Verd;
	}

public function getPrice()
	{
		return $this->Verd.' <br/>';
	}

public function setTitle($Titill)
	{
		$this->Titill = $Titill;
	}
	
public function getTitle()
	{
    	return $this->Titill.' <br/>';
	}
}


class Bokabok extends Book
{

private $Publisher;

public function __construct()
	{
		$this->Publisher = '';
	}

public function getPublisher()
	{
		return $this->Publisher. "<br />";
	}


public function setPublisher($Publisher)
	{
		$this->Publisher = $Publisher;	
	}

}

$Efnafraedi = new Book();
$Pefnafraedi = new Bokabok();
$Efnafraedi->setTitle("How the world works");
$Efnafraedi->setPrice("5,000");
$Pefnafraedi->setPublisher("The man with the plan");

$Sterfraedi = new Book();
$Psterfraedi = new Bokabok();
$Sterfraedi->setTitle("Math 101");
$Sterfraedi->setPrice("10,000");
$Psterfraedi->setPublisher("math man 3000");

$Islenska = new Book();
$Pislenska = new Bokabok();
$Islenska->setTitle("icelandic for you");
$Islenska->setPrice("3,000");
$Pislenska->setPublisher("the lady man");


echo $Efnafraedi->getTitle();
echo $Efnafraedi->getPrice();
echo $Pefnafraedi->getPublisher();

echo "<br />";
echo $Islenska->getTitle();
echo $Islenska->getPrice();
echo $Pislenska->getPublisher();

echo "<br />";
echo $Sterfraedi->getTitle();
echo $Sterfraedi->getPrice();
echo $Psterfraedi->getPublisher();


?>