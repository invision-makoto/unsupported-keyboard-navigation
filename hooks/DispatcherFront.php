//<?php

class hook14 extends _HOOK_CLASS_
{
	/**
	 * Set the Keyboard Navigation setting variables for use in JS
	 *
	 * @return void
	 */
	static protected function baseJs()
	{
		$kbnavSettings = array(
			'kbnav_keyNext'     => \IPS\Settings::i()->kbnav_keyNext,
			'kbnav_keyPrev'     => \IPS\Settings::i()->kbnav_keyPrev,
			'kbnav_keyNextPage' => \IPS\Settings::i()->kbnav_keyNextPage,
			'kbnav_keyPrevPage' => \IPS\Settings::i()->kbnav_keyPrevPage,
			'kbnav_keyRefresh' => \IPS\Settings::i()->kbnav_keyRefresh,
		);

		\IPS\Output::i()->jsVars = array_merge( \IPS\Output::i()->jsVars, $kbnavSettings );
		return call_user_func_array( 'parent::baseJs', func_get_args() );
	}
}