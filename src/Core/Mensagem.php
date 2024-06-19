<?php

namespace src\Core;

class Mensagem
{
    private $texto;
    private $css;

    public function __toString()
    {
        return $this->renderizar();
    }

    public function sucesso($mensagem): Mensagem
    {
        $this->css = 'alert alert-success';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function erro($mensagem): Mensagem
    {
        $this->css = 'alert alert-danger';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function info($mensagem): Mensagem
    {
        $this->css = 'alert alert-primary';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function aviso($mensagem): Mensagem
    {
        $this->css = 'alert alert-warning';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    private function renderizar(): string
    {
        return "<div class='{$this->css}'>{$this->texto}</div>";
    }

    private function filtrar(string $mensagem):string
    {
        return filter_var(trim(strip_tags($mensagem)), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}