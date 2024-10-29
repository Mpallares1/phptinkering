<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Bases de Dades d'Equips i Pel·lícules</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estils globals */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            color: #444;
            background-color: #f9f9fb;
            overflow-x: hidden;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header */
        header {
            background-color: #4a306d;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700;
            animation: fadeInDown 1s ease;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 15px;
            transition: color 0.3s, background 0.3s;
            border-radius: 5px;
        }
        nav ul li a:hover {
            background-color: #d4af37;
            color: #4a306d;
        }

        /* Barra de progrés de scroll */
        #progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 5px;
            background-color: #d4af37;
            z-index: 999;
        }

        /* Animacions */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Secció d'introducció */
        .intro-section {
            text-align: center;
            padding: 60px 0;
            color: #666;
            animation: fadeInUp 1.5s ease;
        }
        .intro-section p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
        }

        /* Seccions de bases de dades */
        .card-section {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            padding: 40px 0;
        }
        .card {
            background-color: #fff;
            border-radius: 12px;
            padding: 40px 30px;
            width: 100%;
            max-width: 350px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(74, 48, 109, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            animation: scaleIn 1.5s ease;
            border-top: 5px solid #d4af37;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(74, 48, 109, 0.2);
        }
        .card h2 {
            color: #4a306d;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        .card p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.5;
            font-size: 1rem;
        }
        .btn {
            display: inline-block;
            padding: 10px 25px;
            background-color: #4a306d;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn:hover {
            background-color: #d4af37;
            color: #4a306d;
            transform: scale(1.05);
        }

        /* Característiques */
        .features-section {
            text-align: center;
            padding: 60px 0;
            background-color: #f8f9fc;
        }
        .features-section h2 {
            margin-bottom: 40px;
            color: #4a306d;
            font-size: 2rem;
        }
        .feature-card {
            display: inline-block;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 300px;
            margin: 20px;
        }
        .feature-card h3 {
            color: #4a306d;
            margin-bottom: 10px;
        }

        /* Iconos redes sociales */
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px 0;
        }
        .social-icons a {
            color: #d4af37;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #4a306d;
        }

        /* Footer */
        footer {
            background-color: #4a306d;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 0.9rem;
            border-top: 3px solid #d4af37;
        }
        .project-overview-section {
            text-align: center;
            padding: 50px 20px;
            background-color: #f1f5f9;
        }
        .project-overview-section h2 {
            color: #4a306d;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .project-details {
            list-style: none;
            padding: 0;
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }
        .project-details li {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .project-details li strong {
            color: #4a306d;
        }

    </style>
</head>
<body>

<!-- Barra de Progrés -->
<div id="progress-bar"></div>

<header>
    <div class="container">
        <h1>Explora les Bases de Dades d'Equips i Pel·lícules</h1>
        <nav>
            <ul>
                <li><a href="#equips">Base de Dades d'Equips</a></li>
                <li><a href="#pelicules">Base de Dades de Pel·lícules</a></li>
                <li><a href="#features">Característiques</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container">
    <section class="project-overview-section">
        <h2 class="animate__animated animate__fadeInDown">Presentació del Projecte</h2>
        <p class="animate__animated animate__fadeInUp">
            Aquest projecte es compon de tres pàgines principals per facilitar la gestió d'informació sobre pel·lícules i una altra temàtica addicional.
            La pàgina principal és una landing page que ofereix una introducció a les funcionalitats clau del lloc.
        </p>
        <ul class="project-details animate__animated animate__fadeInUp">
            <li><strong>Pàgina Principal (Landing Page):</strong> Una presentació que introdueix el projecte i les seves funcionalitats.</li>
            <li><strong>CRUD de Pel·lícules:</strong> Una pàgina on es pot gestionar una base de dades de pel·lícules. Permet crear, llegir, actualitzar i eliminar informació sobre cada pel·lícula, i ofereix una vista de detall amb informació completa.</li>
            <li><strong>CRUD Addicional:</strong> Una segona pàgina amb una altra base de dades a escollir, amb funcionalitats similars a la de pel·lícules, amb possibilitat de gestió completa i una vista de detall.</li>
        </ul>
        <p>
            Les bases de dades utilitzades en aquest projecte contenen taules amb 5 camps de diferents tipus per assegurar versatilitat en la informació.
        </p>
    </section>


    <section class="card-section">
        <div id="equips" class="card">
            <h2>Base de Dades d'Equips de Futbol</h2>
            <p>
                Descobreix detalls fascinants sobre equips de futbol d'arreu del món. Troba informació sobre la seva fundació, ciutat, país, i la lliga on competeixen.
            </p>
            <a href="/equips" class="btn">Veure Equips</a>
        </div>

        <div id="pelicules" class="card">
            <h2>Base de Dades de Pel·lícules</h2>
            <p>
                Una extensa col·lecció de pel·lícules per als apassionats del cinema. Consulta dades de títols, directors, anys d'estrena i molt més.
            </p>
            <a href="/films" class="btn">Veure Pel·lícules</a>
        </div>
    </section>

    <section id="features" class="features-section">
        <h2>Característiques Destacades</h2>
        <div class="feature-card">
            <h3>Interfície Intuïtiva</h3>
            <p>Explora fàcilment les teves dades amb una interfície dissenyada per a la comoditat de l'usuari.</p>
        </div>
        <div class="feature-card">
            <h3>Actualitzacions Regulars</h3>
            <p>La nostra base de dades s'actualitza regularment amb nova informació i estadístiques.</p>
        </div>
        <div class="feature-card">
            <h3>Compatible amb Mòbils</h3>
            <p>Accedeix a les teves dades des de qualsevol dispositiu, en qualsevol moment.</p>
        </div>
    </section>

</main>

<footer>
    <div class="social-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>

    <div class="container">
        <p>&copy; 2024 Plataforma de Bases de Dades. Tots els drets reservats.</p>
    </div>
</footer>

<script>
    window.addEventListener("load", function () {
        document.getElementById("loader").style.display = "none";
    });

    window.onscroll = function () {
        var scrollTop = document.documentElement.scrollTop;
        var scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var progress = (scrollTop / scrollHeight) * 100;
        document.getElementById("progress-bar").style.width = progress + "%";
    };
</script>

</body>
</html>