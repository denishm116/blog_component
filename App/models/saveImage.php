<?php
/**
 * Created by PhpStorm.
 * User: ДенисПК
 * Date: 17.05.2019
 * Time: 12:37
 */

namespace App\models;
use Intervention\Image\ImageManager;

class saveImage
{

    public function saveImage(string $defaultImageName, array $files, string $path) {
        $manager = new ImageManager();
           foreach ($files as $file) {

                    if ($file['error'] == 4) {
                        $imgname = $defaultImageName;
                        } else {   // read image from temporary file
                            $img = $manager->make($file['tmp_name']);
                            // resize image
                            $img->fit(700);
                        //Создаем имя и расширение файлу
                        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
                        $imgname = uniqid() . ".$extension";
        }
        $arr[] = $imgname;
        if ($imgname != $defaultImageName) {
            $q = $path.$imgname;
            $img->save($q);
        }
        }
           return $arr;
    }
}