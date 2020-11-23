

<script>
    $(document).ready(function() { 
        window.location.href='#roll-adm';
    });
</script>

<section class="dashboard">
    <div class="bg-dashboard" id="roll-adm">
        <div class="div-post-form"> 
            <h3>Administrar</h3>
            
            <p class='name-user'>Seja bem vindo(a) <?php echo $_SESSION["user"][0]; ?>.</p>

            <div class="ajust-dash">
            <!-- Cadastrar -->

                <?php                

                if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['create'])) {

                    require("../configs/connection.php");

                    $title = $_POST['title'];
                    $description = $_POST['description'];

                    if ($title && $description != "") {

                        if (isset($title) && isset($description) && $conn != null) {
                            $query = $conn->prepare("SELECT * FROM posts WHERE title = ? AND description = ?");
                            $query->execute(array($title, $description));
                            if ($query->rowCount()) {
                                
                            } else {
                                $query = $conn->prepare("INSERT INTO posts (title, description) VALUES('$title', '$description')");
                                $query->execute(array($title, $description));
                                echo "<label class='info-register'>* Cadastrado com sucesso!</p>";
                            }
                        }
                    } else {
                        echo "<label class='info-register'>* Preencha todos os campos.</label>";
                    }
                }
                ?>
            </div>

            <div>
            <!-- Editar -->
            <?php             
                
                $titleEdit =  '';
                $descriptionEdit = '';
                $update = false;                   


                if (isset($_GET['ie'])) {

                    $id = $_GET['ie'];

                    require("../configs/connection.php");

                    $query = $conn->query("SELECT * FROM posts WHERE id=$id");                   


                    if($query->rowCount()) {                        
                        $row = $query->fetch(PDO::FETCH_ASSOC);
                        $titleEdit = $row['title'];
                        $descriptionEdit = $row["description"];     
                        $update = true;                   
                    }
                    
                }

                if (isset($_POST['update'])) {

                    require("../configs/connection.php");

                    $id = $_GET['ie'];
                    $title = $_POST['title'];
                    $description = $_POST['description'];


                    $query = $conn->prepare("UPDATE posts SET title='$title', description='$description' WHERE id='$id';");

                    if ($query->execute(array($id))) {
                        echo "<label class='info-register'>* Atualizado com sucesso!</p>";
                        echo "<script> window.location = '../app/dashboard.php'</script>";
                    } else {
                        echo "<label class='info-register'>* Erro ao atualizar!</label>";
                    }
                }
            ?>
        </div>

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="form-post">
                <div class="form-group-post">
                    <label for="title">Titulo:</label>
                    <input type="text" value="<?php  echo $titleEdit; ?>" class="form-control-post" id="title" name="title">
                </div>
                <div class="form-group-post">
                    <label for="description">Descrição:</label>
                    <textarea  maxlength="145" type="text" class="form-control-post" id="description" name="description" ><?php  echo $descriptionEdit; ?></textarea>
                </div>
                <div class="btn-post">
                    <?php
                        if ($update == true) :
                    ?>
                        <button type="submit" name="update">Atualizar</button>
                    <?php else: ?>
                        <button type="submit" name="create">Cadastrar</button>
                    <?php endif ?> 
                </div>
            </form>
        </div>

        <div class="div-table">
            <table class="table">
                <thead>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Funções</th>
                    <th>-</th>
                </thead>

                <!-- Mostrar -->

                <tbody>
                    <?php
                   
                    require("../configs/connection.php");
                    $query = $conn->prepare("SELECT * FROM posts");
                    $query->execute();

                    $posts = $query->fetchAll(PDO::FETCH_ASSOC);

                    for ($i = 0; $i < sizeof($posts); $i++) :
                        $currentPost = $posts[$i];
                    ?>
                        <tr>
                            <td data-label="Titulo"><?php echo $currentPost["title"]; ?></td>
                            <td data-label="Descrição"><?php echo mb_strimwidth($currentPost["description"], 0, 20, "..."); ?></td>
                            <td data-label="Funções"><a href="?ie=<?php echo $currentPost['id'] ?>" class="btn-edit-post"> Editar </a></td>
                            <td data-label="-"><a href="?id=<?php echo $currentPost['id'] ?>" class="btn-delete-post"> Excluir </a></td>
                        </tr>
                    <?php endfor;   ?>
                </tbody>
            </table>
        </div>

        <div>
            <!-- Excluir -->
            <?php

            
                if (isset($_GET['id'])) {
                    require("../configs/connection.php");

                    

                    $currentPost = $_GET['id'];
                    $query = $conn->prepare("DELETE FROM posts WHERE id='$currentPost'");

                    if ($query->execute(array($currentPost))) {
                        echo "<label class='info-register'>* Excluído com sucesso!</p>";
                        echo "<script> window.location = '../app/dashboard.php'</script>";
                    } else {
                        echo "<label class='info-register'>* Erro ao excluir!</label>";
                    }
                }
            ?>
        </div>        

        <section class="logout">
            <div>
                <a class="btn-logout" href='../configs/logout.php'> Sair </a>
            </div>
        </section>

    </div>
</section>