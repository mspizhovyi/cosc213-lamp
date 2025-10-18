<?php
$n    = (int)($_GET['n'] ?? 5);
$lang = $_GET['lang'] ?? 'en';

// Helper for line breaks
$br = "<br>";

// -----------------------------
// Language pack (English/French)
// -----------------------------
$messages = [
  'en' => [
    'for_loop'     => 'For loop (1..N):',
    'while_loop'   => 'While loop (countdown):',
    'foreach_loop' => 'Foreach over array:',
    'done'         => 'Done!'
  ],
  'fr' => [
    'for_loop'     => 'Boucle for (1..N):',
    'while_loop'   => 'Boucle while (compte à rebours):',
    'foreach_loop' => 'Boucle foreach sur le tableau:',
    'done'         => 'Terminé!'
  ]
];

// Fallback to English if unsupported
if (!array_key_exists($lang, $messages)) {
  $lang = 'en';
}
$t = $messages[$lang];

// -----------------------------
// A) For loop 1..N
// -----------------------------
echo "<strong>{$t['for_loop']}</strong>$br";
for ($i = 1; $i <= $n; $i++) {
  echo $i . $br;
}

// -----------------------------
// B) While loop countdown
// -----------------------------
echo "<strong>{$t['while_loop']}</strong>$br";
$count = $n;
while ($count > 0) {
  echo $count . $br;
  $count--;
}

// -----------------------------
// C) Foreach loop over array
// -----------------------------
echo "<strong>{$t['foreach_loop']}</strong>$br";
$fruits = ['apple', 'banana', 'cherry'];
foreach ($fruits as $index => $fruit) {
  echo "$index: $fruit$br";
}

echo "<em>{$t['done']}</em>$br";
