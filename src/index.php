<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600;700&display=swap" rel="stylesheet">
   
   <script>
       tailwind.config = {
           theme: {
               extend: {
                   fontFamily: {
                       firecode: ['Fira Code', 'monospace'], // Aqui removi as aspas duplas extras
                   },
               },
           },
       };
   </script>

<body class="bg-gradient-to-r from-slate-900 to-teal-950 text-white font-firecode ">
    <?php include('./Componentes/header.php'); ?>
    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <?php include('./Componentes/hero.php'); ?>
        <!-- lista de projetos -->
        <section class=" space-y-3 py-6" id="projetos">
            <h2 class="text-2xl  font-bold">Meus projetos</h2>

            <?php include('./Componentes/projetos.visualizador.php') ?>

            </div>
        </section>

    </main>
    <footer class="mx-auto max-w-screen-lg min-h-20 px-2">

        <div class=" border-t border-zinc-200 pt-3 px-3 text-zinc-100 text-sm">
            ©Copyright <?= date('Y') ?> .Feito por mim mesmo S2
        </div>
        <div>

        </div>
        </div>
    </footer>

</html>