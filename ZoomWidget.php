<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/25/17
 * Time: 4:07 PM
 */

namespace xj\hoverzoom;


use yii\base\Widget;

class ZoomWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Welcome User';
        } else {
            $this->message = 'Welcome ' . $this->message;
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}