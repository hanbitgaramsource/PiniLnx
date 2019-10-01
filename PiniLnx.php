<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'PiniLnx' );
	$wgMessagesDirs['PiniLnx'] = __DIR__ . '/i18n';
	return true;
} else {
	die( 'This version of the PiniLnx extension requires MediaWiki 1.25+' );
}