<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        </style>
</head>
<body>
    
<form action="text.php" method="get">
        <label for="parola">Parola da censurare:</label>
        <input type="text" name="parola" required>
        <label for="sub-text">Testo da sostituire:</label>
        <textarea name="sub-text"></textarea>
        <input type="submit" value="Invia">
    </form>

</body>


</html>