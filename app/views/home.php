<?php require VIEW_ROOT.'templates/header.php'; ?>

<?php //require VIEW_ROOT.'templates/body.php'; ?>
	<div class="page-header">
<div id="welcomeDiv"  style="display:none;" class="answer_list" > <div class="page-header">
															          <h1>My CMS Admin Page</h1>
															          <p class="lead">This page is for Add Web Pages .</p>
															        </div>
															  <form action="/admin/add.php" method = "post" autocomplete="off">
															    <div class="form-group">
															      <label for="title">Title</label>
															      <input type="text" class="form-control" name="title" placeholder="Title">
															    </div>
															    <div class="form-group">
															      <label for="label">Label</label>
															      <input type="text" class="form-control" name="label" placeholder="Label">
															    </div>
															    <div class="form-group">
															      <label for="slug">Slug</label>
															      <input type="text" class="form-control" name="slug" placeholder="Slug">
															    </div>
															    <div class="form-group">
															      <label for="exampleInputPassword1">Body</label>
															      <textarea class="form-control" name="body" rows="10" cols="30"></textarea>
															    </div>

															    <div class="form-group">
															       <button type="submit" class="btn btn-default">Submit</button>
															    </div>

															  </form>
															  </div>
<input type="button" name="answer" value="Show Div" onclick="showDiv()" />
	        <h1>My CMS</h1>

      		</div>
	<?php if (empty($pages)) : ?>
		<p>No page at the moment.</p>
	<?php else: ?>
		<ul>

			<?php foreach ($pages as $page) : ?>
				<li><a href="/page.php?page=<?php echo $page['slug']; ?>"><?php echo$page['label'] ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
<script>
function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
</script>
<?php require VIEW_ROOT.'templates/footer.php'; ?>
