<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DygHost.cz | Minecraft Hosting</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <nav>
        <div class="logo">DygHost<span>.cz</span></div>
        <div class="nav-links">
            <a href="#domov">Domov</a>
            <a href="#sluzby">Služby</a>
            <a href="#support">Support</a>
        </div>
    </nav>

    <header id="domov">
        <div class="hero">
            <h1>Minecraft Hosting 24/7</h1>
            <p>Výkon, stabilita a podpora, na ktorú sa môžeš spoľahnúť.</p>
            <div class="hero-btns">
                <a href="#sluzby" class="btn btn-primary">Pozrieť Služby</a>
                <a href="#support" class="btn btn-secondary">Technická Podpora</a>
            </div>
        </div>
    </header>

    <section id="sluzby" class="container">
        <h2>Naše Služby</h2>
        <div class="grid">
            <div class="card">
                <i class="fas fa-server"></i>
                <h3>MC Standard</h3>
                <p>Ideálne pre malé partie priateľov.</p>
                <span>Od 2.00€ / mesiac</span>
            </div>
            <div class="card">
                <i class="fas fa-bolt"></i>
                <h3>MC Ultra</h3>
                <p>Pre veľké servery s módmi a pluginmi.</p>
                <span>Od 5.00€ / mesiac</span>
            </div>
        </div>
    </section>

    <section id="support" class="container bg-dark">
        <h2>Support (Podpora)</h2>
        <p>Potrebuješ pomôcť s nastavením? Sme tu pre teba 24/7.</p>
        <div class="support-box">
            <button onclick="openTicket()" class="btn btn-ticket">Otvoriť Support Ticket</button>
            <p><small>Aktuálna čakacia doba: <span id="wait-time">~5 minút</span></small></p>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> DygHost.cz - Všetky práva vyhradené.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
