<?php
// Iventário dos carros
$carros = [
    [
        'marca' => 'BMW',
        'modelo' => 'BMW M4 F80',
        'ano' => '2018',
        'cor' => 'preto',
        'capa' => 'https://w.wallhaven.cc/full/eo/wallhaven-eovgql.jpg',
        'destaque' => true
    ],
    [
        'marca' => 'Porsche',
        'modelo' => 'Porsche 911 Turbo S',
        'ano' => '2025',
        'cor' => 'prata',
        'capa' => 'https://images.unsplash.com/photo-1679478878845-af7294f28b27?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'destaque' => true
    ],
    [
        'marca' => 'Ferrari',
        'modelo' => 'FERRARI 12CILINDRI 2025',
        'ano' => '2025',
        'cor' => 'vermelho',
        'capa' => 'images/cars/ferrari12cilindri.jpg',
        'destaque' => true
    ],
];

$x = true;
// Validador de destaques 
$destaques = [];

for ($x = 0; $x < count($carros); $x++) {
    if ($carros[$x]['destaque'] == true) {
        $destaques[] = $carros[$x];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopGear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div class="headContainer">
            <div class="headNavbar">
                <div class="logoHead">Top<span>Gear</span></div>
                <nav class="listaNav">
                    <ul>
                        <li><a href="#" class="linkNav">Início</a></li>
                        <li><a href="#" class="linkNav">Galeria</a></li>
                        <li><a href="#" class="linkNav">Sobre</a></li>
                        <li><a href="#" class="linkNav">Contato</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>
    <main class="mainContainer">
        <!-- Carousel with autoplay derived from bootstrap -->

        <div class="slideAuto">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($destaques as $carro): ?>
                        <?php if($carro['destaque'] == true && $x == true): ?>
                            <div class="carousel-item active">
                                <img src="<?= $carro['capa'] ?>" class="d-block w-100" alt="<?= $carro['modelo'] ?>">
                            </div>
                            <?= $x = false; ?>
                        <?php elseif($carro['destaque'] == true && $x == false): ?>
                            <div class="carousel-item">
                                <img src="<?= $carro['capa'] ?>" class="d-block w-100" alt="<?= $carro['modelo'] ?>">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        <!-- 
        <section>
            <h2 class="sectionTitle">Galeria</h2>
            <div class="carrosGrid">
                <?php foreach ($carros as $carro): ?>
                    <div class="carroCard">
                        <div class="carroCapa">
                            <img src="<?= $carro['capa'] ?>" alt="<?= $carro['modelo'] ?>">
                        </div>
                        <div class="carroInfo">
                            <h3 class="carroTitle"><?= $carro['modelo'] ?></h3>
                            <p class="carroMarca"><?= $carro['marca'] ?></p>
                            <div class="carroMeta">
                                <span class="carroAno"><?= $carro['ano'] ?></span>
                                <span class="carroCor"><?= $carro['cor'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
                -->
    </main>

    <footer>
        <div class="footerAlign">
            <div class="container footerContent">
            <div class="footerLogo">TopGear</div>
            <p class="copyright">@ <?= date('Y') ?> Todos os direitos reservados</p>
        </div>
        </div>
      
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>


</body>

</html>