<h2 class="title">Meine Bücher</h2>


<ul class="list-group">
    <?php foreach($this->getData('bookList') as $book): ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="/DiesUndDas/v3/book/detail?id=<?php echo $book->getId(); ?>">
        <?php echo $book->getName(); ?>
        </a>
        <small><?php echo $book->getId(); ?> Euro</small>
    </li>
    <?php endforeach; ?>

</ul>
