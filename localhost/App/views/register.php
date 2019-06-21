<?php $this->layout('layout', ['title' => 'Авторизация']) ?>


<div class="leave-comment">
    <h4>Рагистратизация</h4>


   <form class="bootstrap-form needs-validation" novalidate method="post" id="form" action="/registration" enctype="multipart/form-data">

       <div class="col-md-12 mb-3">

           <label for="name">Ведите имя</label><input type="text" class="form-control" id="name" name="user_name" placeholder="Ваше имя" autocomplete="off" required>
           <div class="valid-feedback">
               Похоже на правду!
           </div>
           <div class="invalid-feedback">
               Похоже на брехню!
           </div>
        </div>


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

       <div class="form-group col-md-12">
             <label for="img_main">Выбрать изображение для аватарки </label><input type="file" id="img_main" name="img_main">
        </div>

        <div class="form-group col-md-12">
            <label for="about">Напишите пару слов о себе</label><textarea class="form-control" id="about" rows="6" name="description" placeholder="Немножечко о себе"></textarea>
        </div>

        <button type="submit" class="btn send-btn">Зарегистрироваться</button>

    </form>
</div>