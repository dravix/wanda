<?php
return [
    'sourcePath' => '@yii',
    'languages' => ['en-EN', 'es-MX'], //Add languages to the array for the language files to be generated, here are English and Russian.
    'translator' => 'Yii::t',
    'sort' => false,
    'removeUnused' => false,
    'only' => ['*.php'],
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/messages',
        '/vendor',
    ],
    'format' => 'php',
    'messagePath' => 'messages',
    'overwrite' => true,
];