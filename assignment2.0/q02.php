<?php
    include 'top.php';
    
    print '<h1> Total Records: 12</h1>'; 
    print '<h2> SQL: SELECT fldCourseName FROM tblCourses WHERE fldCourseName Like "Introduction%" </h2>';

    print '<table>';
    
    
    //now print out each record
    $query = 'SELECT fldDepartment FROM tblCourses WHERE fldCourseName Like "Introduction%"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);

    foreach ($info2 as $rec) {
        print '<tr>';
        print '<td>' . $rec[0] . '</td>';
        print '</tr>';
    }

    // all done
    print '</table>';

include "footer.php";
?>