<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    use HasFactory;
    public function calcular() {
        switch($_GET['combustivel']){
            case "Gasolina":
                $valorGasolina = 4.99;
                break;
            case "Etanol":
                $valorGasolina = 3.99;
                break;
            case "Diesel":
                $valorGasolina = 2.99;
                break;
        }

        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        
        $consumoGasolina = ($distancia / $autonomia) * $valorGasolina;

        return $consumoGasolina;

    }
}