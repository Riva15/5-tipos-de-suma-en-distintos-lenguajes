<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERACION SUMA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h4 {
            color: #007acc;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            background-color: #007acc;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #005f99;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #007acc;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="" method="post">
        <h4>Digite el primer valor</h4>
        <input type="number" name="var1" required>

        <h4>Digite el segundo valor</h4>
        <input type="number" name="var2" required>
        <br><br>
        <button type="submit">Sumar</button>
    </form>

    <div class="result">
        <?php
        $resultado = '';
        if(!empty($_POST['var1']) && !empty($_POST['var2'])){
            $resultado = $_POST['var1'] + $_POST['var2'];
        }

        if($resultado != ''){
            echo "La suma es: ".$resultado;
        }
        ?>
    </div>
</div>

</body>
</html>
