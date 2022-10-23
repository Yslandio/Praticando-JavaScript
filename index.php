<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $title = 'Lista';
        include('components/head.php');
    ?>
</head>
<body class="container">
    <?php
        $page = 'filmes.php';
        $btnName = 'Filmes';
    ?>
    <?php include('components/navbar.php') ?>

    <header class="shadow rounded border border-2 p-4 my-4">
        <form class="d-flex flex-wrap gap-2 justify-content-center" action="#" method="post">
            <input class="form-control w-auto" type="text" placeholder="Nome do item" id="nameListTitle">
            <button class="btn btn-primary" type="button" onclick="addItem()">Adicionar</button>
        </form>
    </header>

    <section class="d-flex flex-wrap gap-2 flex-column align-items-start">
        <h3 class="fw-bold">Lista de itens:</h3>
        <ul class="list-group gap-2" id="list">
            
        </ul>
    </section>

    <li class="list-group-item d-none" id="li">
        <h4 class="fw-bold title">Título do item</h4>
        <a class="btn btn-success" href="#" onclick="changeTitleName(this)">Renomear</a>
        <a class="btn btn-danger" href="#" onclick="deleteItem(this)">Excluir</a>
    </li>

    <!-- JS -->
    <script src="js/list.js"></script>
</body>
</html>
