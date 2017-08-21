<?php

$dbconn = mysql_connect("localhost","root",""); //keep your db name
mysql_select_db("ons");

// Make sure the user actually

// selected and uploaded a file


if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {


    // Temporary file name stored on the server

    $tmpName = $_FILES['image']['tmp_name'];


    // Read the file

    $fp = fopen($tmpName, 'r');

    $data = fread($fp, filesize($tmpName));

    $data = addslashes($data);

    fclose($fp);

    $des = $_POST["omschrijving"];  



    // Create the query and insert

    // into our database.

    $query = "INSERT INTO tbl_images ";

    $query .= "(image, omschrijving) VALUES ('$data','$des')";

    $results = mysql_query($query, $dbconn);


    // Print results

    print "De afbeelding is toegevoegd <br />".
        '<a href="admin.php">Klik hier om nog een afbeelding toe te voegen </a> <br />'.
        '<a href="index.php">Klik hier om terug te gaan naar de home pagina </a> <br />';


}

else {

    print "De afbeelding is niet toegevoegd, u mist een afbeelding of een beschrijving".
        '<a href="admin.php">Klik hier om nog een afbeelding toe te voegen </a> <br />';

}


// Close our MySQL Link

mysql_close($link);

?>