<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-widgets
 * @subpackage yii2-widget-growl
 * @version 1.1.1
 */

namespace kartik\growl;

/**
 * Asset bundle for \kartik\widgets\Growl
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class GrowlAsset extends \kartik\base\AssetBundle
{
    public $themes = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $cssList = ['css/kv-bootstrap-notify'];
        $this->setupAssets('css', $cssList);
        $this->setupAssets('js', ['js/bootstrap-notify']);
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        if (!empty($this->themes)) {
            foreach ($this->themes as $theme) {
                $ext = YII_DEBUG ? '.css' : '.min.css';
                $this->css[] = "css/{$theme}{$ext}";
            }
        }
        parent::registerAssetFiles($view);
    }
}
