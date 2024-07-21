<?php include 'header.php'; ?>
<div class="category">
    <h2>Animes</h2>
    <div class="item-list">
        <?php
        $animes = [
            ["imdb" => "8000", "name" => "Anime 1", "image" => "anime1.jpg"],
            ["imdb" => "8001", "name" => "Anime 2", "image" => "anime2.jpg"],
            // Adicione mais animes conforme necessário
        ];

        foreach ($animes as $anime) {
            echo '<div class="item">';
            echo '<img src="' . htmlspecialchars($anime['image']) . '" alt="' . htmlspecialchars($anime['name']) . '">';
            echo '<h3>' . htmlspecialchars($anime['name']) . '</h3>';
            echo '<button onclick="watchItem(\'' . htmlspecialchars($anime['imdb']) . '\', \'anime\')">Assistir</button>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<?php include 'footer.php'; ?>
