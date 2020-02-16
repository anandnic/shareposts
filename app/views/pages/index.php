<?php require APPROOT.'/views/inc/header.php'; ?>

<!-- MAIN CONTENT START -->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-3"><?php echo $data['title']; ?></h1>
        <p class="lead"><?php echo $data['description']; ?></p>
    </div>
</div>
<button class="btn btn-primary" id="bt">
        Notification
</button>
<!-- MAIN CONTENT END -->

<?php require APPROOT.'/views/inc/footer.php'; ?>