<?php

$svgNormalization = static function (string $tempFilepath, array $iconSet) {
    $doc = new DOMDocument();
    $doc->load($tempFilepath);
    
    $xpath = new DOMXPath($doc);
    $comments = $xpath->query('//comment()');
    foreach ($comments as $comment) {
        $comment->parentNode->removeChild($comment);
    }

    $svgElement = $doc->getElementsByTagName('svg')[0];
    $svgElement->removeAttribute('width');
    $svgElement->removeAttribute('height');
    $svgElement->setAttribute('fill', 'none');
    $doc->save($tempFilepath);

    $fileLines = file($tempFilepath);
    array_shift($fileLines);

    $lastKey = count($fileLines) - 1;
    $fileLines[$lastKey] = trim($fileLines[$lastKey]);
    file_put_contents($tempFilepath, $fileLines);
};

return [
    [
        'source' => __DIR__.'/../node_modules/iranian-brands-icons',
        'destination' => __DIR__.'/../resources/svg',
        'after' => $svgNormalization,
        'safe' => true,
    ],
];
