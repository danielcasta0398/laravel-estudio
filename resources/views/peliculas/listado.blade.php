<!-- IMPRIMIR POR PANTALLA -->

<h1>{{$titulo}}</h1>
<h2>{{$listado[0]}}</h2>
<p>{{ date('Y') }}</p>

<!-- COMENTARIOS -->

{{-- Esto es un comentario --}}

<!-- MOSTRAR SI EXISTE -->

<?= isset($director) ? $director : 'No hay director' ?>

{{ $director ?? 'No hay ningun Director' }}

<!-- CONDICIONALES -->

@if($titulo && count($listado) >= 5)
   <h1>El titulo existe y es : {{$titulo}} y el listado es mayor a 4</h1> 
@elseif($titulo)
    <h1>El titulo existe y el listado no es mayor 4</h1>
@else
    <h1>La condicion no se ah cumplido</h1>
@endif        