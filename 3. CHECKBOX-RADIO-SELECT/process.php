<?php include "templates/header.php"; ?>

<?php
// YOUR CODE HERE

$province = $_POST["options"]; // Example province
$gender = $_POST['gender']; // Example gender
$subject = $_POST["IT"]; // Example subject
$imageUrl = "images/male.png";
$imageUrl1 = "images/female.png";
?>

<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province; ?></h2>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php if ($gender == "Male") {
            echo '<img src="' . $imageUrl . '" alt="Example Image">';
        } else {
            echo '<img src="' . $imageUrl1 . '" alt="Example Image">';
        } ?>
    </div>
</div>

<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        if (isset($subject) && is_array($subject)) {
            foreach ($subject as $selectedSubject) {
                echo $selectedSubject . " ";
            }
        }
        ?>
    </div>
</div>

<?php include "templates/footer.php"; ?>