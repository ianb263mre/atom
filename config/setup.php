<?php
//Setup file://

# Database connection here
$host = 'localhost';
$user = 'dev';
$pass = '8bFpG8DwxKqmF7h4';
$db = 'atomcms';

$dbc = mysqli_connect($host, $user, $pass, $db) OR die('Could not connect because:'.mysqli_connect_error());

# Constants
DEFINE('D_TEMPLATE', 'template');

#Functions
include('functions/data.php');
include('functions/template.php');

# Site setup
$debug = data_setting_value($dbc, 'debug-status');

$site_title = 'Atom CMS 2.0';

if(isset($_GET['page'])) {
    
    $page_id = $_GET['page']; // Set page id equal to the value in the url
    
} else {
    
    $page_id = 1; // Set page id to 1 or the home page 
    
}

# Page Setup
$page = data_page($dbc, $page_id);



