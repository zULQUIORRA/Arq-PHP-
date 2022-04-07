<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!--
            get dados via url
            post - dados ocultos
-->
        <form action="proc.php" method="POST">
            <div>
                <label> Nome:</label>
                <input type="text" id="nome" name="nome"/>
                <?php
                 if (isset($_GET['erro']) && $_GET['erro'] == "nome"){
                 echo "<span style='color:red' >*</span>";
                 }
                ?>
            </div>
            <div>
                <label> Sexo:</label>
                <input type="radio" id="sexo" name="sexo" value="f"/> feminino
                <input type="radio" id="sexo" name="sexo" checked value="m"/> masculino
            </div>
                 <label> Senha:</label>
                 <input type="password" id="x" name="senha" />
                 <?php
                   if(isset($_GET['erro']) && $_GET['erro'] == "senha"){ 
                   echo "<span style= 'color:red' >*</span>";
                 }
                ?>
                </div>
                <label> CPF:</label>
                 <input type="text" id="CPF" name= "CPF" />
                 <?php
                 if (isset($_GET['erro']) && $_GET['erro'] == "CPF"){
                 echo "<span style= 'color:red' >*</span>";
                 }
                 ?>

                </div>
                <label> RG:</label>
                 <input type="text" id="RG" name= "RG" />
                 <?php
                  if (isset($_GET['erro']) && $_GET['erro'] == "RG"){
                 echo "<span style= 'color:red' >*</span>";
                  }
                  ?>
                </div>
                <input type= "submit" value="Cadastro"/>
                </form action= "upload.php" method= "post" enctype = "multpart/form-data">
                     <input type = "file" name = "upload" />
                     <input type = "submit" value = "fazer upload" />

                </form>

            <?php
            //move_uploaded_file($_FILES["upload"]["tmp_name"], './arq/'.$_FILES["upload"]['name']);
            ?>
            
            </div>
        </form>
    </body>
</html>