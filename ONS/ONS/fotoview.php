<html>
    <head>
        <title>ONS Vrouwencooperatief</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="top">
        <a href="index.php"><img class="logo" src="images/logo-ons.png" height="140" width="249" /></a>
        <nav>
            <ul class="navigator">
                <li class="navlist"><a class="navlink" href="index.php">Home </a></li>
                <li class="navlist"><a class="navlink" href="Activiteiten.php">Activiteiten</a></li>
                <li class="navlist"><a class="navlink" href="fotos.php">Foto's en video' s</a></li>
                <li class="navlist"><a class="navlink" href="sponsors.php">Sponsors en relaties</a></li>
                <li class="navlist"><a class="navlink" href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <h1 class="ons">ONS Vrouwencooperatief</h1> 
        </div>
        <div class="fototitel"><h1><a href="fotos.php">Terug naar Foto's en video's</a></h1></div>
        <div class="fotoalbum"> 
<?php
$db = mysql_connect("localhost","root",""); //keep your db name
mysql_select_db("ons");
$query = "SELECT * FROM tbl_images WHERE id={$_GET['id']} "; 
 
    $result = mysql_query($query);
 
    while($row = mysql_fetch_array($result)){
        echo '<img class="fotoview" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'.
        "<h2 class=\"fototekst\">{$row['omschrijving']}</h2>";
    }
 
    mysql_close($dbconn);

?>
</div>
            
        <footer>
            <div class="logofooter">
                <a href="index.php"><img class="logo" src="images/logo-ons.png" height="140" width="249" /></a>
            </div>
            <div class="maps">
            <iframe
                width="600"
                height="450"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBMax-Rae2JLNe4bmYr3Xl0PysTIdm5SLs&q=Evert+Spoorwaterstraat+41,+4827+LL+Breda" allowfullscreen>
            </iframe>
            </div>

            <div class="footnav">
                <ul class="footnavigator">
                    <li class="footerlist"><a class="footerlink" href="index.php">Home </a></li>
                    <li class="footerlist"><a class="footerlink" href="Activiteiten.php">Activiteiten</a></li>
                    <li class="footerlist"><a class="footerlink" href="fotos.php">Foto's en video' s</a></li>
                    <li class="footerlist"><a class="footerlink" href="sponsors.php">Sponsors en relaties</a></li>
                    <li class="footerlist"><a class="footerlink" href="contact.php">Contact</a></li>
                </ul>
            </div>

        </footer>
    </body>
</html>