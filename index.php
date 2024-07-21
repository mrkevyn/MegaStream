<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperFlix</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="hero">
        <div class="hero-content">
            <h1>Descubra o Melhor Entretenimento</h1>
            <p>Explore uma vasta coleção de séries, filmes, animes e canais de TV ao seu alcance.</p>
            <a href="#content" class="btn-primary">Explore Agora</a>
        </div>
    </div>


    <div id="content" class="container">
        <section class="category">
            <h2>Novidades da Semana</h2>
            <div class="item-list">
                <!-- Adicione itens manualmente ou dinamicamente -->
                <div class="item">
                    <img src="novidade1.jpg" alt="Novidade 1">
                    <h3>Novidade 1</h3>
                    <p>Descrição da Novidade 1</p>
                </div>
                <div class="item">
                    <img src="novidade2.jpg" alt="Novidade 2">
                    <h3>Novidade 2</h3>
                    <p>Descrição da Novidade 2</p>
                </div>
            </div>
        </section>

        <section class="category">
            <h2>Canais de TV</h2>
            <div class="item-list">
                <!-- Adicione canais manualmente ou dinamicamente -->
                <div class="item">
                    <img src="canal1.jpg" alt="Canal 1">
                    <h3>Canal 1</h3>
                    <p>Descrição do Canal 1</p>
                    <button onclick="watchChannel('canal1')">Assistir</button>
                </div>
                <div class="item">
                    <img src="canal2.jpg" alt="Canal 2">
                    <h3>Canal 2</h3>
                    <p>Descrição do Canal 2</p>
                    <button onclick="watchChannel('canal2')">Assistir</button>
                </div>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>

    <script>
    function watchChannel(canalName) {
        var iframe = document.getElementById('videoPlayer');
        iframe.src = 'https://superflixapi.dev/tv/' + encodeURIComponent(canalName);
    }
    </script>
</body>
</html>
