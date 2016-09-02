<!DOCTYPE html>
<html>
<head>
	<title>Verkefni 1</title>
	<meta charset="UTF-8">
</head>
<body>
<font size="5">for the love of god just look at the source code</font><br>
</body>
</html>

Verkefni 1.

1. echo() og print() virka ekki eins, t.d echo er aðeins hraðari en print en print getur verið notað í fleiri tilfellum



2.'' er notað aðanlega til að bera framm einfldan texta á meðan "" er notaður í kóða

$a = 10;
echo "a is $a";

//Mun gefa út

a is 10

síðan

echo 'Variables do not $expand $either';

Variables do not $expand $either

//mun gefa út

er munurinn


3.$GLOBALS er array sem nær í allar breytur í global skriptinu

<?php
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
?>

mun gefa út eitthvað eins og

$foo in global scope: Example content
$foo in current scope: local variable


4. munurinn á milli == og === er að maður myni nota == ef $a og $b eru jafnir. Maður myndi nota === ef $a og $b eru alveg eins.

1 === 1: true
1 == 1: true
1 === "1": false
1 == "1": false
"foo" === "foo": true 


5. maður getur notað printf() í setningum ánðess a brjóta þær upp.

t.d

$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);

There are 9 million bicycles in Beijing.

6.
$a = 1; breytan a er jafnt og 1
$b = $a++; // b er jafnt og a plús 1 "2"
$c = ++$a; //frekar viss um að þetta er bilaður texti
echo $a . $b . $c; //skrifar breyturnar


7. echo count($array); //ætti að virkar vel


8.
<?php
$country = array("Japan"=>"tokyo", "mexico"=>"Mexico City", "USA"=>"New york", "India"=>"Mumbai", "Korea"=>"Seoul", "China"=>"Shanghai",);

foreach($country as $x => $x_value) {
    echo "Country=" . $x . ", Capital=" . $x_value;
    echo "<br>";
}
?>


9.
<?php
$colors = array("red","blue","green");

list($a, $b, $c) = $array;
echo "i love colours, my favourite are , $a, $b and $c.";
?>


10.$states = array("California","Texas", "Ohio","New York");


11.
<?php
$states = array("California","Texas", "Ohio","New York");

shuffle($states);
print_r($states);
?>

Array
(
    [0] => Ohio
    [1] => California
    [2] => Texas
    [3] => New York
)



13.
<?php
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");

vprintf("Name: %nam <br />E-mail: %ema <br />Phone: $pho.",array($nam,$ema,$pho));

<p>
Name: Jason Gilmore<br />
E-mail: jason@example.com <br />
Phone: 614-999-9999
</p>
?>



14.$pic = array("pic2.jpg", "PIC10.jpg", "pic20.jpg", "pic1.jpg");

a. sort() mun bara setja saman hluti í röð með engan alvöru "rhythm" t.d 1,5,3,4,2

b. natcase mun setja það í röð eftir breytum t.d 1,2,3,4,5



15.serverinn tengir ekki neina þýðingu við http og statelss þýðir að það mun hava ekkert að gera með önnur http fyrir en að það fær verk.



16. "http://" er protocol sem vafrinn þarf að nota, það og "https" eru protocolin sem vafrar nota oftast, en að nota mailto og ftp er líka hægt.

"tskoli.is" er nafnið á vefsíðuni og segjir hvaða server er að vera sækja í, þetta er notað í staðinn fyrir beint ip connection.


17.ég held að server side scripting er ferlið að senda skiparnir í frá serverinum í formi scripts til að segja vefsíðunni til að gera eitthvað sérstakt, t.d auglýsingar

- Styrkár Blær Styrmirsson
- 0501983759
- vef verk 1 
- eftir sumar 2016