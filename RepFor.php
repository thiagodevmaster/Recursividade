<?php

class RepFor 
{
    public int $contador = 0;

    public function __construct(private int $valor)
    {
    }

    public function func1(){
        echo "Contador esta em: $this->contador" . PHP_EOL;
        if($this->contador >= $this->valor){
            return;
        }
        $this->func2();
    }

    public function func2(){
        $this->contador += 1 ;
        $this->func1();
    }

    public function rodar(){
        $this->func1();
    }
}

$repeticao = new RepFor(30);
$repeticao->rodar();