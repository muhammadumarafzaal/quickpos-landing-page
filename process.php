<?php
/**
 * Contact Form Processor for QuickPOS
 * Ticket: SA-11
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Collect and sanitize input
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // 2. Validate empty fields (Requirement SA-11)
    if (empty($name) || empty($email) || empty($message)) {
        // Redirect back with an error if fields are empty
        header("Location: index.php?error=empty_fields#contact");
        exit;
    }

    // 3. Simulate success response (e.g., mail was "sent")
    // In a real app, you would use mail() or a library here.
    $success = true;

    // 4. Redirect to thank-you.html (Requirement SA-11)
    if ($success) {
        header("Location: thank-you.html");
        exit;
    }
} else {
    // If accessed directly, redirect to home
    header("Location: index.php");
    exit;
}
?>
