<?php
    include 'top.php';
    
    print '<h1> Total Records: 4</h1>'; 
    //Page 48 of book
    print '<h2> SQL: SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId LIKE "r%o" </h2>';

    print '<table>';
    
    
    //now print out each record
    $query = 'SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId LIKE "r%o"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);

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