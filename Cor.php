<?php

class Cor
{



	/**
	 ** Gera cores de forma aleatoria em hexadecimal
	 */
	public static function randomHexadecimal() 
    {
        $caracteresHexadecimal = '0123456789ABCDEF';
        $colorHexadecimal = '#';
        
        for($i = 0; $i < 6; $i++) 
        {
            $index = rand(0,15);
            $colorHexadecimal .= $caracteresHexadecimal[$index];
        }

        return $colorHexadecimal;
    }

    


}
