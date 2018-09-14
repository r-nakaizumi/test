<?php

function over_ten(int $material){
    //if($material===(int)$material){
        if($material >= 10){
            echo TRUE;
        } else {
            echo FALSE;
        }
    //}
}

//echo over_ten("あ");



function get_triangle_area($bottom,$height){
    echo $bottom * $height / 2;
}

//echo get_triangle_area((3*6)/3,(3+2)*4);



function get_quadrangle_area($lengh,$side){
    echo $lengh * $side;
}

//echo get_quadrangle_area((3*6)/3,(3+2)*4);



function call_each_area($bottom_lengh,$height_side,$which){
    if($which=="A"){
        get_triangle_area($bottom_lengh,$height_side);
        die;
    }
    elseif($which=="B"){
        get_quadrangle_area($bottom_lengh,$height_side);
        die;
    }
    else{
        echo "Not Calculate";
    }
}

//echo call_function(20,12,"C");

function getFactorial($num){
    if($num==1){
        return $num;
    }
    return $num * getFactorial($num - 1);
}

//echo getFactorial(5);
