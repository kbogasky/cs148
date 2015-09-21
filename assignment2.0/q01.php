<?php
    include 'top.php';
    
    print '<h1> Total Records: 1010</h1>'; 
    print '<h2> SQL: SELECT pmkNetId FROM tblTeachers </h2>';

    print '<table>';
    
    
    //now print out each record
    $query = 'SELECT pmkNetId FROM tblTeachers';
    $query2 = 'SELECT COUNT (pmkNetId) FROM tblTeachers';
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

    foreach ($info2 as $rec) {
        print '<tr>';
        print '<td>' . $rec[0] . '</td>';
        print '</tr>';
    }

    // all done
    print '</table>';
    print $query2;

include "footer.php";
?>