<h2 class="title">Unsere Autos</h2>
<h4 class="subtitle">Hier finden Sie eine Übersicht unserer verfügbaren Fahrzeuge</h4>
<?php if ($this->getData('valid') != true) {
    //Warning if XML cant get validated by the schema
    echo ('<div class="alert alert-danger" role="alert">
        XML-Datei konnte nicht validiert werden
        </div>');
} ?>
    <!-- Foreach which outputs every car element in the Querry Array -->
<ul class="list-group">
    <?php foreach ($this->getData('carList') as $car) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="/Webprojekt/car/detail?id=<?php echo $car->getId(); ?>">
                <?php echo $car->getMarke() . ' ' . $car->getModell() . ' ' . $car->getFarbe() . ' (' . $car->getErstzulassung() . ')';
                ?>
            </a>
            <small><?php echo $car->getPreis(); ?></small>
        </li>
    <?php endforeach; ?>

</ul>

<br>
<br>