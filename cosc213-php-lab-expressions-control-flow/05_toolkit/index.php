<?php
// Input
$action = $_POST['action'] ?? '';
$input  = $_POST['input'] ?? '';
$result = null;

// Language (default en)
$lang = $_POST['lang'] ?? 'en';

// Language messages
$messages = [
  'en' => [
    'title'     => 'PHP Toolkit',
    'enter_txt' => 'Enter text or number:',
    'action'    => 'Choose action:',
    'submit'    => 'Run',
    'length'    => 'String length',
    'reverse'   => 'Reverse string',
    'upper'     => 'To UPPERCASE',
    'lower'     => 'to lowercase',
    'square'    => 'Square number',
    'result'    => 'Result',
  ],
  'fr' => [
    'title'     => 'Boîte à outils PHP',
    'enter_txt' => 'Entrez du texte ou un nombre :',
    'action'    => 'Choisir une action :',
    'submit'    => 'Exécuter',
    'length'    => 'Longueur de la chaîne',
    'reverse'   => 'Inverser la chaîne',
    'upper'     => 'Mettre en MAJUSCULES',
    'lower'     => 'Mettre en minuscules',
    'square'    => 'Nombre au carré',
    'result'    => 'Résultat',
  ]
];
if (!array_key_exists($lang, $messages)) {
  $lang = 'en';
}
$t = $messages[$lang];

// Perform action
if ($action && $input !== '') {
  switch ($action) {
    case 'length':  $result = strlen($input); break;
    case 'reverse': $result = strrev($input); break;
    case 'upper':   $result = strtoupper($input); break;
    case 'lower':   $result = strtolower($input); break;
    case 'square':  $result = is_numeric($input) ? ($input * $input) : 'N/A'; break;
    default:        $result = 'Unknown action';
  }
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <title><?= $t['title'] ?></title>
</head>
<body>
  <h1><?= $t['title'] ?></h1>

  <form method="post">
    <label>
      <?= $t['enter_txt'] ?>
      <input type="text" name="input" value="<?= htmlspecialchars($input) ?>">
    </label>
    <br><br>

    <label>
      <?= $t['action'] ?>
      <select name="action">
        <option value="length"  <?= $action==='length' ? 'selected' : '' ?>><?= $t['length'] ?></option>
        <option value="reverse" <?= $action==='reverse' ? 'selected' : '' ?>><?= $t['reverse'] ?></option>
        <option value="upper"   <?= $action==='upper' ? 'selected' : '' ?>><?= $t['upper'] ?></option>
        <option value="lower"   <?= $action==='lower' ? 'selected' : '' ?>><?= $t['lower'] ?></option>
        <option value="square"  <?= $action==='square' ? 'selected' : '' ?>><?= $t['square'] ?></option>
      </select>
    </label>
    <br><br>

    <label>
      Language:
      <select name="lang">
        <option value="en" <?= $lang === 'en' ? 'selected' : '' ?>>English</option>
        <option value="fr" <?= $lang === 'fr' ? 'selected' : '' ?>>Français</option>
      </select>
    </label>
    <br><br>

    <button type="submit"><?= $t['submit'] ?></button>
  </form>

  <hr>

  <?php if ($result !== null): ?>
    <h2><?= $t['result'] ?>:</h2>
    <p><?= htmlspecialchars((string)$result) ?></p>
  <?php endif; ?>
</body>
</html>
