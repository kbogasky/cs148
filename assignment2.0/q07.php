<?php
    include 'top.php';
    
    print '<h1> Total Records: 133</h1>'; 
    // http://www.w3schools.com/sql/sql_distinct.asp
    print '<h2> SQL: SELECT DISTINCT fldDepartment FROM tblCourses </h2>';

    print '<table>';
    
    
    //now print out each record
    $query = 'SELECT DISTINCT fldDepartment FROM tblCourses';
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

    foreach ($info2 as $rec) {
        print '<tr>';
        print '<td>' . $rec[0] . '</td>';
        print '</tr>';
    }

    // all done
    print '</table>';

include "footer.php";
?>