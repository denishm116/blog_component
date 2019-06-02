<?php $this->layout('layout', ['title' => 'Добавить пост', 'user' => $user, 'admin' => $admin]) ?>

<div class="leave-comment">
    <h4>Добавить пост</h4>
    <form class="form-horizontal contact-form" method="post" action="/addposttodb" enctype="multipart/form-data">




        <div class="form-group col-md-12">

            <div class="input required"> <label for="img_main">Выбрать изображение для заголовка<input type="file" id="img_main" name="img_main"> </label> </div>
         </div>

        <div class="form-group col-md-12">
            <div class="input required"><label for="img_1">Выбрать 1е изображение для статьи<input type="file" id="img_1" name="img_1"></label></div>
         </div>

        <div class="form-group col-md-12">
            <div class="input required"><label for="img_2">Выбрать 2е изображение для статьи<input type="file" id="img_2" name="img_2"></label></div>
         </div>


        <div class="form-group col-md-12">
            <input type="text" class="form-control" id="name" name="title" placeholder="Заголовок" required="">
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <input type="text" class="form-control" id="subject" name="category" placeholder="Категория">
            </div>
        </div>
        <div class="form-group ">
            <div class="col-md-12">
                <textarea class="form-control" rows="6" name="description" placeholder="Текст статьи" required=""></textarea>
            </div>
        </div>
        <button type="submit" class="btn send-btn">Оставить статью</button>
    </form>
</div>

