<?php
defined('TYPO3') or die();

call_user_func(
    function($extKey)
    {
		// Configuring the language menu plugin
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			// The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
			\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extKey),
			// A unique name of the plugin in UpperCamelCase
			'LanguageMenu',
			// An array holding the controller-action-combinations that are accessible
			// The first controller and its first action will be the default
			[
				\SJBR\SrLanguageMenu\Controller\MenuController::class => 'index,redirect'
			],
			// An array of non-cachable controller-action-combinations (they must already be enabled)
			[],
			\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
		);
		
		// Register icon
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		$iconRegistry->registerIcon(
			'tx-srlanguagemenu-language',
			\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
			['source' => 'EXT:sr_language_menu/Resources/Public/Images/language.svg']
		);
		
		// Include page TS configuration for new element wizard
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sr_language_menu/Configuration/PageTS/modWizards.typoscript">');
	},
	'sr_language_menu'
);