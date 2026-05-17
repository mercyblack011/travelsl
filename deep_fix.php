<?php
$placeDir = __DIR__ . "/place";

$files = array_filter(scandir($placeDir), function($f) {
    return substr($f, -4) === '.php' && $f !== 'place.py' && $f !== 'places.xlsx' && $f !== 'adams-peak.php';
});

$fixedCount = 0;

foreach ($files as $fileName) {
    $filePath = $placeDir . "/" . $fileName;
    $content = file_get_contents($filePath);
    
    // Check if file still has old code remnants
    // Pattern: if there's old window.onload script after preloader
    if (strpos($content, 'window.onload = function()') !== false && strpos($content, 'class="preloader"') !== false) {
        // Remove old window.onload script block
        $pattern = '/\s*<script>\s*window\.onload = function\(\).*?<\/script>\s*/s';
        $newContent = preg_replace($pattern, '', $content);
        
        // Also remove any orphaned <hr/> tags
        $newContent = preg_replace('/<hr\/>/s', '', $newContent);
        
        // Remove extra orphaned closing divs that might be leftover
        // Pattern: after preloader closing divs, before <!-- HERO --> comment, remove extra divs
        $newContent = preg_replace('/(<\/div>\s*){2,}(\s*<!-- HERO -->)/s', '$1$2', $newContent);
        
        if ($newContent !== $content) {
            file_put_contents($filePath, $newContent);
            $fixedCount++;
            echo "✓ Deep fixed: $fileName\n";
        }
    }
}

echo "\n=== Deep Fix Summary ===\n";
echo "Deep fixed: $fixedCount files\n";
?>
