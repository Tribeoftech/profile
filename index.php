<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Include your CSS and JavaScript files here -->
</head>
<body>

    <?php
    // Your PHP logic for dynamic content or server-side processing
    // You can include HTML or use PHP to generate dynamic content
    // Example: Display a dynamic greeting based on the time of day
    $hour = date('H');
    $greeting = ($hour < 12) ? 'Good morning' : ($hour < 18) ? 'Good afternoon' : 'Good evening';
    ?>

    <header>
        <h1><?php echo $greeting; ?>, Welcome to Your Website!</h1>
    </header>

    <!-- Include your existing HTML content here -->

    <?php
    // Include your existing PHP logic (e.g., form submission handling) if needed
    include 'send_message.php';
    ?>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Website. All rights reserved.</p>
    </footer>

    <!-- Include your JavaScript file here -->
    <script src="app.js"></script>

</body>
</html>

