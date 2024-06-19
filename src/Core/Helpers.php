<?php

namespace src\Core;
//Pega a hora e data atual da região

class Helpers{

    public static function redirecionar(string $url = null):void
    {
        header('HTTP/1.1 302 Found');

        $local = ($url ? "http://localhost/Mysite/".$url : "http://localhost/Mysite/");
    
        header("Location: {$local}");
        exit();
    }

    public static function saudacao()
    {
       $hora = date('H');
    
       $h = match(true){
            $hora >= 0 and $hora <= 5 => "Boa madrugada!",
            $hora >= 6 and $hora <= 12 => "Bom dia!",
            $hora >= 13 and $hora <= 17 => "Boa tarde",
            default => "Boa noite!"
       };
    
       return $h;
    }
    
    public static function localhost(): bool
    {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    
        if($servidor == 'localhost') return true;
    
        return false;
    }
    
    
    /**
     * Resume texto
     * 
     * @param string $texto texto a ser resumido
     * @param int $limite tamanho do resumo
     * @param string $continue final personalizavel 
     */
    public static function resumirTexto(string $texto, int $limite, string $continue = '...'): string
    {
        $textoLimpo = trim(strip_tags($texto));
    
        if(mb_strlen($textoLimpo) <= $limite) return $textoLimpo;
    
        $resumo = mb_substr($textoLimpo, 0, $limite);
        
        return $resumo.$continue;
    }
}
