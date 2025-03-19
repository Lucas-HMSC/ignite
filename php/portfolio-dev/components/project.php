<?php
$projects = [
  [
    'title' => 'Zamperlini Calhas',
    'is_done' => true,
    'year' => 2025,
    'description' => 'Projeto desenvolvivo para um cliente que trabalha no ramo de Calhas e gostaria de um site institucional para exibir seus produtos e serviços.',
    'stack' => [
      [ 'name' => 'HTML', 'color' => 'sky'],
      [ 'name' => 'CSS', 'color' => 'rose'],
      [ 'name' => 'JavaScript', 'color' => 'lime'],
      [ 'name' => 'Bootstrap', 'color' => 'amber'],
    ],
    'img' => [
      'src' => '/img/projeto-1.png',
      'alt' => 'Imagem do site Zamperlini Calhas',
    ],
  ],
  [
    'title' => 'Lab Design System',
    'is_done' => true,
    'year' => 2024,
    'description' => 'Design System desenvolvido do zero, desde a criação do layout no Figma, criação e organização dos tokens e finalizando com a criação e configuração do projeto. Projeto desenvolvido durante o evento Ignite Lab ReactJS - 3ª Edição fornecido pela Rocketseat.',
    'stack' => [
      [ 'name' => 'React', 'color' => 'sky'],
      [ 'name' => 'TypeScript', 'color' => 'blue'],
      [ 'name' => 'Tailwind CSS', 'color' => 'rose'],
      [ 'name' => 'Vite', 'color' => 'zinc'],
    ],
    'img' => [
      'src' => '/img/projeto-2.png',
      'alt' => 'Imagem do Projeto 1',
    ],
  ],
];
?>

<?php foreach ($projects as $project): ?>
  <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
    <div class="w-1/5 flex items-center justify-middle">
      <img class="h-42 rounded-md shadow-lg shadow-slate-900" src="<?=$project['img']['src']?>" alt="<?=$project['img']['alt']?>">
    </div>
    <div class="w-4/5 space-y-3">
      <div class="flex gap-3 justify-between">
        <h3 class="font-semibold text-xl">
          <?php if($project['is_done']): ?>✅<?php endif; ?>
          <?=$project['title']?>
          <?php if($project['is_done']): ?>
            <span class="text-sm text-gray-400 opacity-50 italic">(finalizado em <?=$project['year']?>)</span>
          <?php else: ?>
            <span class="text-sm text-gray-400 opacity-50 italic">(em desenvolvimento)</span>  
          <?php endif; ?>
        </h3>
        <div class="space-x-1">
          <?php foreach ($project['stack'] as $stack): ?>
            <span class="bg-<?=$stack['color']?>-400 text-<?=$stack['color']?>-900 rounded-md px-2 py-1 font-semibold text-xs"><?=$stack['name']?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <p class="leading-6">
        <?=$project['description']?>
      </p>
    </div>
  </div>
<?php endforeach; ?>