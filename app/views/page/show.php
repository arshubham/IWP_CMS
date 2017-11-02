<?php require VIEW_ROOT.'templates/header.php'; ?>

<?php //require VIEW_ROOT.'templates/body.php'; ?>

	<?php if(!$page): ?>
		<p>No page found !</p>
	<?php else: ?>
		<div class="page-header">
	        <h1>My CMS</h1>
	        <p class="lead"><?php echo $page['title']; ?></p>
      	</div>

	    <h3><?php echo e($page['body']); ?></h3>
	    <p>Created on<strong> <?php echo $page['created']->format('jS M Y'); ?></strong>
	    
	    <?php if ($page['updated']) :?>
	    	<p> Last updated on <?php echo $page['updated']->format('jS M Y');?></p>
	    <?php endif; ?>

	<?php endif; ?>

<?php require VIEW_ROOT.'templates/footer.php'; ?>