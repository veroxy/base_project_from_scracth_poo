<?php

class Command
{
    /**
     * The characters \033 indicate the start of an escape code.
     * [31m is the colour red. [0m signifies the end of the coded fragment.
     * @param string $str sentence to print
     * @return string
     */
    public static function ft_colorError(string $str)
    {

        return "\033[31m" . $str . "\033[0m";

    }

    /**
     * The characters \033 indicate the start of an escape code.
     * [32m is the colour green. [0m signifies the end of the coded fragment.
     * @param string $str sentence to print
     * @return string
     */
    public static function ft_colorSucces(string $str)
    {

        return "\033[32m" . $str . "\033[0m";
    }

    public static function ft_readline($qa = false)
    {
        if(!$qa) {
            $input = readline("Entrez votre commande : ");
            /*for($i=1; $i<3; ++$i){
                $input = !empty($input) ? $input : ft_readline();
            }*/
            echo !empty($input) ? "Vous avez saisi : $input\n" : ft_colorError("vous n'avez rien saisi.\n");
        }else{
            $input = readline("Oui(O) ou Non(N) : ");
            $input = $input === strtolower("O") ? true : false;
        }
        return $input;
    }

}