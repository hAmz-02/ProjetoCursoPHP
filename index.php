<?php
// Iventário dos carros
$carros = [
    [
        'marca' => 'bmw',
        'modelo' => 'm5',
        'ano' => '2024',
        'cor' => 'preto',
        'capa' => 'https://www.supercarclub.pl/wp-content/uploads/2022/05/BMW-M5-scaled.jpg',
        'destaque' => true
    ],
    [
        'marca' => 'mercedes',
        'modelo' => 'Mercedes-benz Amg Gt 63 2025',
        'ano' => '2025',
        'cor' => 'prata',
        'capa' => 'https://www.planetcarsz.com/img/carros/2024/09/mercedes-amg-gt-63-pro-4matic-motorsport-collectors-edition-2025-001-20240918161524-1280x925.jpg',
        'destaque' => false
    ],
    [
        'marca' => 'ferrari'    ,
        'modelo' => 'FERRARI 12CILINDRI 2025',
        'ano' => '2025',
        'cor' => 'vermelho',
        'capa' => 'https://miamiimports.com.br/wp-content/uploads/2025/01/FERRARI-12CILINDRI-ROSSO-DIANTEIRA-ESQUERDA.png',
        'destaque' => true
    ],
];

// Validador de destaques 
$destaques = [];

for($x = 0;$x < count($carros); $x++ ) {
    if($carros[$x]['destaque'] == true) {
        $destaques[] = $carros[$x];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora Hazus</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <div class="headContainer">
            <div class="logoHead">Locadora<span>Hazus</span></div>
            <nav>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Galeria</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="mainContainer">
        <section class="destaques">
            <h2 class="sectionTitle">Destaques do Momento </h2>
            <div class="carrosGrid">
                <?php foreach ($destaques as $carro): ?>
                    <?php if ($carro['destaque']): ?>
                        <div class="carroCard">
                            
                            <?php if ($carro['destaque']): ?>
                                <span class="destaqueBadge">Destaque</span>
                            <?php endif; ?>
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
                    <?php endif; ?>
                <?php endforeach; ?>
                
            </div>
        </section>

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
    </main>

    <footer>
        <div class="container footerContent">
            <div class="footerLogo">LocadoraHazus</div>
            <p class="copyright">@ <?= date('Y') ?> Todos os direitos reservados</p>
        </div>
    </footer>
</body>
</html>