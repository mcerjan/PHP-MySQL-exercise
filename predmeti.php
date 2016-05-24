
    
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<?php
require '01_konekcija.php';
echo 'Navigacija<br/>';
echo '<br/><a href="index.php?">"<--Natrag"</a><br/>';

$stari = $_GET['id'];  

$query='SELECT DISTINCT 
p.nazPred, p.sifPred FROM pred p 
left outer join 
orgjed o on p.sifOrgjed=o.sifOrgjed WHERE p.sifOrgjed ='.$_GET["id"].'
ORDER BY p.nazPred ';
$result=mysql_query($query);

while ($row=  mysql_fetch_object($result))
{
   
echo '<center><a href= raspored.php?id2='.$row->sifPred.
                            '&nazpred='.str_replace(' ','_',$row->nazPred).
                            '&oldid='.$stari.'>'.$row->nazPred.'</a><br/>'
        . '</center>';
}
?>
</body>
</html>