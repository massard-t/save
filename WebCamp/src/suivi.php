<?php
    require "../includes/connectdb.php";
    $result     = NULL;
    $refuse     = NULL;
    $query      = 'SELECT Internship.name, Internship.place, Internship.skills, Internship.society, Internship.description FROM Internship, Users, Users_internship WHERE Internship.ID = Users_internship.intern_ID AND Users_internship.user_ID = '. $_SESSION['ID'] .' AND Users_internship.status = 2 AND Users_internship.user_ID = Users.ID;';
    $result     = mysqli_query($dtb, $query);
    $i          = 0;
    if(isset($result)){
        while ($intern = mysqli_fetch_assoc($result)){
            $refuse[$i] = $intern;
            $i++;
        }
    }
    $result     = NULL;
    $wait       = NULL;
    $query      = 'SELECT Internship.name, Internship.place, Internship.skills, Internship.society, Internship.description FROM Internship, Users, Users_internship WHERE Internship.ID = Users_internship.intern_ID AND Users_internship.user_ID = '. $_SESSION['ID'] .' AND Users_internship.status = 1 AND Users_internship.user_ID = Users.ID;';
    $result     = mysqli_query($dtb, $query);
    $i          = 0;
    if(isset($result)){
        while($intern = mysqli_fetch_assoc($result)){
            $wait[$i] = $intern;
            $i++;
        }
    }
    $result     = NULL;
    $accept     = NULL;
    $query      = 'SELECT Internship.name, Internship.place, Internship.skills, Internship.society, Internship.description FROM Internship, Users, Users_internship WHERE Internship.ID = Users_internship.intern_ID AND Users_internship.user_ID = '. $_SESSION['ID'] .' AND Users_internship.status = 0 AND Users_internship.user_ID = Users.ID;';
    $result     = mysqli_query($dtb, $query);
    $i          = 0;
    if(isset($result)){
        while($intern = mysqli_fetch_assoc($result)){
            $accept[$i] = $intern;
            $i++;
        }
    }
    $t->assign('intern_r', $refuse);
    $t->assign('intern_w', $wait);
    $t->assign('intern_a', $accept);
    $t->draw('suivi');
?>