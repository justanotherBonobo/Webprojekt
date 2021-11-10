<h1 class="title">Suchergebnis</h1>
<p>
    Ihre Suche nach <b><?php echo $this->getData('query'); ?></b> ergab <b><?php echo count($this->getData('result')); ?></b> Treffer
</p>

<br>
<?php if ($this->getData('valid') != true) {
    //Warning if XML schema doesnt match
    echo ('<div class="alert alert-danger" role="alert">
        XML-Datei konnte nicht validiert werden
        </div>');
} ?>

<ul class="list-group">
    <?php 
    //Show results
    foreach($this->getData('result') as $car): ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="/Webprojekt/car/detail?id=<?php echo $car->getId(); ?>">
        <?php echo $car->getMarke(). ' '.$car->getModell(). ' ' . $car->getFarbe() . ' (' . $car->getErstzulassung() . ')'; 
        ?>
        </a>
        <small><?php echo $car->getPreis(); ?></small>
    </li>
</ul>
    <?php endforeach; 


    if(count($this->getData('result')) == 0){
        //info if no elements found
       echo(
        '<div class="alert alert-warning" role="alert">
        Es wurden keine Ergebnisse gefunden
        </div>'
    );
}
    ?>