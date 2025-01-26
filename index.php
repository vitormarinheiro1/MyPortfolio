<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Meu portfólio</title>
</head>

<body class="bg-slate-900 text-gray-200">
    <!-- Header -->
    <?php include('./components/header.php'); ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <!-- Hero -->
        <?php include('./components/hero.php'); ?>
        <!-- Projetos -->
        <section class="space-y-3 py-6">
            <h2 class="text-2xl font-bold" id="projects">Meus Projetos</h2>
            <?php include('./components/projects.php'); ?>
        </section>
    </main>

    <!-- Rodape -->
    <?php include('./components/footer.php'); ?>
</body>

</html>