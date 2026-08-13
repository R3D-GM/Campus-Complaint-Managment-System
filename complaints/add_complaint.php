<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO complaint_register (user_id, complaint_title, complaint_description) VALUES (:user_id, :complaint_title, :complaint_description)");
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
        'complaint_title' => $_POST['complaint_title'],
        'complaint_description' => $_POST['complaint_description']
    ]);

    header("Location: ../dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Complaint</title>
    <?php include '../includes/header.php'; ?>
</head>
<body>
<?php include '../navbar.php'; ?>
    <div class="container mt-5">
        <h1>Add Complaint</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label>Complaint Title</label>
                <input type="text" name="complaint_title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Complaint Description</label>
                <textarea name="complaint_description" class="form-control" rows="4" required></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
