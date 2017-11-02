<?php require VIEW_ROOT.'templates/header.php'; ?>
<?php //require VIEW_ROOT.'templates/body.php'; ?>
	<div class="page-header">
        <h1>My CMS Admin Page</h1>
        <p class="lead">This is Admin Page You can Edit, Delete as well as Add Web Pages .</p>
      </div>
 

      	 
      		
	<?php if (empty($pages)) : ?>
		<p>No pages at the mements.</p>
	<?php else: ?>
		<table class="table table-striped"> 
      	<thead> 
      		<tr> 
      			
      			<th>Label</th> 
      			<th>Title</th> 
      			<th>Slug</th> 
      			<th></th> 
      			<th></th> 
      		</tr> 
      	</thead> 
      	<tbody>
      	<?php foreach ($pages as $page ) :?>
      		<tr> 
      			
      				 <td><?php echo $page['label']; ?></td> 
      				 <td><?php echo $page['title']; ?></td> 
      				 <td><?php echo $page['slug']; ?></td> 
      				 <td><a href="<?php echo BASE_URL; ?>admin/edit.php?id=<?php echo $page['id']; ?>">Edit</a></td> 
      				 <td><a href="<?php echo BASE_URL; ?>admin/delete.php?id=<?php echo $page['id']; ?>">Delete</a></td> 
      			</tr> 

      	
      	<?php endforeach; ?>
	<?php endif; ?>

      	</tbody> 
      </table>
	<a href="<?php echo BASE_URL; ?>admin/add.php" class="btn btn-default">Add New Page</a>

<?php require VIEW_ROOT.'templates/footer.php'; ?>