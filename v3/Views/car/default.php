<h2 class="title">Meine Autos</h2>


<ul class="list-group">
    <?php foreach($this->getData('carList') as $car): ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="/DiesUndDas/v3/book/detail?id=<?php echo $car->getId(); ?>">
        <?php echo $car->getModell(); ?>
        </a>
        <small><?php echo $car->getId(); ?> Euro</small>
    </li>
    <?php endforeach; ?>

</ul>