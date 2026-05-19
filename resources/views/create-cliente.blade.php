<h1>Cadastrar Cliente</h1>

<form action="/clientes/store" method="POST">

    @csrf

    <input type="text" name="nome" placeholder="Digite o nome">

    <button type="submit">Enviar</button>

</form>