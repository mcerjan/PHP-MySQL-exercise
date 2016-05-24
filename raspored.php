<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once '01_konekcija.php';
            echo 'Navigacija<br/>';
            echo '<a href = predmeti.php?id='.$_GET['oldid'].'><--Natrag</a>'
                    . '<br/><br/>';
        
        $query= 'SELECT * FROM rezervacija r
                    INNER JOIN dvorana d
                    ON r.oznDvorana = d.oznDvorana
                    WHERE 
                    r.sifPred ='.$_GET['id2'];
         
         $result = mysql_query($query,$db);
                  
        while ($row = mysql_fetch_object($result))
                {
                    
                echo '<center><i>'.str_replace('_',' ',$_GET['nazpred']).':</i>'
                            . '<br/><br/></center>';
                    
                    switch ($row->oznVrstaDan)
                    {
                        case "PO":
                            echo '<center><i>Ponedjeljak, </i>'
                            . '<i>'.$row->sat.'.00h Dvorana: '
                            .$row->oznDvorana
                            .' (Br. Mjesta: '.$row->kapacitet.')</i></center>';
                            
                            break;
                        
                        case "UT":
                            echo '<center><i>Utorak, </i>'
                            . '<i>'.$row->sat.'.00h Dvorana: '
                            .$row->oznDvorana
                            .' (Br. Mjesta: '.$row->kapacitet.')</i></center>';
                            break;
                        
                        case "SR":
                            echo '<center><i>Srijeda, </i>'
                            . '<i>'.$row->sat.'.00h Dvorana: '
                            .$row->oznDvorana
                            .' (Br. Mjesta: '.$row->kapacitet.')</i></center>';
                            break;
                        
                        case "CE":
                            echo '<center><i>Četvrtak, </i>'
                            . '<i>'.$row->sat.'.00h Dvorana: '
                            .$row->oznDvorana
                            .' (Br. Mjesta: '.$row->kapacitet.')</i></center>';
                            break;
                        
                        case "PE":
                            echo '<center><i>Petak, </i>'
                            . '<i>'.$row->sat.'.00h Dvorana: '
                            .$row->oznDvorana
                            .' (Br. Mjesta: '.$row->kapacitet.')</i></center>';
                            break;
                    }
                    
                               }?>
    </body>
</html>
