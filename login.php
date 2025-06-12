<!DOCTYPE html>
<html lang="en">

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
                        <li><a href="index.php">Início</a></li>
                        <li><a href="#about" class="linkNav">Sobre</a></li>
                        <li><a href="#iventario" class="linkNav">Galeria</a></li>
                        <li><a href="#" class="linkNav">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="loginTitle">
            <h1 class="loginPage">Login</h1>
        </div>
        <div class="aboutForm">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="aboutCheckBox">
            <p class="aboutCheck">Não tem uma conta? Registre-se <a href="#">Aqui!!</a></p>
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
</body>

</html>