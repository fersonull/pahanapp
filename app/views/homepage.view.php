<?php

include 'app/views/partials/head.php';
include 'app/views/partials/nav.php';
include 'app/views/partials/banner.php';
?>
<main class="container">
    <p>This is the main content</p>

    <div class="row mb-4 gap-">
        <?php foreach ($posts as $post): ?>
            <div class="col-12 col-lg-4">
                <a href="/posts?id=<?= $post['post_id'] ?>" class="text-decoration-none">
                    <div class="card bg-body-secondary border border-primary">
                        <img src="https://placehold.co/400" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                <?= $post['content'] ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</main>

</php include 'app/views/partials/foot.php' ; ?>