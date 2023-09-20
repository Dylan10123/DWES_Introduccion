<?php 
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {
        $passwd = [];
        for ($i=0; $i < $upper ; $i++) { 
            array_push($passwd, chr(rand(65, 90)));
        }

        for ($i=0; $i < $lower ; $i++) { 
            array_push($passwd, chr(rand(97, 122)));
        }

        for ($i=0; $i < $numeric ; $i++) { 
            array_push($passwd, chr(rand(48, 57)));
        }

        for ($i=0; $i < $other ; $i++) { 
            array_push($passwd, chr(rand(33, 47)));
        }

        shuffle($passwd);

        $randPasswd = implode("", $passwd);
        
        echo "Contraseña autogenerada: " . $randPasswd;
    }

    rand_Pass();
?>