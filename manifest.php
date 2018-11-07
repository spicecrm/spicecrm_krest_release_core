<?php
$manifest = array(
    'acceptable_sugar_flavors' => array(
        'CE',
        'CORP',
        'PRO',
		'ULT',
        'ENT'
    ),
    'acceptable_sugar_versions' => array(
        '6.*.*', 
		'7.*.*'
    ),
    'is_uninstallable' => true,
    'remove_tables' => 'prompt',
    'name' => 'KREST Core',
    'author' => 'aac services k.s.',
    'description' => 'REST Interface for SugarCRM',
    'published_date' => '2018/26/10',
    'version' => 'v3.1.0',
    'type' => 'module'
);

$installdefs = array(
    'copy' => array(
        array(
            'from' => '<basepath>/KREST',
            'to' => 'KREST',
        ),
        array(
            'from' => '<basepath>/vendor',
            'to' => 'vendor',
        ),
        array(
            'from' => '<basepath>/metadata/system_krest.php',
            'to' => 'custom/metadata/system_krest.php',
        ),
        array(
            'from' => '<basepath>/include/system_krest.TableDictionary.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/system_krest.TableDictionary.php',
        ),
    )
);