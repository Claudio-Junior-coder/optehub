<header class="header-container">
    <a href="../app/home-page.php"> <img class="logo" src="../images/logo.png" alt="Logo Optehub"> </a>
    <div class="menu-configs">
        <div>
            <a class="btn-reunion-call">AGENDAR REUNIÃO ONLINE</a>
        </div>
        <div>
            <button class="btn-menu"> <img src="../images/menu.png" alt="menu icon"> </button>
        </div>
    </div>
    <nav class="menu">
        <a class="btn-close"><img src="../images/close-menu.png" alt="Optehub item"></a>
        <ul>
            <li><a href="../app/home-page.php">Inicio</a></li>
            <li><a href="../app/login-register.php">Logar / Cadastrar</a></li>
            <li><a href="../app/dashboard.php">Administrar</a></li>
            <li class="reunion-agendament"><a href="#">Agendar Reunião Online</a></li>
        </ul>
    </nav>
</header>




<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script>
    $(".btn-menu").click(function() {
        $(".menu").show();
    })
    $(".btn-close").click(function() {
        $(".menu").hide();
    })
</script>