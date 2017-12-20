<?php

        $ages = array (10,50,39,40,67,99,7,2,10,88);
        $sum = 0;

        function getAverageAge($input, $sum) {
          for($i=1; $i<count($input); $i++) {
            $sum += $input[$i];
          }

          return $sum  ;
        }

        echo getAverageAge($ages, $sum);
        
?>