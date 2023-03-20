<?php
require APPROOT . '/views/inc/header.php';
if (!isLoggedIn()) : redirect('pages/index');
else :
?>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>
                    Add Post
                </h2>
                <p>
                    Create a post with this form
                </p>
                <form action="<?php echo URLROOT; ?>/posts/add" method="POST">
                    <div class="form-group mt-1">
                        <label for="title">Title:<sup>*</sup></label>
                        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
                        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
                    </div>
                    <div class="form-group mt-1">
                        <label for="body">Body:<sup>*</sup></label>
                        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
                        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-block col-md-6">
                                <i class="fa-solid fa-plus"></i> Add Post
                            </button>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="<?php echo URLROOT; ?>/posts" class="btn btn-dark btn-block col-md-5"><i class="fa-solid fa-rotate-left"></i> Back to posts</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
endif;
require APPROOT . '/views/inc/footer.php';
?>