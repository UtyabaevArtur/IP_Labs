<?php
        if (isset($_POST["N"])) {
        if ($_POST["N"] > 1) {
            switch ($_POST["z"]) {
                case 1: // чётное
                    for ($i=1; $i<=$_POST["N"]; $i++) {
                        if ($i % 2 == 0) {
                            echo ($i . " ");
                        } 
                    }
                    break;
                case 2: // нечётное
                    for ($i=1; $i<=$_POST["N"]; $i++) {
                        if ($i % 2 == 1) {
                            echo ($i . " ");
                        } 
                    } 
                    break;
                case 3: // простое
                    for ($i=1; $i<=$_POST["N"]; $i++) {
                        for ($k=1; $k<=$i; $k++) {
                            if ($i % $k == 0) {
                                $sum++;
                            }   
                        }
                        if ($sum <= 2) {
                            echo ($i . " ");  
                        }
                        $sum = 0;
                    } 
                    break;
                case 4: // составное
                    for ($i=1; $i<=$_POST["N"]; $i++) {
                        for ($k=1; $k<=$i; $k++) {
                            if ($i % $k == 0) {
                                $sum++;
                            } 
                        }
                        if ($sum > 2) {
                            echo ($i . " ");           
                        }
                        $sum = 0;
                }
                    break;  
                
            }
        } 
    }
        ?>