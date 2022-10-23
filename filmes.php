<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $title = 'Filmes';
        include('components/head.php');
    ?>
</head>
<body class="container">
    <?php
        $page = 'index.php';
        $btnName = 'Lista';
    ?>
    <?php include('components/navbar.php') ?>

    <section class="row my-4">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="d-flex align-items-center h-100">
                <div class="border border-2 bg-light w-100" id="img-lg" style="height: 600px; min-height: 350px;"></div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-8">
            <div class="d-flex flex-wrap gap-2 justify-content-center">
                <?php
                    $filmes = [
                        ['name' => 'Homem Aranha Sem Volta Para Casa', 'src' => 'img/homem_aranha_sem_volta_para_casa.jpg'], 
                        ['name' => 'Homem de Aço', 'src' => 'img/homem_de_aço.jpg'], 
                        ['name' => 'Homem de Ferro', 'src' => 'img/homem_de_ferro.webp'], 
                        ['name' => 'Liga da Justiça - Zack Snyder', 'src' => 'img/liga_da_justiça_zack_snyder.webp'], 
                        ['name' => 'The Batman', 'src' => 'img/the_batman.jpg'], 
                        ['name' => 'Vingadores Ultimato', 'src' => 'img/vingadores_ultimato.jpg']
                    ];
                    foreach ($filmes as $filme) {
                        echo ("
                            <div class='border border-1 p-2' style='width: 250px;'>
                                <div onmouseover='increase(this)' onmouseout='decrease(this)'>
                                    <img class='img-fluid bg-light border border-1 p-1' style='width: 250px; height: 350px;' 
                                        src='{$filme['src']}'>
                                </div>
                                <h5 class='fw-bold text-center my-2'>{$filme['name']}</h5>
                            </div>
                        ");
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="js/filmes.js"></script>
</body>
</html>
