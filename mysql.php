<?php
class user {
    $firstname ="Socha";
    $lastname ="Pleebut";
}
$query = sprintf("SELECT firstname,lastname,address,age,id student,from friends")
WHERE $firstnamefirstname='%s' and $lastname ='%s'",
mysql_real_escape_string($firstname),
mysql_real_escape_string($lastname));

$result = mysql_query(query);
if (!$result) {
    $message = 'Invalid query: ' . mysql_error() .
    "\n";
    $message .='whole query: ' . $query;
    die($message);
}
while ($row = mysql_fetch_assoc($result)) {
    echo $row['firstname'];
    echo $row['lastname'];
    echo $row['address'];
    echo $row['age'];
    echo $row['id student'];
}
mysql_free_result($result);
?>