<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? htmlspecialchars($title) : 'Welcome'; ?> - MMG Autozone</title>
    <base href="/website/website/public/">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <h1><a href="./">MMG Autozone</a></h1>
            </div>
            <ul class="nav-links">
                <li><a href="./" class="<?php echo Route::currentRouteName() == 'home' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="products" class="<?php echo Route::currentRouteName() == 'products' ? 'active' : ''; ?>">Products & Services</a></li>
                <li><a href="about" class="<?php echo Route::currentRouteName() == 'about' ? 'active' : ''; ?>">About Us</a></li>
                <li><a href="contact" class="<?php echo Route::currentRouteName() == 'contact' ? 'active' : ''; ?>">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content (Vue mount point) -->
    <main id="vue-root" class="main-content">
        <?php echo isset($content) ? $content : ''; ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
            <div class="container">
            <p>&copy; 2025 MMG Autozone. All rights reserved.</p>
        </div>
    </footer>

    <!-- Load Vue from CDN (no npm required) -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <!-- Small mount script to initialize a minimal Vue app without build step -->
    <script src="js/vue-mount.js"></script>
</body>
</html>
