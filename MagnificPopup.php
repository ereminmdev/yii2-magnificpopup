<?php

namespace ereminmdev\yii2\magnificpopup;

use yii\helpers\Json;

/**
 * Popup widget based on magnific-popup plugin
 * @link http://dimsemenov.com/plugins/magnific-popup
 * Depend: composer require dimsemenov/magnific-popup
 */
class MagnificPopup extends \yii\base\Widget
{
    /**
     * @var string selector for items
     */
    public $selector;
    /**
     * @var array plugin options (http://dimsemenov.com/plugins/magnific-popup/documentation.html)
     */
    public $clientOptions = [
        'type' => 'image',
    ];


    public function run()
    {
        $view = $this->getView();

        MagnificPopupAsset::register($view);

        $view->registerJs('
$("' . $this->selector . '").magnificPopup(' . Json::encode($this->clientOptions) . ');
        ');
    }
}
