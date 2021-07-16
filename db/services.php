<?php

$services = array(
      'mypluginservice' => array(                      //the name of the web service
          'functions' => array ('create_account'), //web service functions of this service
          'requiredcapability' => '',                //if set, the web service user need this capability to access 
                                                     //any function of this service. For example: 'some/capability:specified'                 
          'restrictedusers' =>0,                      //if enabled, the Moodle administrator must link some user to this service
                                                      //into the administration
          'enabled'=>1,                               //if enabled, the service can be reachable on a default installation
          'shortname'=>'create_account' //the short name used to refer to this service from elsewhere including when fetching a token
       )
  );

$functions = array(
    'create_account_function' => array(
        'classname' => 'create_account_external',
        'methodname' => 'account_create',
        'classpath' => 'blocks/rumbletalk/externallib.php',
        'description' => 'Create a new account in RumbleTalk',
        'type' => 'write',
        'ajax' => true,
        'loginrequired' => false
    )
);


