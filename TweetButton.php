<?php
/* write below codes to LocalSettings.php
require_once( "$IP/extensions/TweetButton/TweetButton.php" );
*/
if (!defined('MEDIAWIKI')) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['TweetButton'] = $dir . 'TweetButton.body.php';
$wgExtensionMessagesFiles['TweetButton'] =  $dir . 'TweetButton.i18n.php';

$wgHooks['OutputPageBeforeHTML'][] = array(new TweetButton(), 'renderTweetButton');

$wgExtensionCredits['parserhook'][] = array(
        'path' => __FILE__,
        'name' => 'TweetButton',
        'author' => '[http://github.com/shinsaka Manabu Shinsaka]',
        'url' => 'https://www.mediawiki.org/wiki/Extension:TweetButton',
        'descriptionmsg' => 'tweetbutton-desc',
        'version'  => '0.9',
        'license-name' => 'GPLv2+',
);
