<?php
$items = [
  ['href' => '#', 'src' => '/img/twitter.png', 'alt' => 'Twitter Logo'],
  ['href' => '#', 'src' => '/img/facebook.png', 'alt' => 'Facebook Logo'],
  ['href' => '#', 'src' => '/img/linkedin.png', 'alt' => 'LinkedIn Logo'],
  ['href' => '#', 'src' => '/img/youtube.png', 'alt' => 'Youtube Logo'],
];
?>

<section class="flex gap-x-3">
  <!-- Título e descrição -->
  <div class="w-2/3">
    <h1 class="text-3xl font-bold">
      Oi, meu nome é Lucas!
    </h1>
    <p class="text-xl leading-6 mt-6">
      Falando um pouco sobre mim, sou um desenvolvedor em desenvolvimento constante! Estudioso e dedicado, estou sempre buscando novos conhecimentos e novas experiências na área de Tecnologia. Atualmente tenho Bacharelado em Ciência da Computação e dezenas de cursos profissionalizantes em Desenvolvimento Web. Estou cursando as formações da Rocketseat, este é um projeto da trilha de PHP.
    </p>
    <ul class="flex gap-x-3 mt-3">
      <?php foreach ($items as $item): ?>
        <li><a href="<?= $item['href'] ?>" target="_blank"><img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>"
              alt="<?= $item['alt'] ?>"></a></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!-- Imagem -->
  <div class="w-1/3 flex items-center justify-center">
    <div>
      <img class="h-60 -kmt-6 hover:animate-pulse" src="/img/avatar.svg" alt="Avatar">
    </div>
  </div>
</section>