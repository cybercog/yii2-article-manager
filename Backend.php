<?php

namespace kkruger\articles;

/**
 * This is just an example.
 */
use yii\base\Module as BaseModule;

class Backend extends BaseModule
{
	
	/**
	 * @var string The prefix for user module URL.
	 * @See [[GroupUrlRule::prefix]]
	 */
	//public $urlPrefix = 'articles';
	
    public $urlRules = [
        '<action:(index)>'     => 'content/<action>',
    ];
}
