<h1>Suchergebnis</h1>
<p>
    Ihre Suche nach <b><?php echo $this->getData('query'); ?></b> ergab <b><?php echo count($this->getData('result')); ?></b> Treffer
</p>

    <?php foreach($this->getData('result') as $book): ?>
    <li class="list-group-item">
        <a href="/DiesUndDas/v3/book/detail?id=<?php echo $book->getId(); ?>">
        <?php echo $book->getName(); ?>
        </a>
    </li>
    <?php endforeach; ?>