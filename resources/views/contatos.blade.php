<!DOCTYPE html>
<head>
    <meta charset="UTF-8">    
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Cadastrat Novo Contato<h1>
        
    <form action="{{url('\save')}}" method="POST">
        @csrf 

        <label>Nome: </label><br>
        <input type="text" name="nome" require><br><br>
        <label>Telefone: </label><br>
        <input type="text" name="telefone" require><br><br>
        <label>E-mail: </label><br>
        <input type="text" name="email" require><br><br>
        <label>Endereço: </label><br>
        <input type="text" name="endereco" require><br><br>

        <button type="submit">Salvar contato</button>

</form>
</body>
</html>