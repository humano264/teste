<?php

while ($sentence = fgets(STDIN)) {
  $dancingSentence = '';
  $upper = true;

  for ($i = 0; $i < strlen($sentence); $i++) {
    if ($sentence[$i] === ' ') {
      $dancingSentence .= ' ';
    } else {
      $dancingSentence .= $upper ? strtoupper($sentence[$i]) : strtolower($sentence[$i]);
      $upper = !$upper;
    }
  }

  echo $dancingSentence;
}