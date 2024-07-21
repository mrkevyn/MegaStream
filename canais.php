<?php include 'header.php'; ?>

<div class="category">
    <h2>Canais de TV</h2>
    <div class="item-list">
        <?php
        // Array simulando a lista de canais de TV
        $canais = [
            ["name" => "telecine-pipoca", "image" => "img/Telecine_Pipoca.png"],
            ["name" => "Canal 2", "image" => "canal2.jpg"],
            // Adicione mais canais conforme necessário
        ];

        // Loop para exibir cada canal
        foreach ($canais as $canal) {
            echo '<div class="item">';
            echo '<img src="' . htmlspecialchars($canal['image']) . '" alt="' . htmlspecialchars($canal['name']) . '">';
            echo '<h3>' . htmlspecialchars($canal['name']) . '</h3>';
            // Botão para assistir o canal diretamente
            echo '<button onclick="watchChannel(\'' . htmlspecialchars($canal['name']) . '\')">Assistir</button>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<div id="SuperFlixAPIContainerVideo" style="margin-top: 20px;">
    <iframe id="videoPlayer" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
</div>

<script>
function watchChannel(canalName) {
    var iframe = document.getElementById('videoPlayer');
    iframe.src = 'https://superflixapi.dev/tv/' + encodeURIComponent(canalName);
}
</script>

<?php include 'footer.php'; ?>
