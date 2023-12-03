<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $province = $_POST['province'];
        $gender = $_POST['gender'];
        $subjects = isset($_POST['IT']) ? $_POST['IT'] : [];

        echo '<tr>';
        echo '<td>' . $name . '</td>';
        echo '<td>' . $email . '</td>';
        echo '<td>' . $password . '</td>';
        echo '<td>' . $number . '</td>';
        echo '<td>' . $message . '</td>';
        echo '<td>' . $province . '</td>';
        echo '<td>' . $gender . '</td>';
        echo '<td>' . implode(', ', $subjects) . '</td>';
        echo '</tr>';
    }
    ?>
</table>
<?php require_once 'templates/footer.php' ?>