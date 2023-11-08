<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuário</title>
    <link rel="stylesheet" href="css/perfil.css">
    @include('layouts.nav')
</head>
<body>
    @yield('nav')

    <div class="div1">     
        <div class="overlay" id="overlay"></div>
        <p>Informações do usuário</p>

        <div class="info-container">
            <label for="nome">Nome:</label>
            <div class="info" id="nome"></div>
        </div>

        <div class="info-container">
            <label for="email">Email:</label>
            <div class="info" id="email"></div>
        </div>

        <div class="info-container">
            <label for="cpf">CPF:</label>
            <div class="info" id="cpf"></div>
        </div>

        <div class="info-container">
            <label for="endereco">Endereço:</label>
            <div class="info" id="endereco"></div>
        </div>

        <button type="button" class="confirmar" onclick="abrirModal()">Editar Endereço</button>
        <button type="button" class="confirmar" onclick="abrirModalEditarDados()">Editar Dados</button>
    </div>

    <div id="modal" class="modal">
        <label for="rua">Nome da rua:</label>
        <input type="text" id="rua" name="rua">

        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero">

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep">

        <button type="button" class="fechar" onclick="fecharModal()">Fechar</button>
        <button type="button" class="confirmar" onclick="confirmarAlteracoes()">Confirmar Alterações</button>
    </div>

    <div id="modalEditarDados" class="modal">
        <label for="novoNome">Novo Nome:</label>
        <input type="text" id="novoNome" name="novoNome">

        <label for="novoEmail">Novo Email:</label>
        <input type="text" id="novoEmail" name="novoEmail">

        <label for="novoCPF">Novo CPF:</label>
        <input type="text" id="novoCPF" name="novoCPF">

        <button type="button" class="confirmar" onclick="confirmarEdicaoDados()">Confirmar Alterações</button>
        <button type="button" class="fechar" onclick="fecharModalEditarDados()">Fechar</button>
    </div>

    <script>
        function abrirModal() {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
            document.body.classList.add('modal-open');
        }

        function fecharModal() {
            document.getElementById('modal').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
            document.body.classList.remove('modal-open'); 
        }

        function confirmarAlteracoes() {
            const novaRua = document.getElementById('rua').value;
            const novoNumero = document.getElementById('numero').value;
            const novoCep = document.getElementById('cep').value;

            document.getElementById('endereco').innerText = `${novaRua}, Nº ${novoNumero}, CEP ${novoCep}`;

            fecharModal();
        }

        function abrirModalEditarDados() {
            document.getElementById('modalEditarDados').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function fecharModalEditarDados() {
            document.getElementById('modalEditarDados').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }

        function confirmarEdicaoDados() {
            const novoNome = document.getElementById('novoNome').value;
            const novoEmail = document.getElementById('novoEmail').value;
            const novoCPF = document.getElementById('novoCPF').value;

            document.getElementById('nome').innerText = novoNome;
            document.getElementById('email').innerText = novoEmail;
            document.getElementById('cpf').innerText = novoCPF;

            fecharModalEditarDados();
        }

        document.getElementById('overlay').addEventListener('click', function() {
            fecharModal();
            fecharModalEditarDados();
        });
    </script>
</body>
</html>
