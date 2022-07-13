<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'CmMemo',
        'web',
        'backend',
        '',
        [
            \Cm\CmMemo\Controller\MemoController::class => 'list, show, new, create, edit, update, delete',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:cm_memo/Resources/Public/Icons/user_mod_backend.svg',
            'labels' => 'LLL:EXT:cm_memo/Resources/Private/Language/locallang_backend.xlf',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cmmemo_domain_model_memo', 'EXT:cm_memo/Resources/Private/Language/locallang_csh_tx_cmmemo_domain_model_memo.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cmmemo_domain_model_memo');
})();
