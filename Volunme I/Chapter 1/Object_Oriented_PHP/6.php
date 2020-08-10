<?php

//include '5.php';

$lookandfeel = new LookAndFeel();   // Create look and feel
$output = new Output($lookandfeel);    // Pass it to an Output

// Modify some settings
$lookandfeel->setColor('red');
$lookandfeel->setSize('large');

// Display de output
echo $output->display();
?>

