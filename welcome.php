<?php
$array = filter_input_array(INPUT_POST);
$newArray = array();
foreach (array_keys($array) as $fieldKey {
  foreach ($array[$fieldKey] as $key=>$value) {
    $newArray[$key][$fieldKey] = $value;
  }
}
