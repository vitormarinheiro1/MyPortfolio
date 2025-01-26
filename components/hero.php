<?php

$itens = [
    ['href' => 'https://www.linkedin.com/in/vitor-marinheiro-590a461ba/', 'alt' => 'LinkedIn', 'src' => './img/linkedin.svg'],
    ['href' => 'https://github.com/vitormarinheiro1', 'alt' => 'GitHub', 'src' => './img/github.svg'],
];

?>

<section class="flex gap-x-3">
    <!-- Titulo e Descricao -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Olá, meu nome é Vitor Marinheiro.</h1>
        <p class="text-xl leading-6 mt-6">Sou especializado em criar interfaces web intuitivas e dinâmicas. Estudo Ciência da Computação e estou sempre atualizado com as últimas tendências e tecnologias, buscando aprimorar minhas habilidades e entregar projetos de alta qualidade.</p>
        <p>
        <ul class="flex gap-3 mt-3">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" target="_blank"><img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"></a></li>
            <?php endforeach; ?>
        </ul>
        </p>
    </div>
    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <img class="h-60 -mt-6 hover:animate-ping" src="./img/avatar.svg" alt="Avatar ">
    </div>
</section>