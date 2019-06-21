<?php $this->layout('layout', ['title' => 'Список постов']) ?>
<?php foreach ($posts as $post) { ?>
				<article class="single-blog">
					<div class="post-thumb">
						<a href="#"><img src="assets/upload/<?php echo $post['img_main']; ?>" alt=""></a>
					</div>
					<div class="post-content">
						<div class="entry-header text-center text-uppercase">
							<a href="#" class="post-cat"><?php echo $post['category']; ?></a>
							<h2><a href="single-page.html"><?php echo $post['title']; ?></a></h2>
						</div>
						<div class="entry-content">
							<p><?php echo $post['description']; ?></p>
						</div>
						<div class="continue-reading text-center text-uppercase">
							<a href="single-page.html">Continue Reading</a>
						</div>
						<div class="post-meta">
							<ul class="pull-left list-inline author-meta">
								<li class="author">By <a href="#">Jennifer </a></li>
								<li class="date"> On October 13, 2017</li>
							</ul>
							<ul class="pull-right list-inline social-share">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</article>
<?php } ?>

<div class="post-pagination  clearfix">
<ul class="pagination text-left">
    <?php if ($paginator->getPrevUrl()): ?>
        <li class="page-item"><a class="page-link" href="<?php echo $paginator->getPrevUrl(); ?>">&laquo; Previous</a></li>
    <?php endif; ?>

    <?php foreach ($paginator->getPages() as $page): ?>

        <?php if ($page['url']): ?>
            <li class="page-item  <?php echo $page['isCurrent'] ? 'active' : ''; ?>">
                <a class="page-link" href="<?php echo $page['url']; ?>"><?php echo $page['num']; ?></a>
            </li>
        <?php else: ?>
            <li class="disabled"><span><?php echo $page['num']; ?></span></li>
        <?php endif; ?>


    <?php endforeach; ?>

    <?php if ($paginator->getNextUrl()): ?>
        <li><a class="page-link" href="<?php echo $paginator->getNextUrl(); ?>">Next &raquo;</a></li>
    <?php endif; ?>
</ul>
</div>
