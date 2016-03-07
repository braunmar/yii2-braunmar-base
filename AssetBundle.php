<?php

/**
 * @link https://github.com/braunmar/yii2-braunmar-base
 * @copyright Copyright (c) 2016 Marek Braun <marra.braun@gmail.com>
 * @license https://github.com/braunmar/yii2-braunmar-base/blob/master/LICENSE
 */

namespace braunmar\yii\base;

use yii\web\AssetBundle as BaseAssetBundle;

/**
 * Seznam map widget
 * 
 * @author Marek Braun <marra.braun@gmail.com>
 * @package braunmar/yii2-braunmar-base
 * @see https://github.com/braunmar/yii2-braunmar-base
 */
class AssetBundle extends BaseAssetBundle
{

    const TYPE_JS = 'js';
    const TYPE_CSS = 'css';

    public function addFile($type, array $files = [])
    {
        $src = [];

        foreach ($files as $file) {
            $src[] = "{$type}/{$file}.{$type}";
        }

        $this->$type = $src;
    }

}
