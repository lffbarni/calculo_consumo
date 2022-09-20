<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>
                    Esta aplicação tem como finalidade demonstrar
                    os valores que serão gastos com combustível durante uma viagem,
                    com base no consumo do seu veículo, e com a distância determinada por você!
                </p>
                <p>
                    Os combustíveis disponíveis para esse calculo são:
                </p>
                <ul>
                    <li><b>Gasolina: R$4,99</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Calculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')" method="get">

                    <label for="distancia">Distância em KM a ser percorrida</label>
                    <input type="number" class="campoTexto" name="distancia" required>

                    <label for="autonomia">Consumo de combustível do veículo (KM/L)</label>
                    <input type="number" class="campoTexto" name="autonomia" required>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>