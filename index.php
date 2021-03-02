<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        echo '<b>Задание 1</b><br />';
        echo '<br />';
        function get_pow($a){
            if (is_numeric($a)) return pow($a, 3);
            else return 'Заданная переменная не является числом';
        }
        echo get_pow('tee');
        echo '<hr />';

        ///

        echo '<b>Задание 2</b><br />';
        echo '<br />';
        function get_sum($a, $b){
            if (is_numeric($a) && is_numeric($b))
                return $a + $b;
            else return 'Заданная переменная не является числом';
        }
        echo get_sum(3, 5);
        echo '<hr />';

        ///

        echo '<b>Задание 3</b><br />';
        echo '<br />';
        function ret_day($a){
            switch($a){
                case 1: return 'Понедельник';
                case 2: return 'Вторник';
                case 3: return 'Среда';
                case 4: return 'Четверг';
                case 5: return 'Пятница';
                case 6: return 'Суббота';
                case 7: return 'Воскресенье';
                default: return 'Заданная переменная не соответствует условию';                
            }
        }
        echo ret_day(3);
        echo '<hr />';

        ///

        echo '<b>Задание 4</b><br />';
        echo '<br />';
        function check_num($a){
            return ($a < 0) ? 'true' : 'false';
        }
        echo check_num(3);
        echo '<hr />';

        ///

        echo '<b>Задание 5</b><br />';
        echo '<br />';
        function getDigitsSum($a){
            if (is_numeric($a)){
                $a = round($a);
                $a = strval($a);
                $sum = 0;
                for ($i = 0; $i < strlen($a); $i++){
                     $sum += intval($a[$i]);
                }
                return $sum;
            } else return 'Заданная переменная не является числом';
        }
        echo getDigitsSum(1903);
        echo '<hr />';

        ///

        /*echo '<b>Задание 6</b><br />';
        echo '<br />';
        for ($i = 1; $i < 2021; $i++){
            if (getDigitsSum($a) == 13)
            echo $i;
        }        
        echo '<hr />';*/
        
        ///

        echo '<b>Задание 7</b><br />';
        echo '<br />';
        function isEven($a){
            if (is_numeric($a)){
                $a = round($a);
                if ($a % 2 == 0)
                    return 'true';
                else return 'false';
            } else return 'Заданная переменная не является числом';
        }
        echo isEven(23.6);
        echo '<hr />';
                
        ///

        echo '<b>Задание 8</b><br />';
        echo '<br />';
        function get_translit($text_for_translit){
            $arr_rus=['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я'];
            $arr_lat=['a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','shh','`','y','``','e`','yu','ya'];
            $arr_translit = array_combine($arr_rus,$arr_lat);            
            $translit_end = strtr($text_for_translit, $arr_translit);
            return $translit_end;
            }
        echo get_translit('текст');        
        echo '<hr />';
                
        ///

        echo '<b>Задание 9</b><br />';
        echo '<br />';
        function ret_noun($a, $form_for_1, $form_for_2, $form_for_3){
            $a = abs($a) % 100;
            $b = $a % 10;
            if ($a > 10 && $a < 20)
                return $form_for_3;
            if ($b > 1 && $b < 5)
                return $form_for_2;
            if ($b == 1)
                return $form_for_1;
            return $form_for_3;
        }
        $a = 782;
        echo $a . ' ' . ret_noun($a, 'яблоко', 'яблока', 'яблок');
        echo '<hr />';
                        
        ///

        echo '<b>Задание 10</b><br />';
        echo '<br />';
        $array = range(1, 10, 2);
        subsArr($array);
        function subsArr($array){
	        static $i = 0;
	        echo $array[$i++]."<br>";
	        if ($i < count($array)) {
		            subsArr($array);
	        }
        }       
        echo '<hr />';
                        
        ///

        echo '<b>Задание 11</b><br />';
        echo '<br />';
        function lowNumber($num) {
            return $num <= 9 ? $num : lowNumber(array_sum(str_split($num, 1)));
        }
        $num = 75641344676546;
        echo lowNumber($num);   
        echo '<hr />';
                        
        ///

        echo '<b>Задание 12</b><br />';
        echo '<br />';
        function get_speed($s, $t, $val){
            $speed[1] = $s / $t . ' км/ч';
            $speed[2] = $speed[1] / 3.6 . ' м/с';
            return $speed[$val];
        }
        echo get_speed(100, 10, 2);
        echo '<hr />';
                       
        ///

        echo '<b>Задание 13</b><br />';
        echo '<br />';
        
        echo '<hr />';
                        
        ///

        echo '<b>Задание 14</b><br />';
        echo '<br />';   
        function is_pal($text){
                $text_1 = strtolower($text);
                $text_2 = strrev($text_1);
                if ( $text_1 == $text_2 ) return 'true'; 
                else return 'false';
        }
        $text = 'aDafdt tdfAda';
        echo is_pal($text);
        echo '<hr />';
                        
        ///

        echo '<b>Задание 15</b><br />';
        echo '<br />';
        echo "<table border=\"1\">";
        function get_tabl($cols, $rows, $number, $number2){
            for ($r = 0; $r <= $rows; $r++){
                echo('<tr>');
                if ($r == 0) {
                    for ($i = 0; $i < $rows; $i++) {
                        echo('<th>' .$number2++.'</th>');
                    }
                }
                for ($c = 0; $c <= $cols; $c++){
                    if ($c == 0) {
                        echo('<th>' .$number++.'</th>');
                    } else if ($r != 0) {
                        echo( '<td>' .$c*$r.'</td>');
                    }
                }
                echo('</tr>');
            }
        }
        echo get_tabl(10, 10, 0, 0);
        echo "</table>";
        echo '<hr />';
                                
        ///

        echo '<b>Задание 16</b><br />';
        echo '<br />';
        function get_str($text){
            $arr = explode(" ", $text);
            $max = $arr[0];
            for ($i=0; $i<count($arr); $i++) {
                if(strlen($arr[$i]) > strlen($max)){
                    $max = $arr[$i];
                }
            }
            echo $max;   
        }
        echo get_str('What is the average airspeed velocity of an unladen swallow');
        echo '<hr />';
                                
        ///

        echo '<b>Задание 17</b><br />';
        echo '<br />';
        $arr = range(1, 100);
        function get_num($arr){
            $sum = 0;
            for ($i = 0; $i <= 100; $i++){
                if(strpos($i, 1) !== false) {
                    $sum += $i;
                } else {
                    echo 'Цифры 1 нет';
                }
                 
            }
        }
        echo get_num($arr);
        echo '<hr />';
                                
        ///

        echo '<b>Задание 18</b><br />';
        echo '<br />';
        echo '<hr />';

    ?>

</body>
</html>