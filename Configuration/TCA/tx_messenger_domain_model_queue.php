<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:qeue',
        'label' => 'sender',
        'default_sortby' => 'ORDER BY scheduled_distribution_time ASC',
        'crdate' => 'crdate',
        'searchFields' => 'subject, body, mailing_name, ip',
        'typeicon_classes' => [
            'default' => 'extensions-messenger-queue',
        ],
    ],
    'types' => [
        '1' => ['showitem' => 'sender, recipient, subject, body, attachment, context, mailing_name, scheduled_distribution_time, message_template, message_layout'],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [
        'sender' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:sender',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'recipient' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:recipient',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'recipient_cc' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:recipient_cc',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'recipient_bcc' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:recipient_bcc',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'message_serialized' => [
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_queue.xlf.message_serialized',
            'config' => [
                'type' => 'text',
                'rows' => 4,
                'cols' => 50,
                'readOnly' => true,
            ],
        ],
        'redirect_email' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:redirect_email',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'subject' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:subject',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'body' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:body',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'readOnly' => true,
            ],
        ],
        'context' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:context',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'attachment' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:attachment',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'mailing_name' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:mailing_name',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
            ],
        ],
        'scheduled_distribution_time' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:scheduled_distribution_time',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
                'eval' => 'datetime',
            ],
        ],
        'message_template' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_messagetemplate.xlf:message_template',
            'config' => [
                'type' => 'select',
                'table_foreign' => 'tx_messenger_domain_model_messagetemplate',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'readOnly' => true,
            ],
        ],
        'message_layout' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_messagelayout.xlf:message_layout',
            'config' => [
                'type' => 'select',
                'table_foreign' => 'tx_messenger_domain_model_messagelayout',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'readOnly' => true,
            ],
        ],
        'ip' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_sentmessage.xlf:ip',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'readOnly' => true,
                'eval' => 'trim',
            ],
        ],
    ],
    'grid' => [
        'facets' => [
            'uid',
            'subject',
        ],
        'excluded_fields' => 'message_serialized',
        'columns' => [
            '__checkbox' => [
                'renderer' => \Fab\Vidi\Grid\CheckBoxRenderer::class,
            ],
            'uid' => [
                'visible' => false,
                'label' => 'LLL:EXT:messenger/Resources/Private/Language/tx_messenger_domain_model_messagetemplate.xlf:uid',
                'width' => '5px',
            ],
            'sender' => [],
            'recipient' => [],
            'subject' => [],
            'body' => [
                'width' => '500px',
                'sortable' => false,
                'visible' => false,
            ],
            'scheduled_distribution_time' => [
                'format' => \Fab\Vidi\Formatter\Datetime::class,
            ],
            'mailing_name' => [],
            'attachment' => [
                'visible' => false,
            ],
            'context' => [
                'width' => '100px',
                'visible' => false,
            ],
            '__buttons' => [
                'renderer' => \Fab\Vidi\Grid\ButtonGroupRenderer::class,
            ],
        ],
    ],
];
