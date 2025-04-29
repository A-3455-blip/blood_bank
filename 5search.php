<?php
$conn = new mysqli('localhost', 'root', '', 'bloodbank');

$searchResults = [];
if (isset($_POST['search'])) {
    $blood_group = $_POST['blood_group'];
    $city = $_POST['city'];
    $query = "SELECT * FROM donors WHERE blood_group='$blood_group' AND city LIKE '%$city%'";
    $searchResults = $conn->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Donor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Search Blood Donor</h2>
    <form method="POST" class="row g-3">
        <div class="col-md-5">
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
        <div class="col-md-5">
            <input type="text" name="city" placeholder="City" class="form-control" required>
        </div>
        <div class="col-md-2">
            <button type="submit" name="search" class="btn btn-danger w-100">Search</button>
        </div>
    </form>

    <?php if (!empty($searchResults)) { ?>
    <div class="mt-4">
        <h4>Results:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>City</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = $searchResults->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['blood_group']; ?></td>
                    <td><?= $row['city']; ?></td>
                    <td><?= $row['phone']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <?php } ?>
</div>

</body>
</html>