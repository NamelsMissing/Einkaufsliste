<?php
  // Einkaufsliste aus Textdatei lesen
  $shopping_list = file("shopping_list.txt", FILE_IGNORE_NEW_LINES);
  // Einkaufsliste als JSON zurückgeben
  echo json_encode($shopping_list);
?>