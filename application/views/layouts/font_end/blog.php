<div class="main-container">
	<div class="blog_header">
		<div class="container"> Blog</div>
	</div>
	<div class="container">
		<div class="breadcrumbs">
			<a href="<?=base_url()?>">Home</a>
			<span class="separator">></span>Blog</div>
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="page-content blog-page blog-nosidebar">
					<?php foreach ($blog as $val_blog): ?>
						<article id="post-1" class="post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
							<div class="post-thumbnail">
								<!-- <div class="post-meta ontop">
									<span class="entry-date">
										<span class="day">09</span>
										<span class="month">June</span>
									</span>
									<div class="entry-comment">
										<a href=""><span>1</span> comment</a>
									</div>
								</div> -->
								<a href="/tag/blog/<?=$val_blog['slug'].'/'.$val_blog['id']?>">
									<img width="450" height="253" src="<?=base_url().$val_blog['url_image']?>"alt="<?=$val_blog['name']?>" sizes="(max-width: 450px) 100vw, 450px" />
								</a>
							</div>
							<div class="postinfo-wrapper ">
								<div class="post-date"> <span class="day">09</span><span class="month">Jun</span>
								</div>
								<div class="post-info">
									<header class="entry-header">
										<h1 class="entry-title">
											<a href="/tag/blog/<?=$val_blog['slug'].'/'.$val_blog['id']?>" rel="bookmark"><?=$val_blog['name']?></a>
										</h1>
									</header>
									<!-- <footer class="entry-meta-small"> / Posted by <span class="author vcard"><a class="url fn n" href="index-44.htm" tppabs="http://demo.roadthemes.com/maroko/author/admin/" title="View all posts by admin" rel="author">admin</a></span> / <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/category/uncategorized/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/category/uncategorized/%27" tppabs="http://demo.roadthemes.com/maroko/category/uncategorized/" rel="category tag">Uncategorized</a> </footer> -->
									<div class="entry-summary">
										<p><?=$val_blog['des']?></p>
									</div> <a class="readmore" href="/tag/blog/<?=$val_blog['slug'].'/'.$val_blog['id']?>">read more<i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</article>
					<?php endforeach ?>
					<div class="pagination">
						<?php echo $pagination ?>
					<!--  <span class='page-numbers current'>1</span>
					 <a class='page-numbers' href="">2</a>
					 <a class="next page-numbers" href="">Next</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>