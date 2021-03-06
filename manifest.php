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
    'published_date' => '2018/05/12',
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
            'from' => '<basepath>/composer_krest.json',
            'to' => 'composer_krest.json',
        ),
        array(
            'from' => '<basepath>/vendor',
            'to' => 'vendor',
        )
    ),
    'relationships' => array(
        array(
            'module' => 'KREST',
            'meta_data' => '<basepath>/metadata/system_krest.php'
        ),
    )
);
//workaround for suitecrm: do not load vendor
if(isset($GLOBALS['suitecrm_version'])){
    unset($installdefs['copy'][2]);
}