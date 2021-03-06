<?php

// All-But-View layer
try {
	$pietro = isset($_GET['pietro']) ? $_GET['pietro'] : 2;

	switch ($pietro) {
		case 1:
			$dziala = true; // dziala
			break;
		case 2:
			$dziala = true; // nie dziala
			break;
		case 4:
			$dziala = false;
			break;
		default:
			throw new Exception(sprintf("W SMT nie ma pietra %d", $pietro));
	}

	if ($dziala) {
		$display = 'TAK';
	} else {
		$display = 'NIE';
	}

} catch (Exception $e) {
	$display = $e->getMessage();
}

$expressBack = strtotime('2013-10-24');
$today = time();
$remainingDays = ceil(($expressBack - $today) / 86400);

// view layer
?>
<html>
<body>
<!--
If you're brave enough to browse the source, here's a bonus:

              __ __
            ,;::\::\
          ,'/' `/'`/
      _\,: '.,-'.-':.
     -./"'  :    :  :\/,
      ::.  ,:____;__; :-
      :"  ( .`-*'o*',);
       \.. ` `---'`' /
        `:._..-   _.'
        ,;  .     `.
       /"'| |       \
      ::. ) :        :
      |" (   \       |
      :.(_,  :       ;
       \'`-'_/      /
        `...   , _,'
         |,|  : |
         |`|  | |
         |,|  | |
     ,--.;`|  | '..--.
    /;' "' ;  '..--. ))
    \:.___(___   ) ))'
           SSt`-'-''

Found here: http://ascii.co.uk/art/garfield
-->
<center>
<p><img src="coffeemaker_1.png"></img></p>
<p><h1><?= $display ?></h1></p>
<?php if ($remainingDays >= 0): ?>
<p>
Do powrotu ekspresu na II pietro pozostalo <?= $remainingDays ?> dni
</p>
<?php endif ?>
</center>
</body>
</html>

