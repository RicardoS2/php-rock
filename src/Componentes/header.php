<?php include('./Componentes/links.php')?>
<header class="mx-auto max-w-screen-lg  px-3 py-6  items-center justify-between flex">
    <div class="font-bold text-xl text-cian-600">Meu Portfolio..</div>
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php
            foreach($links as $link):?>
             <li> <a href="<?=$link['href']?>" class="hover:underline">

             <?=$link['texto']?>
             </a><li>  
            <?php endforeach;?>
        </ul>
    </div>
</header>