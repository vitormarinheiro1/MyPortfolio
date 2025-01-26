<?php

$itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => 'https://www.linkedin.com/in/vitor-marinheiro-590a461ba/', 'texto' => 'LinkedIn'],
    ['href' => 'https://github.com/vitormarinheiro1', 'texto' => 'GitHub'],
];

?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <div class="font-bold text-xl text-cyan-600">
        Meu Portfólio ...
    </div>

    <div>
        <ul class="flex gap-3 font-medium text-gray-200">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" class="hover:underline"><?= $item['texto'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>