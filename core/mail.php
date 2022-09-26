<?php

define('API_USER', '1f86835265d3afeaf22aa83103f2cd66');
define('API_LOGIN', '43c30b148125d8ca4b6e2137aac4db89');

  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client(API_USER, API_LOGIN,true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "noreply@trustwise.easygroupe.org",
          'Name' => "Trustwise"
        ],
        'To' => [
          [
            'Email' => "$email_recepteur",
            'Name' => "$name_recepteur "
          ]
        ],
        'Subject' => "Nouvelle transaction",
        'HTMLPart' => "<h3>Vous avez une nouvelle transaction de $name_sender. </h3> <br> Connecez vous à votre compte pour plus de détails.",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success();