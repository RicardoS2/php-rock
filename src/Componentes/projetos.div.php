<?php if ($projeto['finalizado']) {
    echo ' ✅ ';
} else {
    echo ' ❌ ';
}
?>
<?= $projeto['titulo'] ?>
<?php if ($projeto['finalizado']): ?>
    <span class=" text-xs text-zinc-100  font-bold ">(finalizado <?= $projeto["ano"] ?>)</span>
<?php else: ?>
    <span class="text-xs text-zinc-100  font-bold ">(Em desenvolvimento)</span>
<?php endif ?>
</h3>
<div class=" flex space-x-3">

    <?php
    $cor = ['blue', 'red', 'cyan', 'sky'];
    foreach ($projeto['stack'] as $posicao => $tech): ?>
        <span class="bg-<?= $cor[$posicao] ?>-400 text-<?= $cor[$posicao] ?>-900 rounded-lg px-2 py-1 font-semibold text-2x w-full text-center">
            <?= $tech ?>
        </span>

    <?php endforeach ?>
</div>
</div>
<p class="leading-6">
    <?= $projeto['descricao'] ?>