<?php
    include 'top.php';
    
    print '<h1> Total Records: 51</h1>'; 
    print '<h2> SQL: SELECT fldBuilding, SUM(fldNumStudents) FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY (fldBuilding) ORDER BY (SUM(fldNumStudents)) </h2>';

    print '<table>';
    
    
    //now print out each record
    $query = 'SELECT fldBuilding, SUM(fldNumStudents) FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY (fldBuilding) ORDER BY (SUM(fldNumStudents))';
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);

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