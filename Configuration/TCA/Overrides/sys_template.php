<?php
if (!defined('TYPO3')) {
    die('Access denied.');
}


call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 't3_linkfree';

    /**
     * Default TypoScript for t3_linkfree
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        't3_linkfree'
    );
});
