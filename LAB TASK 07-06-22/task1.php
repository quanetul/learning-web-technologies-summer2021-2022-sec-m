<?php
function area($length = 2, $width = 4) 

{
    $area = $length * $width;
    echo "The area of a Rectangle ="  . $area ."<br>";

    $perimeter = 2* ($length * $width);
    echo " perimeter ="  . $perimeter ;

}
area(); 

?>