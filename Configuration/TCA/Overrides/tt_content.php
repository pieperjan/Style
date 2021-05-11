<?php
defined('TYPO3_MODE') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/*
 * Felder definieren
**/
$GLOBALS['TCA']['tt_content']['columns']['tx_npt3basic_displayconditions_xs'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hide_element.xs',
    'config' => [
        'type' => 'check',
        'items' => [
            [
                0 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hidden',
                1 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.show',
            ]
        ],
    ]
];
$GLOBALS['TCA']['tt_content']['columns']['tx_npt3basic_displayconditions_sm'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hide_element.sm',
    'config' => [
        'type' => 'check',
        'items' => [
            [
                0 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hidden',
                1 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.show',
            ]
        ],
    ]
];
$GLOBALS['TCA']['tt_content']['columns']['tx_npt3basic_displayconditions_md'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hide_element.md',
    'config' => [
        'type' => 'check',
        'items' => [
            [
                0 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hidden',
                1 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.show',
            ]
        ],
    ]
];
$GLOBALS['TCA']['tt_content']['columns']['tx_npt3basic_displayconditions_lg'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hide_element.lg',
    'config' => [
        'type' => 'check',
        'items' => [
            [
                0 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hidden',
                1 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.show',
            ]
        ],
    ]
];
$GLOBALS['TCA']['tt_content']['columns']['tx_npt3basic_displayconditions_xl'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hide_element.xl',
    'config' => [
        'type' => 'check',
        'items' => [
            [
                0 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.hidden',
                1 => 'LLL:EXT:npt3basic/Resources/Private/Language/locallang.xlf:content_elements.show',
            ]
        ],
    ]
];

/*
* RTE Config angepasst
*/
$GLOBALS['TCA']['tx_bootstrappackage_card_group_item']['columns']['bodytext']['config']['richtextConfiguration'] = 'bootstrap';
$GLOBALS['TCA']['tx_bootstrappackage_accordion_item']['columns']['bodytext']['config']['richtextConfiguration'] = 'bootstrap';
$GLOBALS['TCA']['tx_bootstrappackage_carousel_item']['columns']['bodytext']['config']['richtextConfiguration'] = 'bootstrap';
$GLOBALS['TCA']['tx_bootstrappackage_icon_group_item']['columns']['bodytext']['config']['richtextConfiguration'] = 'bootstrap';
$GLOBALS['TCA']['tx_bootstrappackage_tab_item']['columns']['bodytext']['config']['richtextConfiguration'] = 'bootstrap';
$GLOBALS['TCA']['tx_bootstrappackage_timeline_item']['columns']['bodytext']['config']['richtextConfiguration'] = 'bootstrap';

/*
 * Felder an Array Layout des Inhaltselements anhängen
 **/
$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] .= '
--linebreak--,
tx_npt3basic_displayconditions_xs,
tx_npt3basic_displayconditions_sm,
tx_npt3basic_displayconditions_md,
tx_npt3basic_displayconditions_lg,
tx_npt3basic_displayconditions_xl';
