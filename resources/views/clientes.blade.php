<h1>Lista de Clientes</h1>

@foreach($clientes as $cliente)
     <p>{{ $cliente->nome }}</p>
@endforeach