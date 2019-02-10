<?php

namespace Test\PluginCustom\Plugin;

class CustomPlugin
{

    //добавляет аргумет в метод до его вызова
    public function beforeSetTitle(\Test\PluginCustom\Controller\Test\Test $subject, $title)
    {
        //изменяем аргумент сет тайтл до вывозва его в контроллере
        $title = $title . " to ";

        //возвращаем аргумент тайтл в контроллер
        return $title;
    }

    //добавляем вывод после вызова метода
    public function afterGetTitle(\Test\PluginCustom\Controller\Test\Test $subject, $result)
    {
        //добавлем вывод после результата вывода метода гет тайтл
        $afterInput = '<h1>' . $result . ' My input ' .'</h1>';

        //возвращаем результат вывода в контроллер
        return $afterInput;

    }


    //Добавляем вывод до и полсе вызова метода гет тайтл
    public function aroundGetTitle(\Test\PluginCustom\Controller\Test\Test $subject, callable $proceed)
    {

        //добавем вывод хелло до и после вызова метода гет тайтл
        $result = ' Hello '. $proceed() . ' Hello ';

        //возвращаем вывод в контроллер
        return $result;
    }






}