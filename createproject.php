<?php

function ft_printcolor(string $color, string $message)
{
    switch ($color) {
        case "RED" :
            "\[\033[0;$message 31m\]";
            break;
        case "YELLOW" :
            "\[\033[0;$message 33m\]";
            break;
        case "GREEN" :
            "\[\033[0;$message 32m\]";
            break;
        case "BLUE" :
            "\[\033[0;$message 34m\]";
            break;
        case "LIGHT_RED" :
            "\[\033[1;$message 31m\]";
            break;
        case "LIGHT_GREEN" :
            "\[\033[1;$message 32m\]";
            break;
        case "WHITE" :
            "\[\033[1;$message 37m\]";
            break;
        case "LIGHT_GRAY" :
            "\[\033[0;$message 37m\]";
            break;
        case "COLOR_NONE" :
            "\[\e[0m\]";
            break;
        default;
    }

}

/**
 * @param $entity
 * @param $array
 * @param $new_element
 * @return mixed
 */
function objectExist($entity, $array, $new_element)
{
    if ($entity) {

    } else {
        array_push($array, $new_element);
    }
    return $array;
}

/**
 * @param string $str
 * @return string
 */
function ft_colorError(string $str)
{
    //The characters \033 indicate the start of an escape code. [31m is the colour red. [0m signifies the end of the coded fragment.
    return "\033[31m" . $str . "\033[0m";

}

/**
 * @param string $str
 * @return string
 */
function ft_colorSucces(string $str)
{
    //The characters \033 indicate the start of an escape code. [32m is the colour green. [0m signifies the end of the coded fragment.
    return "\033[32m" . $str . "\033[0m";
}

/**
 * @param $qa
 * @return bool|string
 */
function ft_readline($qa = false)
{
    if (!$qa) {
        $input = readline("Entrer le nom de votre projet sans espace (mon_projet /  mon-rojet) : ");
        /*for($i=1; $i<3; ++$i){
            $input = !empty($input) ? $input : ft_readline();
        }*/
        echo !empty($input) ? "Vous avez saisi : $input\n" : ft_colorError("vous n'avez rien saisi.\n");
    } else {
        $input = readline("Oui(O) ou Non(N) : ");
        $input = $input === strtolower("O") ? true : false;
    }
    return $input;
}


/**
 * DEBUT DU SCRIPT
 */

while (true) {
    $input = ft_readline();

}
