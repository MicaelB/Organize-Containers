<?php
function organizingContainers($container) {
    $n = count($container);
    $possible = TRUE;
    
    for($i = 0; $i < $n; $i++) {
        for($j = 0; $j < $n; $j++) {
          $index_i[$i] = !isset($index_j[$i]) ? 0 : $index_j[$i];
          $index_j[$j] = !isset($index_j[$j]) ? 0 : $index_j[$j];
          $values = $container[$i][$j];
          $index_i[$i] = array_sum($container[$i]);
          $index_j[$j]  += $values;  
        }
    }
    
    sort($index_i, SORT_NUMERIC );
    sort($index_j, SORT_NUMERIC );
    
    for($i = 0; $i < $n; $i++) {
        if($index_i[$i] !== $index_j[$i]) {
            $possible = FALSE;
            break;
        }   
    }

    if($possible === TRUE) {
        echo "Possible";
    } else {
        echo "Impossible";
    }
}
?>
