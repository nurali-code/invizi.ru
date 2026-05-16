<?php
/**
 * Build script: renders each PHP page to a static .html file.
 * Run from CLI:  php build-static.php
 */

$dir = __DIR__;

$pages = [
    'index.php',
    'home.php',
    'catalog.php',
    'produkt.php',
    'installation.php',
    'jobs.php',
    'job.php',
    'news.php',
    'new.php',
    'delivery.php',
    'faq.php',
    'contacts.php',
    'video-reviews.php',
    'search.php',
    'vstroyennyye-pylesosy.php',
    'full-form-dynamica.php',
];

$count = 0;

foreach ($pages as $phpFile) {
    $src = $dir . '/' . $phpFile;
    if (!file_exists($src)) {
        echo "SKIP (not found): $phpFile\n";
        continue;
    }

    $htmlFile = preg_replace('/\.php$/', '.html', $phpFile);
    $dst = $dir . '/' . $htmlFile;

    ob_start();
    include $src;
    $html = ob_get_clean();

    file_put_contents($dst, $html);
    $size = strlen($html);
    echo "OK: $phpFile -> $htmlFile ({$size} bytes)\n";
    $count++;
}

echo "\nDone! Generated {$count} static HTML files.\n";
