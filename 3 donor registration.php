<?php
if (isset($_POST['register'])) {
    $conn = new mysqli('localhost', 'root', '', 'bloodbank');
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO donors (name, blood_group, city, phone) VALUES ('$name', '$blood_group', '$city', '$phone')";
    $conn->query($sql);
    echo "<script>alert('Registration Successful!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Donor Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Register as Donor</h2>
    <form method="POST">
        <div class="mb-3">
            <input type="text" name="name" placeholder="Full Name" class="form-control" required>
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
            <input type="text" name="city" placeholder="City" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
        </div>
        <button type="submit" name="register" class="btn btn-danger w-100">Register</button>
    </form>
</div>

</body>
</html>