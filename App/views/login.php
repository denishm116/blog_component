<?php $this->layout('layout', ['title' => 'Авторизация', 'admin'=>$admin, 'user'=>$user]); ?>


<div class="leave-comment">
    <h4>Авторизация</h4>


    <form class="bootstrap-form needs-validation" novalidate method="post" id="form" action="/login" enctype="multipart/form-data">



        <div class="form-group col-md-12">
            <label for="email">Введите e-mail</label><input type="email" class="form-control" id="email" name="email" placeholder="E - mail">
            <div class="valid-feedback">
                Похоже на правду!
            </div>
            <div class="invalid-feedback">
                Похоже на брехню!
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="password">Введите пароль</label><input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
            <div class="valid-feedback">
                Похоже на правду!
            </div>
            <div class="invalid-feedback">
                Похоже на брехню!
            </div>
        </div>

        <button type="submit" class="btn send-btn">Вход</button>

    </form>
</div>