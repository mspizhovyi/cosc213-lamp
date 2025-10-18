<?php
$role = $_GET['role'] ?? 'guest';
$day  = $_GET['day']  ?? 'Mon';
$code = (int)($_GET['code'] ?? 200);
$lang = $_GET['lang'] ?? 'en'; 

$br = "<br>";

// -----------------------------
// Language pack (English/French)
// -----------------------------
$messages = [
  'en' => [
    'welcome_admin'   => 'Welcome, admin',
    'welcome_editor'  => 'Welcome, editor',
    'welcome_user'    => 'Welcome, user',
    'weekend'         => 'Enjoy your weekend!',
    'weekday'         => 'Back to work.',
    'status_ok'       => 'OKish',
    'status_bad'      => 'Bad Request',
    'status_auth'     => 'Not Authorized',
    'status_nf'       => 'Not Found',
    'status_unknown'  => 'Unknown',
  ],
  'fr' => [
    'welcome_admin'   => 'Bienvenue, administrateur',
    'welcome_editor'  => 'Bienvenue, éditeur',
    'welcome_user'    => 'Bienvenue, utilisateur',
    'weekend'         => 'Bon week-end!',
    'weekday'         => 'Retour au travail.',
    'status_ok'       => 'Correct',
    'status_bad'      => 'Mauvaise requête',
    'status_auth'     => 'Non autorisé',
    'status_nf'       => 'Introuvable',
    'status_unknown'  => 'Inconnu',
  ]
];

// Fallback to English if unsupported
if (!array_key_exists($lang, $messages)) {
  $lang = 'en';
}

// Shortcut for current dictionary
$t = $messages[$lang];

// -----------------------------
// A) Role greeting with if/elseif/else
// -----------------------------
if ($role === 'admin') {
  echo $t['welcome_admin'] . $br;
} elseif ($role === 'editor') {
  echo $t['welcome_editor'] . $br;
} else {
  echo $t['welcome_user'] . $br;
}

// -----------------------------
// B) Working day vs weekend with switch
// -----------------------------
switch ($day) {
  case 'Sat':
  case 'Sun':
    echo $t['weekend'] . $br;
    break;
  default:
    echo $t['weekday'] . $br;
}

// -----------------------------
// C) Status code message (match if PHP 8+)
// -----------------------------
if (function_exists('match')) {
  $message = match ($code) {
    200, 201 => $t['status_ok'],
    400      => $t['status_bad'],
    401,403  => $t['status_auth'],
    404      => $t['status_nf'],
    default  => $t['status_unknown'],
  };
  echo "$code => $message" . $br;
} else {
  // Fallback using switch
  switch ($code) {
    case 200:
    case 201: echo "200 => " . $t['status_ok'] . $br; break;
    case 400: echo "400 => " . $t['status_bad'] . $br; break;
    case 401:
    case 403: echo "$code => " . $t['status_auth'] . $br; break;
    case 404: echo "404 => " . $t['status_nf'] . $br; break;
    default:  echo "$code => " . $t['status_unknown'] . $br;
  }
}
