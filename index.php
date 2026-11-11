
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
 * When: 11/10/26
 * What: Lab Web Page #1
 */

/************* global variables *************/
$debug251 = true;

$coname623 = "House_R_Us";
$coaddr812 = "123 Main St";
$co_city511 = "Miami FL 33101";

$myarray664 = null;
$house_array = null;
/************* end global variables *********/

// ------------------ debug control ------------------

if (!empty($_REQUEST['debug'])) {
    $debug251 = true;
    print "DEBUG turned ON<br>";
}
else {
    $debug251 = false;
}

// ------------------ lab 7 ------------------

if ($debug251) {
    print "Now executing Lab 7<br>";
}

print "<h2>Lab 7 Assignment</h2>";

// Create an object from the Company789 class
$object593 = new Company789();

// Call and print the header method
print $object593->getHeader935($object593->name6, "lightblue");

// Separate the header and footer
print "<br><br>";

// Call and print the footer method
print $object593->getFooter732("lightgray");

print "<hr>";

// -------- WARNING: CODE SHIFT --------
// Code above this line is Object Oriented.
// Code below this line is procedural.

// ------------------ lab 6 ------------------

if ($debug251) {
    print "Now executing Lab 6<br>";
}

print "<h2>Lab 6 Assignment</h2>";

print getHeader935($coname623, "lightblue");

print "<br><br>";

print getFooter732("lightgray");

print "<hr>";

// ------------------ lab 5 ------------------

if ($debug251) {
    print "Now executing Lab 5<br>";
}

print "<h2>Lab 5 Assignment</h2>";

$myarray664 = create_array_908();

display_product_872($myarray664);

print "<hr>";

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

// ------------------ lab 7 class ------------------

class Company789 {

    // Object properties
    public $name6 = 'Vacay4Sale';
    private $addr6 = '789 10th St';
    private $city6 = 'New York NY 10001';

    // Header method
    public function getHeader935($company, $color) {
        $data = "<table style='background-color:$color;width:100%'>";
        $data .= "<tr><td>";
        $data .= "<h1 style='text-align:center'>$company</h1>";
        $data .= "</td></tr></table>";

        return $data;
    }

    // Footer method
    public function getFooter732($color) {
        $data = "<table style='background-color:$color;width:100%'>";
        $data .= "<tr><td style='text-align:center'>";
        $data .= $this->name6 . "<br>";
        $data .= $this->addr6 . "<br>";
        $data .= $this->city6;
        $data .= "</td></tr></table>";

        return $data;
    }

} // End Company789 class

// ------------------ lab 6 functions ------------------

function getHeader935($company, $color) {
    $data = "<table style='background-color:$color;width:100%'>";
    $data .= "<tr><td>";
    $data .= "<h1 style='text-align:center'>$company</h1>";
    $data .= "</td></tr></table>";

    return $data;
}

function getFooter732($color) {
    global $coname623, $coaddr812, $co_city511;

    $data = "<table style='background-color:$color;width:100%'>";
    $data .= "<tr><td style='text-align:center'>";
    $data .= "$coname623<br>";
    $data .= "$coaddr812<br>";
    $data .= "$co_city511";
    $data .= "</td></tr></table>";

    return $data;
}

// ------------------ lab 5 functions ------------------

function create_array_908() {
    global $house_array;

    $house_array = array();

    $house_array[] = "ID: MLS123, Address: 123 Main St. Santa Clarita, $650000.00, 3+2 in the heart of town near mall";
    $house_array[] = "ID: MLS456, Address: 456 Palmdale Blvd, Palmdale, $199950.00, 4+1.75 in Pretty Palmdale";
    $house_array[] = "ID: MLS789, Address: 789 Snob Hill, Valencia, $799950.00, 4+3 View Home, live above the rest";
    $house_array[] = "ID: MLS654, Address: 654 Horse Feathers, Newhall, $599900.00, 2+1 on a huge horse zoned lot";

    return $house_array;
}

function display_product_872($array) {
    print "<h3>Current Houses for Sale</h3>";

    print "<table border='1'>";

    foreach ($array as $house) {
        print "<tr>";
        print "<td>$house</td>";
        print "</tr>";
    }

    print "</table>";
}

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
