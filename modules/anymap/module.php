<?php
$Module = array( 
    "name" => "anymap" 
);

$ViewList['xml'] = array( 
    'default_navigation_part' => 'ezcontentnavigationpart' , 
    'script' => 'xml.php' , 
    'params' => array( 
        'ContentObjectID' , 
        'ContentObjectAttributeID' , 
        'Version',
        'MapID',
        'MapName'
    ) 
);

$ViewList["maps"] = array( 
    'default_navigation_part' => 'ezcontentnavigationpart' , 
    'script' => 'download.php' , 
    'params' => array( 
        'ContentObjectID' , 
        'ContentObjectAttributeID' , 
        'Version',
        'MapID',
        'MapName'
    ) 
);
$FunctionList = array();