<?php
    include 'top.php';
    
    print '<h1> Total Records: 59</h1>'; 
    print '<h2> SQL: SELECT fldBuilding, COUNT(*) as numberSections FROM tblSections GROUP BY (fldBuilding) </h2>';

    print '<table>';
    
    
    //now print out each record
    $query = 'SELECT fldBuilding, COUNT(*) as numberSections FROM tblSections GROUP BY (fldBuilding)';
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

    foreach ($info2 as $rec) {
        print '<tr>';
        print '<td>' . $rec[0] . '</td>';
        print '<td>' . $rec[1] . '</td>';        
        print '</tr>';
    }

    // all done
    print '</table>';

include "footer.php";
?>