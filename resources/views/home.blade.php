<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni in partenza</title>
</head>
<body>
    <h1>Treni che partono oggi</h1>
    <ul>
        @foreach ($treni as $treno)
            <li>
                
                <strong>{{ $treno->azienda }}</strong> 
                Da {{ $treno->stazione_partenza }} a {{ $treno->stazione_arrivo }} 
                Partenza: {{ $treno->orario_partenza }} 
                Arrivo: {{ $treno->orario_arrivo }} 
                Codice: {{ $treno->codice_treno }} 
                Carrozze: {{ $treno->numero_carrozze }} 
                @if ($treno->in_orario)
                    In orario
                
                @else In ritardo
                @endif
                @if($treno->cancellato)
                    Cancellato
                @else Non Cancellato
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>