<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2016 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../src/config/main.php'),
    [
        'components' => [
            'request' => [
                'cookieValidationKey' => '_TESTING_'
            ]
        ]
    ]
);