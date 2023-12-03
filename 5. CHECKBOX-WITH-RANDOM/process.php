<?php require_once 'templates/header.php' ?>

<?php
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
$selectedIT = isset($_POST['IT']) ? $_POST['IT'] : [];
?>


<div class="card">
    <div class="card-body d-flex flex-row flex-wrap">
        <?php
        $selectedCount = count($selectedIT);
        $colorIndex = 0;
        foreach ($selectedIT as $selectedSubject) {
            $color = $colors[$colorIndex % count($colors)];
            echo '<div class="alert alert-' . $color . ' mr-2 mb-2">' . $selectedSubject . '</div>';
            $colorIndex++;
        }
        ?>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>