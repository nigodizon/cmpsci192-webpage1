
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
 * What: Lab Web Page #2
 */

// ------------------ parent class ------------------

class Company789 {

    public $name6 = 'Vacay4Sale';
    private $addr6 = '789 10th St';
    private $city6 = 'New York NY 10001';

    protected $whichpage = "Home";

    // Lab 11 - Database connection
    protected $sqldb8 = null;

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

    // ------------------ lab 11 methods ------------------

    // Connect to and select the MySQL database
    public function getDatabase673() {

        $config = require __DIR__ . "/../db_config.php";

        $dbname = $config['database'];

        try {
            // Connect to the database server
            $this->sqldb8 = new mysqli(
                $config['host'],
                $config['username'],
                $config['password']
            );

            // Select the database
            if (!$this->sqldb8->select_db($dbname)) {
                throw new Exception("Database selection failed");
            }

            print "<b>Database $dbname connect and select complete</b><br>";
        }
        catch (Exception $e) {
            if ($this->sqldb8 instanceof mysqli) {
                $this->sqldb8->close();
            }

            $this->sqldb8 = null;

            error_log("Database connection failed: " . $e->getMessage());

            print "<b>Database $dbname connect and select failed</b><br>";
        }
    }

    // Close the MySQL database connection
    public function closeDatabase463() {

        if ($this->sqldb8 instanceof mysqli) {
            $this->sqldb8->close();
            $this->sqldb8 = null;
        }

        print "<b>Database closed</b><br>";
    }

} // End Company789 parent class


// ------------------ child class ------------------

class Child209 extends Company789 {

    public $main_url = "https://isaiahphpcourse.alwaysdata.net";
    public $main_email = "idizon@my.canyons.edu";

    private $navbar_array = array();

    // Lab 8 - Constructor
    public function __construct() {
        $this->name6 = "Isaiah Dizon Cars";
    }

    // Lab 8 - Company information
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

    // ------------------ lab 9 methods ------------------

    // Create navigation array
    public function create_navbar_array() {
        $fullurl = $this->main_url . "/page2.php";

        $this->navbar_array = array(
            "Home" => "$fullurl?whichpage=Home",
            "Sales" => "$fullurl?whichpage=Sales",
            "Support" => "$fullurl?whichpage=Support",
            "Contacts" => "$fullurl?whichpage=Contacts"
        );
    }

    // Create and return navigation bar
    public function getNavBar457() {
        $data = "<table border='1' style='width:100%;text-align:center'>";
        $data .= "<tr>";

        foreach ($this->navbar_array as $name => $url) {
            $data .= "<td>";
            $data .= "<a href='$url'>$name</a>";
            $data .= "</td>";
        }

        $data .= "</tr></table>";

        return $data;
    }

    // Determine the selected page
    public function setWhichPage() {
        if (empty($_GET['whichpage'])) {
            $this->whichpage = "Home";
        }
        else {
            $page = $_GET['whichpage'];

            if (is_string($page) &&
                array_key_exists($page, $this->navbar_array)) {
                $this->whichpage = $page;
            }
            else {
                $this->whichpage = "Home";
            }
        }
    }

    // ------------------ lab 10 methods ------------------

    // Read car.txt and return an HTML table
    public function displaySpecials535() {
        $data = "<h3>Weekly Specials</h3>";
        $data .= "<table border='1' style='width:100%'>";

        // Column headings
        $data .= "<tr>";
        $data .= "<th>Product ID</th>";
        $data .= "<th>Vehicle</th>";
        $data .= "<th>Price</th>";
        $data .= "<th>Description</th>";
        $data .= "</tr>";

        // Open the product file
        $filename = __DIR__ . "/car.txt";
        $file = @fopen($filename, "r");

        if ($file === false) {
            $data .= "<tr><td colspan='4'>";
            $data .= "Unable to open car.txt";
            $data .= "</td></tr>";
        }
        else {
            // Read each line of the file
            while (($line = fgets($file)) !== false) {

                // Split each product into columns
                $myarray = explode(",", $line);

                if (count($myarray) < 4) {
                    continue;
                }

                $data .= "<tr>";

                foreach ($myarray as $item) {
                    $item = htmlspecialchars(
                        trim($item),
                        ENT_QUOTES,
                        'UTF-8'
                    );

                    $data .= "<td>$item</td>";
                }

                $data .= "</tr>";
            }

            fclose($file);
        }

        $data .= "</table>";

        return $data;
    }

    // Create the main section of the website
    public function getMain844() {
        $data = "<h1 style='text-align:center'>";
        $data .= "The " . $this->whichpage . " Page";
        $data .= "</h1>";

        if ($this->whichpage == "Home") {
            $data .= $this->displaySpecials535();
        }

        return $data;
    }

} // End Child209 class


// ------------------ build web page #2 ------------------

// Create the child class object
$object925 = new Child209();

// Lab 11 - Connect to the database FIRST
$object925->getDatabase673();

// Display company header
print $object925->getHeader935(
    $object925->name6,
    "lightblue"
);

// Initialize and display navigation bar
$object925->create_navbar_array();
print $object925->getNavBar457();

// Determine and display main page
$object925->setWhichPage();
print $object925->getMain844();

// Display company information
print $object925->main_info925();

// Display company footer
print $object925->getFooter732("lightgray");

// Lab 11 - Close the database LAST
$object925->closeDatabase463();

?>
</body>
</html>
<!-- Isaiah Dizon, CMP SCI CS192 Lab Web Page #2 -->
