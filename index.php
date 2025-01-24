<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio DEV</title>
</head>

<body>
    <h1>
        <?php
        echo "Portfólio DEV";

        $projects = [
            [
                "name" => "Meu portfólio",
                "description" => "Meu portfólio feito em PHP e HTML.",
                "finish" => true,
                "dateOfProject" => "24-01-2025",
            ],
            [
                "name" => "To Do",
                "description" => "To Do feito em PHP e HTML.",
                "finish" => false,
                "dateOfProject" => "30-12-2024",
            ],
        ];

        function isProjetoFinalizado($project)
        {

            if ($project) {
                echo "✅ finalizado!";
            } else {
                echo "⛔ não finalizado!";
            }
        }

        ?>
    </h1>

    <ul>
        <?php foreach ($projects as $project): ?>

            <div>
                <h2><?= $project['name'] ?></h2>
                <p><?= $project['dateOfProject'] ?></p>
            </div>

            <div> Projeto:
                <?php
                echo isProjetoFinalizado($project['finish']);
                ?>
            </div>
        <?php endforeach; ?>
    </ul>

</body>

</html>