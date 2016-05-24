<html>
    
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<?php

require '01_konekcija.php';

$query = 'SELECT DISTINCT sifOrgjed, nazOrgjed FROM orgjed ORDER BY nazOrgjed';

$result = mysql_query($query, $db);

while ($row=  mysql_fetch_assoc($result))
{#echo '<pre>'.print_r($row,1).'</pre>';
    echo '<a href="predmeti.php?id='.$row['sifOrgjed'].'">'.$row['nazOrgjed'].
            '<a/><br/>';
}


?>
</body>
</html>
