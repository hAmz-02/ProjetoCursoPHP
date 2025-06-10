<?php
// Iventário dos carros
$carros = [
    [
        'marca' => 'BMW',
        'modelo' => 'BMW M4 F80',
        'ano' => '2018',
        'cor' => 'preto',
        'capa' => 'images/cars/bmwM4f80.jpg',
        'destaque' => true,
        'descricao' => 'Coupé esportivo com motor 3.0L biturbo de 431 cv, tração traseira e visual agressivo. De 0 a 100 km/h em 4,1 s. Desempenho puro com estilo.'
    ],
    [
        'marca' => 'Porsche',
        'modelo' => 'Porsche 911 Turbo S',
        'ano' => '2025',
        'cor' => 'prata',
        'capa' => 'https://images.unsplash.com/photo-1679478878845-af7294f28b27?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'destaque' => true,
        'descricao' => 'Ícone alemão com motor 3.8L biturbo de 650 cv, tração integral e câmbio PDK. Faz de 0 a 100 km/h em 2,7 s. Luxo e velocidade em harmonia.'
    ],
    [
        'marca' => 'Ferrari',
        'modelo' => 'FERRARI 12CILINDRI 2025',
        'ano' => '2025',
        'cor' => 'vermelho',
        'capa' => 'images/cars/ferrari12cilindri.jpg',
        'destaque' => true,
        'descricao' => 'Gran turismo V12 de 830 cv com design futurista e alma clássica. Motor 6.5L aspirado, 0 a 100 km/h em 2,9 s. A nova essência da Ferrari.'
    ],
    [
        'marca' => 'Audi',
        'modelo' => 'Audi RS6',
        'ano' => '2020',
        'capa' => 'images/cars/audiRS6.jpg',
        'destaque' => true,
        'descricao' => ''
    ],
    [
        'marca' => 'Pagani',
        'modelo' => 'Pagani Zonda R',
        'ano' => '2011',
        'capa' => 'images/cars/paganiZondaR.jpg',
        'destaque' => true,
        'descricao' => '',
    ],
    [
        'marca' => 'Lamborghini',
        'modelo' => 'Lamborghini Avendador',
        'ano' => '2011',
        'capa' => 'images/cars/lamborghiniAventador.png',
        'destaque' => true,
        'descricao' => ''
    ],
    [
        'marca' => 'BMW',
        'modelo' => 'BMW M4 F80',
        'ano' => '2018',
        'cor' => 'preto',
        'capa' => 'images/cars/bmwM4f80.jpg',
        'destaque' => true,
        'descricao' => 'Coupé esportivo com motor 3.0L biturbo de 431 cv, tração traseira e visual agressivo. De 0 a 100 km/h em 4,1 s. Desempenho puro com estilo.'
    ],
    [
        'marca' => 'Porsche',
        'modelo' => 'Porsche 911 Turbo S',
        'ano' => '2025',
        'cor' => 'prata',
        'capa' => 'https://images.unsplash.com/photo-1679478878845-af7294f28b27?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'destaque' => true,
        'descricao' => 'Ícone alemão com motor 3.8L biturbo de 650 cv, tração integral e câmbio PDK. Faz de 0 a 100 km/h em 2,7 s. Luxo e velocidade em harmonia.'
    ],
    [
        'marca' => 'Ferrari',
        'modelo' => 'FERRARI 12CILINDRI 2025',
        'ano' => '2025',
        'cor' => 'vermelho',
        'capa' => 'images/cars/ferrari12cilindri.jpg',
        'destaque' => true,
        'descricao' => 'Gran turismo V12 de 830 cv com design futurista e alma clássica. Motor 6.5L aspirado, 0 a 100 km/h em 2,9 s. A nova essência da Ferrari.'
    ],
    [
        'marca' => 'Audi',
        'modelo' => 'Audi RS6',
        'ano' => '2020',
        'capa' => 'images/cars/audiRS6.jpg',
        'destaque' => true,
        'descricao' => ''
    ],
    [
        'marca' => 'Pagani',
        'modelo' => 'Pagani Zonda R',
        'ano' => '2011',
        'capa' => 'images/cars/paganiZondaR.jpg',
        'destaque' => true,
        'descricao' => '',
    ],
    [
        'marca' => 'Lamborghini',
        'modelo' => 'Lamborghini Avendador',
        'ano' => '2011',
        'capa' => 'images/cars/lamborghiniAventador.png',
        'destaque' => true,
        'descricao' => ''
    ]
];

$x = true;
$c = 1;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
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
                        <li><a href="#about" class="linkNav">Sobre</a></li>
                        <li><a href="#iventario" class="linkNav">Galeria</a></li>
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
                        <?php if ($carro['destaque'] == true && $x == true): ?>
                            <div class="carousel-item active">
                                <img src="<?= $carro['capa'] ?>" class="d-block w-100" alt="<?= $carro['modelo'] ?>">
                            </div>
                            <?= $x = false; ?>
                        <?php elseif ($carro['destaque'] == true && $x == false): ?>
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

        <div class="headContainer ivenTitle" id="iventario">
            <h2 class="logoHead logoHead02">Iventário</h2>
        </div>
        <!-- Iventário -->
        <div class="tableCard">
            <?php foreach ($destaques as $carro): ?>
                <div class="card bg-dark text-white">
                    <img class="card-img" src="<?= $carro['capa'] ?>" alt="<?= $carro['modelo'] ?>">
                    <div class="card-img-overlay">
                        <h5 class="card-title"><?= $carro['modelo'] ?></h5>
                        <p class="card-text"><?= $carro['descricao'] ?></p>
                        <p class="card-text"><?= $carro['ano'] ?></p>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

        <div class="aboutSection">
            <div class="aboutTitleSection" id="about">
                <h1 class="aboutTitle">TopGear</h1>
                <h2 class="aboutSubTitle">Velocidade Ilimitada</h2>

            </div>

            <div class="contentAbout">
                <h2 class="aboutTitle02">Sobre Nós</h2>
                <div class="aboutText">
                    <p>Somos apaixonados por velocidade, design e inovação. Este site nasceu da vontade de compartilhar
                        a
                        beleza
                        e o poder dos carros esportivos e de luxo com todos que, assim como nós, admiram a excelência
                        automotiva. Aqui, você encontrará uma seleção visual dos modelos mais icônicos, modernos e
                        desejados
                        do
                        mundo automobilístico — sem fins comerciais, apenas com o objetivo de encantar, inspirar e
                        conectar
                        entusiastas. Nosso foco é proporcionar uma experiência visual envolvente, destacando detalhes,
                        curvas,
                        motores e tudo o que torna cada máquina única. Acreditamos que carros não são apenas meios de
                        transporte
                        — são obras de arte sobre rodas. Seja bem-vindo ao nosso universo automotivo. Acelere com a
                        gente!
                    </p>
                </div>

            </div>
        </div>

    </main>
    <footer>
        <div class="footerAlign">
            <div class="container footerContent">
                <div class="footerLogo">TopGear</div>
                <p class="copyright">@ <?= date('Y') ?> Todos os direitos reservados</p>
            </div>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>


</body>

</html>