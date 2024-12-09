<?php include('./Componentes/lista.projetos.php') ?>
<?php foreach ($projetos as $projeto): ?>
    <div class="bg-neutral-800 rounded-3xl p-3 flex items-center transition ease-in-out delay-150 bg-neutral-800 hover:-translate-y-1 hover:scale-110 hover:bg-neutral-800 duration-300 ... ">
        <div class="w-1/5 flex items-center justify-middle">
            <img src="<?= $projeto['img'] ?>" class="h-10">
        </div>
        <div class="w-4/5  space-y-3">
            <div class=" flex gap-3 justify-between">
                <h3 class=" font-semibold text-xl">
                    <?php include('./Componentes/projetos.div.php') ?>
                    </p>
            </div>
        </div>
    <?php endforeach; ?>