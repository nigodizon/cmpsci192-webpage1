<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
/*
 * Who: Isaiah Dizon
 * What: CMP SCI CS192 Lab Web Page Project
 * When: 10/28/26
 * What: Lab Web Page #1
 */

/************* global variables *************/
$debug251 = true;

$coname623 = "House_R_Us";
$coaddr812 = "123 Main St";
$co_city511 = "Miami FL 33101";
/************* end global variables *********/

// ------------------ debug control ------------------

if (!empty($_REQUEST['debug'])) {
    $debug251 = true;
    print "DEBUG turned ON<br>";
}
else {
    $debug251 = false;
}

// ------------------ lab 4 ------------------

if ($debug251) {
    print "Now executing Lab 4<br>";
}

print "<h2>Lab 4 Assignment</h2>";

display_name_982($coname623);
display_address_334();

print "<hr>";

// ------------------ lab 3 ------------------

if ($debug251) {
    print "Now executing Lab 3, \$debug251 contains true<br>";
}

print "<h2>Lab 3 Assignment</h2>";

print "<a href='?'>Debug OFF</a>";
print "<br>";
print "<a href='?debug=true'>Debug ON</a>";

print "<hr>";

// ------------------ lab 2 ------------------

if ($debug251) {
    print "Now executing Lab 2, \$coname623 contains $coname623<br>";
    print "\$coaddr812 contains $coaddr812<br>";
    print "\$co_city511 contains $co_city511<br>";
}

print "<h2>Lab 2 Assignment</h2>";
print "<h1>$coname623</h1>";
print "<p>$coaddr812</p>";
print "<b>$co_city511</b>";

print "<hr>";

// ------------------ lab 1 ------------------

if ($debug251) {
    print "Now executing Lab 1<br>";
}

print "<h2>Lab 1 Assignment</h2>";
print "<p>My Name Is Isaiah Dizon</p>";

// ------------------ lab 4 functions ------------------

function display_name_982($parm) {
    print "<h1>Name: $parm</h1>";
}

function display_address_334() {
    global $coaddr812, $co_city511;

    print "<b><u>Address: $coaddr812 $co_city511</u></b>";
}

?>
</body>
</html>
<!-- Isaiah Dizon, CMP SCI CS192 Lab Web Page Project, Lab Web Page #1 -->
