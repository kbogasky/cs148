<?php
    include 'top.php';
    
    print '<h1> Total Records: 1</h1>'; 
    print '<h2> SQL: SELECT * FROM tblSections WHERE fldCRN ="95470" </h2>';

    print '<table>';
    
    
    //now print out each record
    $query = 'SELECT * FROM tblSections WHERE fldCRN ="95470"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);

    foreach ($info2 as $rec) {
        print '<tr>';
        print '<td>' . $rec[0] . '</td>';
        print '<td>' . $rec[1] . '</td>';
        print '<td>' . $rec[2] . '</td>';
        print '<td>' . $rec[3] . '</td>'; 
        print '<td>' . $rec[4] . '</td>';
        print '<td>' . $rec[5] . '</td>';
        print '<td>' . $rec[6] . '</td>';
        print '<td>' . $rec[7] . '</td>';   
        print '<td>' . $rec[8] . '</td>';
        print '<td>' . $rec[9] . '</td>';
        print '<td>' . $rec[10] . '</td>';
        print '<td>' . $rec[11] . '</td>';           
        print '</tr>';
    }

    // all done
    print '</table>';

include "footer.php";
?>