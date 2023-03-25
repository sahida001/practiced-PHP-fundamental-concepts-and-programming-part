<?php
#function 01
function info(){
    echo " Hello this is php function. ";
}

#function 02
function devs_info($name, $skill, $age){
   echo "My name is {$name} and I am {$skill} and I am {$age} years old.";
}

#function 03

function teachers_info ($university_name = null, $position = null, $working_period = null){
    
    if($university_name){
        echo "I worked in a university, the university name is {$university_name }";
    }
    echo "<hr>";
    if($position){
        echo "I am a {$position} in the University";
    }
    echo "<hr>";
    if($working_period){
        echo "I am working here since {$working_period}";
    }
    
    }


# return function 04

function agecal(string $name, int $year){
    $age = date('Y')-$year;
    echo "Hi {$name}, You are {$age} Years old";
}

# return function 05

function hat ($type = 'l', $text = null){
    $text-$type = '';
    switch ($type) {
        case 'u':
            $text-$type = 'uppercase';
            break;
        case 'l':
            $text-$type = 'lowercase';
            break;    
    
        default:
            $text-$type = 'lowercase';
            break;
    }

    echo "<span style = 'text-transform:{$text::$type};'> {$text} </span>";
}

function getBMI($weight, $height){
    $bmi = $weight/($height*$height);
    if($bmi < 18.5){
        return "You are Underweight";
    }else if($bmi >= 18.5 && $bmi<25){
        return "You are Normal";
    }else if($bmi >= 25 && $bmi<30){
        return "You are Normal";
    }else if($bmi >= 30){
        return "You are Overweight";
    }
}

    

?>