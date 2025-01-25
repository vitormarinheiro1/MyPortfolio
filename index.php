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
                "dateOfProject" => "24-01-2025",
            ],
            [
                "name" => "Barbearia",
                "description" => "Barbearia feita em PHP e HTML.",
                "finish" => true,
                "dateOfProject" => "01-06-2025",
            ],
        ];

        function isProjetoFinalizado($project)
        {

            if ($project) {
                return "✅ finalizado!";
            }

            return "⛔ não finalizado!";
        }

        function filterProject($projects, $finish = null)
        {
            // se for nulo retorna todos os projetos
            if (is_null($finish)) {
                return $projects;
            }

            $filtrados = [];

            // caso meu projeto esteja finalizado eu vou adicionar dentro de filtrados esse projeto
            foreach ($projects as $project) {
                if (
                    $project['finish'] === $finish
                ) {
                    // adiciona no array filtrados o projeto 
                    $filtrados[] = $project;
                }
            }

            return $filtrados;
        }

        function filterDate($projects, $dateOfProject = null)
        {
            // se for nulo retorna todos os projetos
            if (is_null($dateOfProject)) {
                return $projects;
            }

            // array de filtrados 
            $filtrados = [];

            // percorre a lista de projetos
            foreach ($projects as $project) {
                // caso a data do meu projeto for igual a data informada adicione esse projeto no filtro
                if ($project['dateOfProject'] === $dateOfProject) {
                    $filtrados[] = $project;
                }
            }

            return $filtrados;
        }

        ?>
    </h1>

    <ul>
        <?php foreach (filterDate($projects, '01-06-2025') as $project): ?>

            <div>
                <h2>Projeto: <?= $project['name'] ?></h2>
                <p>Data do projeto: <?= $project['dateOfProject'] ?></p>
            </div>

            <div> Status:
                <?= isProjetoFinalizado($project['finish']); ?>
            </div>
        <?php endforeach; ?>
    </ul>

</body>

</html>