
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Isaiah Dizon Cars</title>
</head>
<body>
<?php
/*
 * Who: Isaiah Dizon
 * What: CMP SCI CS192 Lab Web Page Project
 * When: 11/11/26
 * What: Lab Web Page #2
 */

// ------------------ parent class ------------------

class Company789 {

    // Parent class properties
    public $name6 = 'Vacay4Sale';
    private $addr6 = '789 10th St';
    private $city6 = 'New York NY 10001';

    // Create and return company header
    public function getHeader935($company, $color) {
        $data = "<table style='background-color:$color;width:100%'>";
        $data .= "<tr><td>";
        $data .= "<h1 style='text-align:center'>";
        $data .= $this->name6;
        $data .= "</h1>";
        $data .= "</td></tr></table>";

        return $data;
    }

    // Create and return company footer
    public function getFooter732($color) {
        $data = "<table style='background-color:$color;width:100%'>";
        $data .= "<tr><td style='text-align:center'>";
        $data .= "<b>";
        $data .= $this->name6 . "<br>";
        $data .= $this->addr6 . "<br>";
        $data .= $this->city6;
        $data .= "</b>";
        $data .= "</td></tr></table>";

        return $data;
    }

} // End Company789 parent class


// ------------------ lab 8 child class ------------------

class Child209 extends Company789 {

    // Child class properties
    public $main_url = "http://isaiahphpcourse.atwebpages.com";
    public $main_email = "idizon@my.canyons.edu";

    // Constructor
    public function __construct() {
        $this->name6 = "Isaiah Dizon Cars";
    }

    // Create and return HTML for main information
    public function main_info925() {

        $data = "<strong>Email Address: ";
        $data .= $this->main_email;
        $data .= "</strong>";

        $data .= "<br><br>";

        $data .= "<a href='" . $this->main_url . "'>";
        $data .= "Click HERE for Web Page #1";
        $data .= "</a>";

        return $data;
    }

} // End Child209 class


// ------------------ build web page #2 ------------------

// Create a child class object
$object925 = new Child209();

// Display the inherited company header
print $object925->getHeader935($object925->name6, "lightblue");

// Display the company's main information
print $object925->main_info925();

// Display the inherited company footer
print $object925->getFooter732("lightgray");

?>
</body>
</html>
<!-- Isaiah Dizon, CMP SCI CS192 Lab Web Page #2 -->
