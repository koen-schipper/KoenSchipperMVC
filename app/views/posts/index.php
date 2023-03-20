<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row mb-2">
    <div class="col-md-6">
        <h1>Posts</h1>

    </div>
    <div class="col-md-6 d-flex align-items-end justify-content-end">
        <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary mb-2">
            <i class="fa-solid fa-pencil"></i> Add Post
        </a>
    </div>
    <div>
        <?php flash('post_message'); ?>
    </div>
</div>

<?php foreach ($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
        <div class="d-flex justify-content-between">
            <h4 class="card-title"><?php echo $post->title; ?></h4>
            <div class="bg-light p-2 mb-3">
                Written by <?php echo $post->name; ?> on <?php echo date("d-m-Y, H:m", strtotime($post->postCreated)); ?>
            </div>
        </div>

        <p class="card-text"><?php echo $post->body; ?></p>
        <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark col-md-3">More</a>
    </div>
<?php
endforeach;
require APPROOT . '/views/inc/footer.php';
?>