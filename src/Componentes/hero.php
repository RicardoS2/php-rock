<?php include('./Componentes/heroe.vi.php'); ?>
<section class="flex gap-x-3">
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Rick!</h1>
        <p class="text-xl leading-6 mt-6">sobre</p>
        <ul class=" flex gap-x-3 mt-3">
            <?php
            foreach ($heroe as $hero): ?>
                <li> <a href="<?= $link['href'] ?>" target="_blank">
                        <img class="h-12 hover:animate-bounce" src="<?= $hero['src'] ?>" alt="<?= $hero['alt'] ?>">
                    </a>
                <li>
                <?php endforeach; ?>
        </ul>
    </div>
    <div class="w-1/3 flex items-center justify-center  ">
        <img class="h-60 -mt-6 rounded-full" src="./assets/ᛕꪊ᥅ꪮꪑ꠸.jpeg"  alt="">
    </div>
</section>