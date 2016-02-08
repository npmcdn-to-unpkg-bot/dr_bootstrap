<div id="blog_search_container">
	<h2>Search Our Blog</h2>
	<form method="GET" action="<?php echo get_permalink(get_page_by_title('Digital River Blog')); ?>">
		<input type="text" name="search" class="blog_search_box" value="<?php if (isset($_GET['search'])) echo $_GET['search']; ?>">
		<input type="submit" value="Search" class="blog_search_button">
	</form>
</div>
