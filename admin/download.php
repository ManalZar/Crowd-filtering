<?php
/*
* iTech Empires:  Export Data from MySQL to CSV Script
* Version: 1.0.0
* Page: Export
*/

// Database Connection
require 'db_connection.php';

// get Users
$tab = $_GET["tab"];
$query = "SELECT * FROM $tab";
if (!$result = mysqli_query($conn, $query)) {
    exit(mysqli_error($conn));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
$output = fopen('php://output', 'w');
if($tab != "hybrid"){
fputcsv($output, array('id', 'name', 'email', 'expertise', 'rate1','rate2','rate3','rate4','rate5','rate6',
                        'rate7','rate8'));
} else {
    fputcsv($output, array('id','name','email','expertise','rate1_bos','rate2_bos','rate3_bos','rate4_bos','rate5_bos','rate6_bos','rate7_bos','rate8_bos',
    'rate1_bol','rate2_bol','rate3_bol','rate4_bol','rate5_bol','rate6_bol','rate7_bol','rate8_bol'));
}

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
