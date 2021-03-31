<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km > Milha</option>    
        <option value="milha-km">Milha > km</option>    
        <option value="metro-km">Metros > km</option>    
        <option value="km-metro">km > Metros</option>    
        <option value="c-f">Celsius > Fahrenheit</option>    
        <option value="f-c">Fahrenheit > Celsius</option>    
    </select>
    <button>calcular</button>
</form>

<style>
    form > * {
        font-size: 1rem;
    }
</style> 

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_FAHRENHEIT_CELSIUS =  1.8 ;
const FATOR_CELSIUS_FAHRENHEIT =  1.8;


$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param km = $distancia Metros";
        break;
    case 'c-f':
        $conversao = $param * FATOR_CELSIUS_FAHRENHEIT + 32;
        $mensagem = "{$param}°c = {$conversao}°f";
        break;
    case 'f-c':
        $conversao = ($param - 32) / FATOR_FAHRENHEIT_CELSIUS;
        $mensagem = "{$param}°f = {$conversao}°c";
        break;
    
    
    
        default:
        $mensagem = "Nenhum valor calculado!";

}
echo "<p>$mensagem</p>";