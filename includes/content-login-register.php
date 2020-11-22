
<script>
    $(document).ready(function() { 
        window.location.href='#roll';
    });
</script>

<section class="style-form" id="roll">
    <div class="container-form">
        <div class="ajust-form">
            <h3>Logar</h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">
                    <label for="userLogin">Usuário</label>
                    <input type="text" class="form-control" id="userLogin" name="userLogin">
                </div>
                <div class="form-group">
                    <label for="passwordLogin">Senha</label>
                    <input type="password" class="form-control" id="passwordLogin" name="passwordLogin">
                </div>
                <div>
                    <?php

                    if (isset($_POST['userLogin']) && isset($_POST['passwordLogin'])) {  
                        require("../configs/connection.php");


                        $name_login = $_POST['userLogin'];
                        $password_login = $_POST['passwordLogin'];

                        if (isset($name_login)  && isset($password_login) && $conn != null) {
                            $query = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ?");
                            $query->execute(array($name_login, $password_login));

                            if ($query->rowCount()) {
                                $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
                                session_start();
                                $_SESSION["user"] = array($user["name"]);

                                echo "<script> window.location = '../app/dashboard.php' </script>";
                            } else {
                                echo "<label class='info-register'>* Este usuário não existe.</label>";
                            }
                        } else {
                            echo "<script> window.location = '../app/login-register.php' </script>";
                        }
                    }
                    ?>
                </div>
                <button type="submit" class="btn-join">Logar</button>
            </form>
        </div>
    </div>

    <div class="container-form">
        <div class="ajust-form">
            <h3>Cadastrar</h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">
                    <label for="user">Usuário</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div>
                    <?php
                    if (isset($_POST['user']) && isset($_POST['email'])  && isset($_POST['password'])) {

                        require("../configs/connection.php");

                        $name = $_POST['user'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        if ($name && $email && $password != "") {

                            if (isset($name) && isset($email)  && isset($password) && $conn != null) {
                                $query = $conn->prepare("SELECT * FROM users WHERE name = ? AND email = ? AND password = ?");
                                $query->execute(array($name, $email, $password));
                                if ($query->rowCount()) {
                                    echo "<label class='info-register'>* Este usuário já existe !</label>";
                                } else {
                                    $query = $conn->prepare("INSERT INTO users (name, email, password) VALUES('$name', '$email', '$password')");
                                    $query->execute(array($name, $email, $password));
                                    echo "<label class='info-register'>* Cadastrado com sucesso!</p>";
                                }
                            }
                        } else {
                            echo "<label class='info-register'>* Preencha todos os campos.</label>";
                        }
                    }

                    ?>
                </div>
                <button type="submit" class="btn-register">Cadastrar</button>
            </form>
        </div>
    </div>

</section>