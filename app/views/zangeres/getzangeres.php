<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://mvc-oop-toets.com/public/css/Styling.css">
    <title>Rijkste Zangeressen</title>
</head>
<body>
    <h3><?= $data['title']; ?></h3>

    <table>
        <thead>
            <th>Naam</th>
            <th>NettoWaarde (Miljoen)</th>
            <th>Land</th>
            <th>Mobiel</th>
            <th>Leeftijd</th>
        </thead>
        <tbody>
            <?= $data['tableRows']; ?>
        </tbody>
    </table>
    
</body>
</html>





