<?php
require APPROOT . '/views/inc/header.php';
if (!isLoggedIn()) : redirect('pages/index');
else :
?>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card card-body mt-5">
                <div class='d-flex justify-content-between'>
                    <h2>
                        <?php echo $data['post']->title; ?>
                    </h2>
                    <div class="bg-light p-2 mb-3">
                        Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
                    </div>
                </div>

                <p>
                    <?php echo $data['post']->body; ?>
                </p>

                <div class="row mt-3">
                    <div class="col d-flex ">
                        <a href="<?php echo URLROOT; ?>/posts" class="btn btn-dark btn-block col-md-6"><i class="fa-solid fa-rotate-left"></i> Back to posts</a>
                    </div>
                    <div class="col d-flex justify-content-end" style='gap: 10px;'>
                        <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
                            <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-warning btn-block col-md-5">
                                <i class="fa-solid fa-edit"></i> Edit Post
                            </a>
                            <form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="POST">
                                <button type="submit" class="btn btn-danger btn-block px-4">
                                    <i class="fa-solid fa-x"></i> Delete Post
                                </button>
                            </form>

                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
endif;
require APPROOT . '/views/inc/footer.php';
?>