<?php $this->layout('layout', ['title' => $posts['title'], 'admin' => $admin, 'user' => $user]) ?>
<?php //s($_SESSION); ?>
<article class="single-blog">
    <div class="post-thumb">
        <img src="/assets/upload/<?php echo $posts['imglogo'];?>" alt="">
    </div>

    <div class="post-content">
        <div class="entry-header text-center text-uppercase">
            <h2>  <a href="#" class="post-cat"><?php echo $posts['title'];?></a></h2>

        </div>

        <div class="entry-header text-center text-uppercase">
            <a href="#" class="post-cat"><?php echo $posts['category'];?></a>

        </div>


        <div class="entry-content">
            <?php echo $posts['description'];?>
        </div>

        <div class="post-meta">
            <ul class="pull-left list-inline author-meta">
                <li class="author">By <a href="#">Admin </a></li>
                <li class="date"> <?php echo $posts['date'];?></li>
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
<div class="top-comment"><!--top comment-->
    <img src="/assets/images/comment.jpg" class="pull-left img-circle" alt="">
    <h4><a href="#">Ricard Goff</a></h4>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy hello ro mod tempor
        invidunt ut labore et dolore magna aliquyam erat.</p>
    <ul class="list-inline social-share">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
</div>
<div class="row"><!--blog next previous-->
    <div class="col-md-6">
        <div class="single-blog-box">


            <a href="/single-page/<?php echo $nextPrev[1]?>">

                <img src="/assets/upload/<?php echo $postsPrev['imglogo']; ?>" alt="">
                <div class="overlay">
                    <div class="promo-text">
                        <p><i class=" pull-left fa fa-angle-left"></i></p>
                        <h5><?php echo $postsPrev['title']; ?></h5>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <div class="col-md-6">
        <div class="single-blog-box">

            <a href="/single-page/<?php echo $nextPrev[0]?>">

                <img src="/assets/upload/<?php echo $postsNext['imglogo']; ?>" alt="">
                <div class="overlay">
                    <div class="promo-text">
                        <p><i class="pull-right fa fa-angle-right"></i></p>
                        <h5><?php echo $postsNext['title']; ?></h5>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>

<?php foreach ($comment as $com) { ?>
<div class="comment-area">

    <div class="single-comment">
        <div class="media">
            <div class="media-left text-center">
                <a href="#"><img class="media-object" src="/assets/upload/users/<?php echo $com['img'];?>" alt="<?php echo $com['username'];?>" height="50"></a>
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <h3 class="text-uppercase">
                        <a href="#"> <?php echo $com['username'];?></a>
                    </h3>
                    <h4 class="text-uppercase">
                        <a href="#"> <?php echo $com['title'];?></a>
                    </h4>


                </div>
                <p class="comment-date">
                    <?php echo $com['date'];?>
                </p>
                <p class="comment-p">
                    <?php echo $com['description'];?>
                </p>
            </div>
        </div>
    </div>




    <div class="single-comment single-comment-reply">
        <div class="media">

            <div class="media-body">
                <div class="media-heading">
                    <h3 class="text-uppercase"><a href="#">Администратор</a></h3>
                </div>

                <p class="comment-p">
                    <?php echo $com['answer'];?>
                </p>
            </div>
        </div>
    </div>

    <?php if ($admin): ?>
    <div class="collapse bg-light" id="navbarHeader">
        <div class="container">

            <div class="row">


                <form class="form-horizontal contact-form" method="post" action="/answer">
                    <div class="container">
                    <div class="form-group">
                        <div class="form-group">
                            <div class="col-md-8">
                               <input type="hidden" class="form-control" id="subject" name="postid" value="<?php echo $com['id'];?>">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <textarea class="form-control" rows="6" name="description" placeholder="Write Massage" required=""></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn send-btn">Оставить ответ</button>
                    </div></div>
                </form>
            </div>
        </div>
    </div>
    <div class="navbar navbar-light bg-light shadow-sm">
        <div class="container d-flex justify-content-between">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span>Ответить</span>
            </button>
        </div>
    </div>
        <?php endif; ?>


<!--    <div class="single-comment">-->
<!--        <div class="media">-->
<!--            <div class="media-left text-center">-->
<!--                <a href="#"> <img class="media-object" src="/assets/images/reply-3.jpg" alt=""></a>-->
<!--            </div>-->
<!--            <div class="media-body">-->
<!---->
<!--                --><?php //if ($admin): ?>
<!--                <div class="media-heading">-->
<!--                    <h3 class="text-uppercase"><a href="#">Ricard Goff</a> <a href="#"-->
<!--                                                                              class="pull-right reply-btn">reply</a>-->
<!--                    </h3>-->
<!--                </div>-->
<!--               --><?php //endif; ?>
<!---->
<!--                <span class="comment-date"> 5 hours ago</span>-->
<!--                <p class="comment-p">-->
<!--                    Amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidu labore et-->
<!--                    dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et usto duo-->
<!--                    dolores et ea rebum.-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
    <?php } ?>
<!--leave comment-->
<?php if ($admin || $user): ?>
<div class="leave-comment">

    <h4>Leave a reply</h4>

    <form class="form-horizontal contact-form"   method="post" action="/addcomment">
        <div class="form-group">
            <div class="col-md-6">
<!--                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>-->
<!--            </div>-->
        </div>
        <div class="form-group">
            <div class="col-md-12">

                <input type="hidden" class="form-control" id="subject" name="postid" value="<?php echo $posts['id']; ?>">
                <input type="text" class="form-control" id="subject" name="title" value="Заголовок комментария">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <textarea class="form-control" rows="6" name="description" placeholder="Комментарий" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn send-btn">Post Comment</button>
        </div>
    </form>
</div>
<?php endif; ?>