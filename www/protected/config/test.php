<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
        'modules' => array(
            'gii'=>array(
                'class'=>'system.gii.GiiModule',
                'password'=>'Enter Your Password Here',
                // If removed, Gii defaults to localhost only. Edit carefully to taste.
                'ipFilters'=>array('127.0.0.1','::1'),
            ),
        ),
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
		),
	)
);
