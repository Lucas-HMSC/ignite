<?php
$items = [
  ['href' => '#projetos', 'text' => 'Projetos'],
  ['href' => 'https://github.com/Lucas-HMSC', 'text' => 'GitHub'],
  ['href' => 'https://www.linkedin.com/in/dev-lucas-carvalho/', 'text' => 'LinkedIn'],
  ['href' => 'https://lucas-hmsc.github.io/curriculo/', 'text' => 'Curriculo'],
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
  <!-- Logo -->
  <div class="font-bold text-xl text-cyan-600">
    🐺 Meu Portfolio...
  </div>

  <!-- Links -->
  <div>
    <ul class="flex gap-x-3 font-medium">
      <?php foreach ($items as $item): ?>
        <li>
          <a href="<?= $item['href'] ?>" target="_blank" class="hover:underline"><?= $item['text'] ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>