<?php

namespace src\Helper;

use src\Core\Helpers;
use src\Core\Mensagem;
use Twig\Lexer;
use Twig\TwigFunction;

class Template
{
    private \Twig\Environment $twig;

    public function __construct(string $diretorio)
    {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
        $this->twig = new \Twig\Environment($loader);
        
        $lexer = new Lexer($this->twig , array(
            $this->helpers()
        ));

        $this->twig->setLexer($lexer);
    }

    public function renderizar(string $view, array $dados)
    {
        return $this->twig->render($view, $dados);
    }

    public function helpers(): void
    {
        array(
            $this->twig->addFunction(
                new \Twig\TwigFunction('url', function(string $url = null){
                    return $url;
                })
            ),

            $this->twig->addFunction(
                new \Twig\TwigFunction('saudacao', function(){
                    return Helpers::saudacao();
                })
            ),

            $this->twig->addFunction(
                new \Twig\TwigFunction('PagNotFound', function(){
                    print (new Mensagem)->erro("Página não encontrada!");
                })
            )
        );
       
    }
}