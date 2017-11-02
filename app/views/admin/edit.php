<?php require VIEW_ROOT.'templates/header.php'; ?>
<?php //require VIEW_ROOT.'templates/body.php'; ?>
<?php if (empty($page)) : ?>
    <p>No pages at the mements.</p>
  <?php else: ?>
    


	<div class="page-header">
        <h1>My CMS Admin Page</h1>
        <p class="lead">This page is for Edit Web Pages .</p>
      </div>
<form action="<?php echo BASE_URL; ?>admin/edit.php" method = "post" autocomplete="off">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo e($page['title']); ?>">
  </div>
  <div class="form-group">
    <label for="label">Label</label>
    <input type="text" class="form-control" name="label" value="<?php echo e($page['label']); ?>">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" name="slug" value="<?php echo e($page['slug']); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea class="form-control" name="body" rows="10" cols="30"><?php echo e($page['body']); ?></textarea>
  </div>
 
 <input type="hidden" name="id" value="<?php echo e($page['id']); ?>">
  <div class="form-group">
     <button type="submit" class="btn btn-default">Edit</button>
  </div>
 
</form>

  <?php endif; ?>

<?php require VIEW_ROOT.'templates/footer.php'; ?>
