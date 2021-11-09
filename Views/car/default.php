<h2 class="title">Meine Autos</h2>
<?php if ($this->getData('valid') != true) {
    echo ('<div class="alert alert-danger" role="alert">
        XML-Datei konnte nicht validiert werden
        </div>');
} ?>

<ul class="list-group">
    <?php foreach ($this->getData('carList') as $car) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="/Webprojekt/car/detail?id=<?php echo $car->getId(); ?>">
                <?php echo $car->getMarke() . ' ' . $car->getModell() . ' ' . $car->getFarbe();
                ?>
            </a>
            <small><?php echo $car->getErstzulassung(); ?></small>
        </li>
    <?php endforeach; ?>

</ul>