<?php
namespace console\controllers;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Created by PhpStorm.
 * User: gaoqing
 * Date: 2017/6/2
 * Time: 10:11
 */
class HelloController extends Controller
{
    public function actionHello()
    {
        Console::stdout('Executed At:'.date('Y-m-d H:i:s').PHP_EOL);
    }
}