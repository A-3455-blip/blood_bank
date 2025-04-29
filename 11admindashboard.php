<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}
$conn = new mysqli('localhost', 'root', '', 'bloodbank');
$donors = $conn->query("SELECT * FROM donors");
$requests = $conn->query("SELECT * FROM blood_requests");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Admin Dashboard</h2>
    <a href="logout.php" class="btn btn-danger float-end">Logout</a>

    <h4 class="mt-5">Registered Donors</h4>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Blood Group</th>
                <th>City</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php while($d = $donors->fetch_assoc()) { ?>
            <tr>
                <td><?= $d['name']; ?></td>
                <td><?= $d['blood_group']; ?></td>
                <td><?= $d['city']; ?></td>
                <td><?= $d['phone']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <h4 class="mt-5">Blood Requests</h4>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Blood Group</th>
                <th>Hospital</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php while($r = $requests->fetch_assoc()) { ?>
            <tr>
                <td><?= $r['patient_name']; ?></td>
                <td><?= $r['blood_group']; ?></td>
                <td><?= $r['hospital']; ?></td>
                <td><?= $r['contact']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>