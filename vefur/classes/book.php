<?php 

class Book {

var $Titill;
var $Verd;



function __construct($par1,$par2)
	{
		$this->Titill = $par1;
		$this->Verd = $par2;
	}

function setPrice($par)
	{
		$this->Verd = $par;
	}

 function getPrice()
	{
		echo $this->Verd.' <br/>';
	}

 function setTitle($par)
	{
		$this->Titill = $par;
	}
	
 function getTitle()
	{
    	echo $this->Titill.' <br/>';
	}
}



class Bokabok extends Book
{

var $Publisher;


function getPublisher()
{
	echo $this->Publisher. "<br />";
}


 function setPublisher($par)
{
	$this->Publisher = $par;	
}

function __construct()
{
$Efnafraedi = new Book;
$Sterfraedi = new Book;
$Islenska = new Book;

$Efnafraedi->setTitle("Efnafræði 101 ");
$Efnafraedi->setPrice("2000 KR");
$Efnafraedi->setPublisher("spooky dood");

$Sterfraedi->setTitle("Stærðfræði 101 ");
$Sterfraedi->setPrice("5000 KR");
$Sterfraedi->setPublisher("math man");

$Islenska->setTitle("Íslenka 101 ");
$Islenska->setPrice("3000 KR");
$Islenska->setPublisher("Íslenska 101");

$Efnafraedi->getTitle();
$Efnafraedi->getPrice();
$Efnafraedi->getPublisher();

$Sterfraedi->getTitle();
$Sterfraedi->getPrice();
$Sterfraedi->getPublisher();

$Islenska->getTitle();
$Islenska->getPrice();
$Islenska->getPublisher();

print $this->Efnafraedi."plsno";
}

}

  ?>
