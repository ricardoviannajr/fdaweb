<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro e Controle - FDADF</title>
    <style>
        /*
      color pallet

      rgb(172,175,172) - Platina

      rgb(0,125,166) - Azul Celeste

      rgb(59,95,123) - Dark Blue

      rgb(66,92,99) - Imensidão Azul

      rgb(255,255,255) - Branco
      
      */

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(172, 175, 172), rgb(0, 125, 166));
        }

        .box {

            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -20%);
            background-color: rgb(66, 92, 99);
            padding: 40px;
            border-radius: 15px;
            width: 30%;
            color: white;
        }

        fieldset {
            border: 3px solid rgb(172, 175, 172);
        }

        legend {
            border: 3px solid rgb(0, 125, 166);
            padding: 10px;
            text-align: center;
            background-color: rgb(0, 125, 166);
            border-radius: 8px;
            font-size: 20px;
        }

        .column {
            float: left;
            width: 100%;
            padding: 5px;
            /*height: 300px;*/
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .inputUser2 {
            background: rgb(66, 92, 99);
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: white;
        }

        .inputUser2:focus~.labelInput,
        .inputUser2:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: white;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(172, 175, 172), rgb(59, 95, 123));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to left, rgb(172, 175, 172), rgb(59, 95, 123));
        }

        #reset {
            background-image: linear-gradient(to right, rgb(172, 175, 172), rgb(59, 95, 123));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #reset:hover {
            background-image: linear-gradient(to left, rgb(172, 175, 172), rgb(59, 95, 123));
        }
    </style>
</head>
<body>

    <div class="box">
        <div class="row">
            <form action="save_athlete.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend><b>Cadastro de Clubes</b></legend>
                    <br>
                    <div class="column">
                        <div class="inputBox">
                            <input type="text" class="inputUser" id="name" name="name" required>
                            <label for="name" class="labelInput">Nome</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="text" class="inputUser" id="cnpj" name="cnpj" required>
                            <label for="cnpj" class="labelInput">CNPJ</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="text" class="inputUser" id="tecnico_responsavel" name="tecnico_responsavel" required>
                            <label for="tecnico_responsavel" class="labelInput">Técnico Responsável</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="text" class="inputUser" id="contact_number" name="contact_number" required>
                            <label for="contact_number" class="labelInput">Telefone de
                                Contato</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="email" class="inputUser" id="email" name="email" required>
                            <label for="email" class="labelInput">E-mail</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="submit" name="submit" id="submit"><br><br>
                            <input type="reset" name="reset" id="reset">
                        </div><br><br>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>