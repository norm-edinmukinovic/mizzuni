<?php
    function getLayout($layoutName = false, $data = false) {
        if ($layoutName) {
            $data = $data;
            include(__DIR__ . "./layouts/$layoutName.php");
        }
    }
?>



