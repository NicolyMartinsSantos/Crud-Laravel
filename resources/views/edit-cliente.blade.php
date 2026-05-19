<h1>Editar Cliente</h1>

<form action="/clientes/{{ $cliente->id }}/update" method="POST">

    @csrf

    <input type="text" name="nome" value="{{ $cliente->nome }}">

    <button type="submit">Atualizar</button>

</form>