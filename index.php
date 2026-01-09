<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Môj Minecraft Server</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Vitaj na Minecraft Serveri!</h1>
        <p>Hostované na <span class="dyghost">DygHost.cz</span></p>
    </header>

    <main>
        <section class="server-info">
            <h2>Status Servera</h2>
            <div id="status">Načítavam informácie...</div>
            
            <button onclick="copyIP()">Kopírovať IP adresu</button>
            <p id="ip-text">play.tvojserver.cz</p>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
