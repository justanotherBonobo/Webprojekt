<h2>Meine Bücher</h2>

<ul class="list-group">
    <?php foreach($this->getData('bookList') as $book): ?>
    <li class="list-group-item">
        <a href="./book/detail?id=<?php echo $book->getId(); ?>">
        <?php echo $book->getName(); ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
