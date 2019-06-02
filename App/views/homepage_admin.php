<?php $this->layout('layout', ['title' => 'Admin Profile']) ?>

<h1>Admin Profile</h1>
<table class="table table-striped">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Заголовок</th>
        <th scope="col">Содержание</th>
        <th scope="col">Короткое содержание</th>
        <th scope="col">Лайки</th>
        <th scope="col">Категория</th>
    </tr>
    <?php foreach ($posts as $post) { ?>

        <tr scope="row">
            <th> <?php echo $post['id']; ?></th>
            <td> <?php echo $post['title']; ?></td>
            <td><?php echo $post['description']; ?></td>
            <td><?php echo $post['short_description']; ?></td>
            <td><?php echo $post['like_num']; ?></td>
            <td><?php echo $post['category']; ?></td>



        </tr>
    <?php } ?>

</table>

<ul class="pagination">
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
