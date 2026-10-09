<?php
$nombre = 'Mauro Contador Alfonso';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica Git - Mauro Contador Alfonso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        main {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        h1 { color: #1d3557; }
        p { color: #555; }
    </style>
</head>
<body>
    <main>
        <h1><?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?></h1>
        <p>UT2 - Práctica de control de versiones con Git</p>
    </main>
</body>
</html>

