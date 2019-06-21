
<ul class="dropdown-menu">

    <?php foreach ($cats as $cat) { ?>
    <li class=""><a href="/cat/<?php echo $cat['title']; ?>"><?php echo $cat['title']; ?></a></li>
    <?php } ?>
</ul>