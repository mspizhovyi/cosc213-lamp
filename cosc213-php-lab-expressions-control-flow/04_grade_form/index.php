<?php
// Detect input
$name  = $_POST['name']  ?? '';
$score = isset($_POST['score']) ? (int)$_POST['score'] : null;

// Language (optional, default en)
$lang = $_POST['lang'] ?? 'en';
$br   = "<br>";

// Messages
$messages = [
  'en' => [
    'title'      => 'Grade Form',
    'enter_name' => 'Enter your name:',
    'enter_score'=> 'Enter your score:',
    'submit'     => 'Submit',
    'result'     => 'Result',
    'pass'       => 'Pass 🎉',
    'fail'       => 'Fail ❌',
  ],
  'fr' => [
    'title'      => 'Formulaire de note',
    'enter_name' => 'Entrez votre nom :',
    'enter_score'=> 'Entrez votre score :',
    'submit'     => 'Envoyer',
    'result'     => 'Résultat',
    'pass'       => 'Réussi 🎉',
    'fail'       => 'Échec ❌',
  ]
];
if (!array_key_exists($lang, $messages)) {
  $lang = 'en';
}
$t = $messages[$lang];
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
      <?= $t['enter_name'] ?>
      <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
    </label>
    <br><br>
    <label>
      <?= $t['enter_score'] ?>
      <input type="number" name="score" value="<?= htmlspecialchars((string)$score) ?>">
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


  <?php if ($score !== null): ?>
    <h2><?= $t['result'] ?>:</h2>
    <p>
      <?= htmlspecialchars($name ?: 'Student') ?> → 
      <?= ($score >= 50) ? $t['pass'] : $t['fail'] ?>
    </p>
  <?php endif; ?>
</body>
</html>
