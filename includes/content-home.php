<section class="page-first-content">
    <div class="css-div info-one">
        <h1>Outsourcing <br>
            Plano Instituído</h1>

        <p class="css-p">A solução mais completa do mercado <br>
            para a administração de uma entidade <br>
            de previdência privada, esta disponível <br>
            para sua EFPC agora via outsourcing.</p>

        <button class="btn-orange knowmore">Saber Mais</button>
    </div>

    <div>
        <div class="css-div info-two">
            <h1>Zero</h1>
            <img class="orange-item" src="../images/orange-item.png" alt="Optehub item">
            <p class="css-p">Sem burocrácia ou letras miúdas</p>
        </div>

        <div class="css-div-three info-three">
            <h1>Digital</h1>
            <img class="orange-item-two" src="../images/orange-item.png" alt="Optehub item">
            <p class="css-p">Adesão à concessão, tudo online</p>
        </div>

        <div class="css-div info-four">
            <p> <img src="../images/white-item.png" alt="Optehub item"> OPTE+ outsourcing of the future</p>
        </div>
    </div>
</section>

<main class="main-content">
    <section>
        <div class="css-div info-five">
            <h1>Sua EFPC pronta <br>
                para ganhar escala <br>
                e reduzir custos</h1>
            <p class="css-p">O sistema outsourcing OPTE+, é uma ferramenta 100% web única, integrada, flexível e totalmente <br>
                parametrizável a qualquer tipo de entidade fechada de previdência privada.</p>
        </div>

        <div class="css-div info-six">
            <img src="../images/text-1b.png" alt="Optehub 1bi text">
            <p>Com o OPTE+ sua Entidade ganha escala e
                pode focar na sustentabilidade no negócio</p>
        </div>
    </section>

    <section>
        <div class="responsive-configs-icons">
            <div class="css-div info-seven">
                <h1>All in One</h1>
                <p class="css-p exeption-p-two">Uma única plataforma, todas funcionalidades</p>
            </div>
            <div class="css-div-icons info-eight">
                <img class="size-icon" src="../images/planning.png" alt="Optehub planning">
                <h1 class="color-orange">planning</h1>
                <p class="css-p">planejamento e estudos de viabilidade técnica</p>
            </div>

            <div class="css-div-icons info-nine">
                <img class="size-icon" src="../images/design.png" alt="Optehub design">
                <h1 class="color-orange">design</h1>
                <p class="css-p">desenho, protótipo <br>
                    e aprovação do plano</p>
            </div>

            <div class="css-div-icons info-ten">
                <img class="size-icon" src="../images/execution.png" alt="Optehub planning">
                <h1 class="color-orange">execution</h1>
                <p class="css-p">start macro e micro <br>
                    processos da operação</p>
            </div>
        </div>

    </section>

    <section>
        <div class="css-div info-eleven">
            <h1>O outsorcing prev <br>
                mais flexível do Brasil</h1>
            <p class="exection-p">Esqueça aquela operação complexa e rigida, descubra como um plano de previdencia Instituído pode <br>
                ser desenhadoo, aprovado e implementado em até 60 dias!</p>
        </div>
    </section>

    <section class="content-database">

        <?php

        require("../configs/connection.php");
        $query = $conn->prepare("SELECT * FROM posts");
        $query->execute();

        $posts = $query->fetchAll(PDO::FETCH_ASSOC);
        $orange = true;

        for ($i = 0; $i < sizeof($posts); $i++) :
            $currentPost = $posts[$i];

            $color = ($orange ? "color-orange" : "color-white");

        ?>

            <div class="block-info">
                <?php
                if ($i % 3 === 2) {
                    $orange = !$orange;
                    echo '<h5 class="uppercase ' . $color . '">' . $currentPost["title"] . "</h5>";
                } else {
                    echo '<h5 class="uppercase ' . $color . '">' . $currentPost["title"] . "</h5>";
                }
                ?>
                <p class="p-post"><?php echo $currentPost["description"]; ?></p>
            </div>

        <?php endfor ?>

    </section>

    <section>
        <div class="last-buttons">
            <div>
                <button class="btn-configs btn-orange">Solicitar Proposta Online</button>
            </div>
            <div>
                <button class="btn-configs  btn-togo-website">Ir para o site Optehub</button>
            </div>
        </div>
    </section>

</main>