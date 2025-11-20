<?php
/**
 * api/index.php
 * This file will handle ALL incoming requests when you use the route
 * { "src": "/(.*)", "dest": "/api/index.php" } in vercel.json
 */

// Enable error reporting during development (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
 ┌─────────────────────────────────────────────────────────────
 │ 1. Basic "Hello World" test
 └─────────────────────────────────────────────────────────────
*/
// Uncomment the line below for the simplest possible test:
// echo "Hello from PHP " . PHP_VERSION . " on Vercel! 🚀";

/*
 ┌─────────────────────────────────────────────────────────────
 │ 2. Real-world single-file router (recommended)
 └─────────────────────────────────────────────────────────────
*/

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$query_string   = $_SERVER['QUERY_STRING'] ?? '';
$method         = $_SERVER['REQUEST_METHOD'];

// Remove base path if your project is deployed as a Vercel Project (not a site with custom domain root)
$base_path = ''; // change to '/your-subdirectory' if needed
$path = substr($request_uri, strlen($base_path));

/**
 * Simple routing examples
 */
match (true) {
    // Home page
    $path === '/' || $path === '/index.php' => require __DIR__ . '/pages/home.php',

    // API endpoints
    preg_match('#^/api/users(/.*)?$#', $path, $m) => handleUsersApi($m[1] ?? '', $method),

    // Serve static files that actually exist (optional but useful)
    preg_match('#^/public/(.*)$#', $path, $m) && file_exists(__DIR__ . '/public/' . $m[1])
        => serveStaticFile(__DIR__ . '/public/' . $m[1], $m[1]),

    // 404 fallback
    default => http_response_code(404) . print('404 – Not Found'),
};

/* ────── Helper Functions ────── */

function handleUsersApi($subpath, $method) {
    header('Content-Type: application/json');
    $users = [
        ['id' => 1, 'name' => 'Alice'],
        ['id' => 2, 'name' => 'Bob'],
    ];

    if ($method === 'GET' && $subpath === '') {
        echo json_encode($users);
        return;
    }

    http_response_code(404);
    echo json_encode(['error' => 'Not found']);
}

// Optional: serve images, CSS, JS that live in /public folder
function serveStaticFile($filepath, $requestedName) {
    $ext = strtolower(pathinfo($requestedName, PATHINFO_EXTENSION));
    $mimes = [
        'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png',
        'gif' => 'image/gif', 'css' => 'text/css', 'js' => 'text/javascript',
        'woff2' => 'font/woff2', 'pdf' => 'application/pdf'
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
        header('Cache-Control: public, max-age=31536000, immutable');
        readfile($filepath);
        return;
    }
    http_response_code(403);
}

/*
 ┌─────────────────────────────────────────────────────────────
 │ 3. If you prefer classic file-based routing (no single-file router)
 └─────────────────────────────────────────────────────────────
 │ Just put real .php files inside /api (e.g. api/about.php)
 │ and Vercel will automatically map /about → api/about.php
 │ In that case you can keep index.php super simple:
*/

// Simple fallback if you use file-based routing instead of the router above
// if (file_exists(__DIR__ . $path . '.php')) {
//     return false; // let Vercel handle it natively
// }

// Or just show a welcome page:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP on Vercel</title>
    <style>
        body { font-family: system-ui, sans-serif; text-align: center; margin-top: 10vh; }
        code { background: #f4f4f4; padding: 2px 6px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>🚀 PHP <?php echo PHP_VERSION; ?> running on Vercel!</h1>
    <p>Your <code>api/index.php</code> is working perfectly.</p>
    <p><small>Deployed on <?php echo date('Y-m-d H:i:s'); ?> UTC</small></p>
</body>
</html>