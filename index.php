<?php

// All-But-View layer
try {
	$pietro = isset($_GET['pietro']) ? $_GET['pietro'] : 2;

	switch ($pietro) {
		case 1:
			$dziala = true; // dziala
			break;
		case 2:
			$dziala = false; // nie dziala
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



// view layer
?>


<html>
<body>
<center><h1><?= $display ?></h1></center>
</body>
</html>

