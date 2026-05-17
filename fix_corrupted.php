<?php
$placeDir = __DIR__ . "/place";

$files = array_filter(scandir($placeDir), function($f) {
    return substr($f, -4) === '.php' && $f !== 'place.py' && $f !== 'places.xlsx' && $f !== 'adams-peak.php';
});

$fixedCount = 0;

foreach ($files as $fileName) {
    $filePath = $placeDir . "/" . $fileName;
    $content = file_get_contents($filePath);
    
    // Fix the corrupted preloader remnants
    // Pattern: after </div> (closing preloader), remove orphaned <hr/> tags and extra closing divs
    $pattern = '/(<div class="preloader" id="preloader">.*?<\/div>\s*<\/div>\s*)<!-- HERO -->\s*<hr\/><hr\/><hr\/><hr\/>\s*<\/div>\s*<\/div>/s';
    $replacement = '$1<!-- HERO -->';
    
    if (preg_match($pattern, $content)) {
        $newContent = preg_replace($pattern, $replacement, $content);
        
        if ($newContent !== $content) {
            file_put_contents($filePath, $newContent);
            $fixedCount++;
            echo "✓ Fixed: $fileName\n";
        }
    }
}

echo "\n=== Summary ===\n";
echo "Fixed: $fixedCount files\n";
?>
