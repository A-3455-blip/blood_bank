<?php
if (isset($_POST['request'])) {
    $conn = new mysqli('localhost', 'root', '', 'bloodbank');
    $patient_name = $_POST['patient_name'];
    $blood_group = $_POST['blood_group'];
    $hospital = $_POST['hospital'];
    $contact = $_POST['contact'];
    $sql = "INSERT INTO blood_requests (patient_name, blood_group, hospital, contact) VALUES ('$patient_name', '$blood_group', '$hospital', '$contact')";
    $conn->query($sql);
    echo "<script>alert('Blood Request Submitted Successfully!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Request Blood</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Request Blood</h2>
    <form method="POST">
        <div class="mb-3">
            <input type="text" name="patient_name" placeholder="Patient Name" class="form-control" required>
        </div>
        <div class="mb-3">
            <select name="blood_group" class="form-control" required>
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="O-">O-</option>
                <option value="AB-">AB-</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="text" name="hospital" placeholder="Hospital Name" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="contact" placeholder="Contact Number" class="form-control" required>
        </div>
        <button type="submit" name="request" class="btn btn-danger w-100">Submit Request</button>
    </form>
</div>

</body>
</html>