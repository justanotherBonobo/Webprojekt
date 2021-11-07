<h2>Meine Autos</h2>

<ul class="list-group">
    <?php foreach($this->getData('carList') as $car): ?>
    <li class="list-group-item">
        <a href="/DiesUndDas/Backend/car/detail?id=<?php echo $car->getId(); ?>">
        <?php echo $car->getName(); ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
