<?php
function convert_cyr_array($array,$from,$to){
    foreach($array as $key=>$value){
        if(is_array($value)) {
            $result[$key] = convert_cyr_array($value,$from,$to);
            continue;
        }
        $result[$key] = convert_cyr_string($value,$from,$to);
    }
    return $result;
}
?>