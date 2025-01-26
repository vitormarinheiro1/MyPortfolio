<?php
$projects = [
    [
        "name" => "Meu portfólio",
        "description" => "Meu portfólio feito em PHP e HTML.",
        "finish" => true,
        "year" => 2024,
        "stack" => ["PHP", "HTML", "CSS"],
        "img" => "./img/projeto1.png"
    ],
    [
        "name" => "To Do",
        "description" => "To Do feito em PHP e HTML.",
        "finish" => false,
        "year" => 2024,
        "stack" => ["PHP", "REACT", "TAILWINDCSS"],
        "img" => "./img/projeto2.png"
    ],
    [
        "name" => "Barbearia",
        "description" => "Barbearia feita em PHP e HTML.",
        "finish" => true,
        "year" => 2025,
        "stack" => ["LARAVEL", "VUEJS", "MYSQL"],
        "img" => "./img/projeto3.png"
    ],
];
?>

<!-- Projeto -->
<?php foreach ($projects as $project): ?>
    <div class="flex items-center bg-slate-800 rounded-lg p-3 space-x-3">
        <div class="w-1/5 flex items-center justify-middle">
            <img src="<?= $project['img'] ?>" class="h-42 rounded-md">
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="font-semibold text-xl">
                    <?php if ($project['finish']): ?>✅<?php endif; ?>
                    <?= $project['name'] ?>
                    <?php if ($project['finish']): ?><span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?= $project['year'] ?>)</span>
                    <?php else: ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(em andamento...)</span>
                    <?php endif; ?>
                </h3>
                <div class="space-x-1">
                    <?php
                    $colors = ['violet', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
                    foreach ($project['stack'] as $posicao => $tech):
                    ?>
                        <span class="bg-<?= $colors[$posicao] ?>-400 text-<?= $colors[$posicao] ?>-900 rounded-md px-2 py-1 font-semibold text-xs uppercase">
                            <?= $tech ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6"><?= $project['description'] ?></p>
        </div>
    </div>
<?php endforeach; ?>