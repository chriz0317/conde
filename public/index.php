<?php
/**
 * Waine - Simple PHP Router for Laravel-style Blade Templates
 */

// Parse the request URI
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$script_name = dirname($_SERVER['SCRIPT_NAME']);
$route = str_replace($script_name, '', $request_uri);
if (empty($route) || $route === '/') {
    $route = '/';
}

// Simple Blade template processor
function processBlade($content) {
    // Process {{ }} expressions (echo with escaping)
    $content = preg_replace("/\{\{\s*([^}]+)\s*\}\}/", "<?php echo htmlspecialchars(\$1, ENT_QUOTES, 'UTF-8'); ?>", $content);
    
    // Process @if, @else, @endif
    $content = preg_replace("/@if\s*\(\s*(.+?)\s*\)/", "<?php if(\$1): ?>", $content);
    $content = preg_replace("/@else/", "<?php else: ?>", $content);
    $content = preg_replace("/@endif/", "<?php endif; ?>", $content);
    
    // Process @foreach, @endforeach
    $content = preg_replace("/@foreach\s*\(\s*(.+?)\s+as\s+(.+?)\s*\)/", "<?php foreach(\$1 as \$2): ?>", $content);
    $content = preg_replace("/@endforeach/", "<?php endforeach; ?>", $content);
    
    // Process @csrf (just a placeholder for now)
    $content = str_replace("@csrf", "", $content);
    
    return $content;
}

// Helper functions for templates
function view($name, $data = []) {
    extract($data);
    $file = dirname(__DIR__) . "/resources/views/$name.blade.php";
    if (!file_exists($file)) {
        http_response_code(404);
        return "View not found: $name";
    }
    
    // Get the view content
    $viewContent = file_get_contents($file);
    $viewContent = processBlade($viewContent);
    
    // Capture the view output
    ob_start();
    eval("?>" . $viewContent);
    $content = ob_get_clean();
    
    // Now render it with the layout
    $layoutFile = dirname(__DIR__) . "/resources/views/layouts/app.blade.php";
    $layoutContent = file_get_contents($layoutFile);
    $layoutContent = processBlade($layoutContent);
    
    ob_start();
    eval("?>" . $layoutContent);
    return ob_get_clean();
}

function asset($path) {
    // Return the correct path relative to public folder
    return '/' . $path;
}

function route($name) {
    $routes = [
        'home' => '/',
        'products' => '/products',
        'about' => '/about',
        'contact' => '/contact'
    ];
    return $routes[$name] ?? '/';
}

class Route {
    public static $currentRoute = 'home';
    
    public static function currentRouteName() {
        return self::$currentRoute;
    }
}

// Map routes
$route_map = [
    '/' => ['view' => 'landing', 'name' => 'home'],
    '/products' => ['view' => 'products', 'name' => 'products'],
    '/about' => ['view' => 'about', 'name' => 'about'],
    '/contact' => ['view' => 'contact', 'name' => 'contact']
];

// Find matching route
$view_name = null;
foreach ($route_map as $path => $config) {
    if ($route === $path) {
        $view_name = $config['view'];
        Route::$currentRoute = $config['name'];
        break;
    }
}

if ($view_name === null) {
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
    echo "<p>Route not found: " . htmlspecialchars($route) . "</p>";
    exit;
}

// Output the view
header('Content-Type: text/html; charset=utf-8');
echo view($view_name);
