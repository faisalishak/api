<?php
include "API/Conection.php";

//MySqli Select Query
$results = $mysqli->query("SELECT id_user, password_user, city_user, first_name, last_name FROM users");

//output results
print '<h3>SELECT Multiple Records as Array</h3>';

print 'ID User : <input class="input-text" type="text"><br>';
print 'Password : <input class="input-text" type="text">';

print '<table border="1">';
while($row = $results->fetch_array()) {
    print '<tr>';
    print '<td>'.$row["id_user"].'</td>';
    print '<td>'.$row["password_user"].'</td>';
    print '<td>'.$row["city_user"].'</td>';
    print '<td>'.$row["first_name"].'</td>';
    print '<td>'.$row["last_name"].'</td>';
    print '</tr>';
}  
print '</table>';

// Frees the memory associated with a result
$results->free();

// close connection 
$mysqli->close();