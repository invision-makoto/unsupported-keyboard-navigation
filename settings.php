//<?php

$form->addHeader( 'kbnav_keyBindings' );
$form->add( new \IPS\Helpers\Form\Text( 'kbnav_keyNext', \IPS\Settings::i()->kbnav_keyNext, FALSE,
		array( 'maxLength' => 1, 'nullLang' => 'disable' ) )
);
$form->add( new \IPS\Helpers\Form\Text( 'kbnav_keyPrev', \IPS\Settings::i()->kbnav_keyPrev, FALSE,
		array( 'maxLength' => 1, 'nullLang' => 'disable' ) )
);
$form->add( new \IPS\Helpers\Form\Text( 'kbnav_keyNextPage', \IPS\Settings::i()->kbnav_keyNextPage, FALSE,
		array( 'maxLength' => 1, 'nullLang' => 'disable' ) )
);
$form->add( new \IPS\Helpers\Form\Text( 'kbnav_keyPrevPage', \IPS\Settings::i()->kbnav_keyPrevPage, FALSE,
		array( 'maxLength' => 1, 'nullLang' => 'disable' ) )
);
$form->add( new \IPS\Helpers\Form\Text( 'kbnav_keyRefresh', \IPS\Settings::i()->kbnav_keyRefresh, FALSE,
		array( 'maxLength' => 1, 'nullLang' => 'disable' ) )
);

if ( $values = $form->values() )
{
	foreach ( array( 'kbnav_keyNext', 'kbnav_keyPrev', 'kbnav_keyNextPage', 'kbnav_keyPrevPage', 'kbnav_keyRefresh' ) as $sk )
	{
		if ( empty( $values[ $sk ] ) )
		{
			$values[ $sk ] = NULL;
		}
	}
	//die(var_dump($values));

	$form->saveAsSettings( $values );
	return TRUE;
}

return $form;