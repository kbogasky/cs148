<?php
    include 'top.php';
    
    print '<h1> Total Records: 7</h1>'; 
    print '<h2> SQL: SELECT fldCourseName FROM tblCourses WHERE fldCourseName LIKE "%data%" AND fldDepartment NOT LIKE "CS" </h2>';

    print '<table>';
    
    
    //now print out each record
    $query = 'SELECT fldCourseName FROM tblCourses WHERE fldCourseName LIKE "%data%" AND fldDepartment NOT LIKE "CS"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 4, 0, false, false);

    foreach ($info2 as $rec) {
        print '<tr>';
        print '<td>' . $rec[0] . '</td>';
        print '</tr>';
    }

    // all done
    print '</table>';

include "footer.php";
?>