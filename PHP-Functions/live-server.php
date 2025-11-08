<?php if (file_exists('dist/manifest.json')): ?>
        <?php
        $manifest = json_decode(file_get_contents('dist/manifest.json'), true);
        $cssFile = $manifest['src/main.js']['css'][0] ?? null;
        $jsFile = $manifest['src/main.js']['file'] ?? null;
        ?>
        <?php if ($cssFile): ?>
            <link rel="stylesheet" href="/vite-php-project/dist/<?php echo $cssFile; ?>">
        <?php endif; ?>
    <?php else: ?>
        <script type="module" src="http://localhost:5173/@vite/client"></script>
        <script type="module" src="http://localhost:5173/src/main.js"></script>
    <?php endif; ?>