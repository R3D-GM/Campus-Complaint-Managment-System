<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

$complaintId = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM complaint_register WHERE complaint_id = :complaint_id");
$stmt->execute(['complaint_id' => $complaintId]);
$complaint = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$complaint) {
    die("Complaint not found.");
}



/*session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

// Debugging step: Print the $_GET array
if (!isset($_GET['id'])) {
    die("Error: Complaint ID not provided in the URL. Debug: " . var_export($_GET, true));
}

$complaintId = $_GET['id'];
echo "Complaint ID received: " . htmlspecialchars($complaintId) . "<br>";

// Proceed to fetch data
$stmt = $pdo->prepare("SELECT * FROM complaint_register WHERE complaint_id = :complaint_id");
$stmt->execute(['complaint_id' => $complaintId]);
$complaint = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$complaint) {
    die("Complaint not found in the database.");
}
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Complaint</title>
    <?php include '../includes/header.php'; ?>
</head>
<body>
<?php include '../navbar.php'; ?>
    <div class="container mt-5">
        <h1><?php echo $complaint['complaint_title']; ?></h1>
        <p><?php echo $complaint['complaint_description']; ?></p>
        <p>Status: <strong><?php echo $complaint['status']; ?></strong></p>
    </div>
</body>
</html>
