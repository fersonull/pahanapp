<?php

include 'app/views/partials/head.php';
include 'app/views/partials/nav.php';
include 'app/views/partials/banner.php';
?>
<main class="container">
    <p>This is the Post Page.</p>

    <div class="card bg-body-secondary border border-primary w-25">
        <img src="https://placehold.co/400" alt="" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
                <?= $post[0]['content'] ?>
            </p>
        </div>
    </div>
</main>

</php include 'app/views/partials/foot.php' ; ?>