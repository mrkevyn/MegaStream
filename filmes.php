<?php include 'header.php'; ?>
<div class="category">
    <h2>Filmes</h2>
    <div class="item-list">
        <?php
        $filmes = [
            ["imdb" => "550", "name" => "Filme 1", "image" => "filme1.jpg"],
            ["imdb" => "551", "name" => "Filme 2", "image" => "filme2.jpg"],
            // Adicione mais filmes conforme necessário
        ];

        foreach ($filmes as $filme) {
            echo '<div class="item">';
            echo '<img src="' . htmlspecialchars($filme['image']) . '" alt="' . htmlspecialchars($filme['name']) . '">';
            echo '<h3>' . htmlspecialchars($filme['name']) . '</h3>';
            echo '<button onclick="watchItem(\'' . htmlspecialchars($filme['imdb']) . '\', \'filme\')">Assistir</button>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<?php include 'footer.php'; ?>
