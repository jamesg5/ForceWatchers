<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'ForceWatchers' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['ForceWatchers'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['ForceWatchersMagic'] = __DIR__ . '/Magic.php';
	wfWarn(
		'Deprecated PHP entry point used for ForceWatchers extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the ForceWatchers extension requires MediaWiki 1.25+' );
}
