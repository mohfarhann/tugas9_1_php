<?php

  function fibonacci($amount)
  {
    $before = 0;
    $after = 1;

    $results = "$before $after";

    for($i = 0; $i < $amount; $i++){
      $output = $after + $before;
      $results = $results." $output";

      $before = $after;
      $after = $output;
    }
    return $results;
  }

  echo fibonacci(20);









?>
