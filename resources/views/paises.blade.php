<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
    <title>Paises</title>
</head>
<body>



<h1>Paises</h1>



<table class="table table-bordered border-dark table-striped table-striped">
  <thead >


    <tr class="table-primary border-dark">
    
      <th scope="col">País</th>
      <th scope="col">Capital</th>
      <th scope="col">Moneda</th>
      <th scope="col">Población</th>
      <th scope="col">Descripción</th>  
    </tr>
  </thead>
  
  
  <tbody >

 @php
// Función de comparación personalizada para ordenar por moneda
function compararPorMoneda($a, $b) {
    return strcmp($a['moneda'], $b['moneda']);
}

// Ordena el arreglo $paises por moneda
uasort($paises, 'compararPorMoneda');

@endphp

@php
$count = 0;
@endphp


   

  
 @foreach ($paises as $pais=>$datos)

 @break ($count==$registros_a_mostrar)

 @if ($datos ['poblacion']>=$población_minima)

  <tr >
                    <td >{{ucfirst($pais)}}</td>
                    <td >{{$datos ['capital']}}</td>
                    <td>{{$datos ['moneda']}}</td>
                    <td>{{number_format($datos ['poblacion'], 0, ',', "'")}}</td>
                    <td>{{$datos ['descripcion']}}</td>
                    
                </tr>

                @endif

                

                @php
    $count++;
    @endphp
                
@endforeach


    
  </tbody>
  
  
  
</table>

    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>