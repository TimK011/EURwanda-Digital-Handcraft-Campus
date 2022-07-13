<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'CmMultiplechoice',
        'Questionsfrontend',
        [
            \Cm\CmMultiplechoice\Controller\QuestionsController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Cm\CmMultiplechoice\Controller\QuestionsController::class => '',
            \Cm\CmMultiplechoice\Controller\AnswersController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    questionsfrontend {
                        iconIdentifier = cm_multiplechoice-plugin-questionsfrontend
                        title = LLL:EXT:cm_multiplechoice/Resources/Private/Language/locallang_db.xlf:tx_cm_multiplechoice_questionsfrontend.name
                        description = LLL:EXT:cm_multiplechoice/Resources/Private/Language/locallang_db.xlf:tx_cm_multiplechoice_questionsfrontend.description
                        tt_content_defValues {
                            CType = list
                            list_type = cmmultiplechoice_questionsfrontend
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
