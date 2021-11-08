<h2 class="title">Meine Autos</h2>
<?php print_r($this->getData('error')) ?>

<ul class="list-group">
    <?php foreach($this->getData('carList') as $car): ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="/DiesUndDas/v3/car/detail?id=<?php echo $car->getId(); ?>">
        <?php echo $car->getMarke(). ' '.$car->getModell(). ' '. $car->getFarbe(); 
        ?>
        </a>
        <small><?php echo $car->getErstzulassung(); ?></small>
    </li>
    <?php endforeach; ?>

</ul>