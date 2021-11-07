<h1>Suchergebnis</h1>
<p>
    Ihre Suche nach <b><?php echo $this->getData('query'); ?></b> ergab <b><?php echo count($this->getData('result')); ?></b> Treffer
</p>



    <?php 
    
    

    foreach($this->getData('result') as $car): ?>
    <li class="list-group-item">
        <a href="/DiesUndDas/Backend/car/detail?id=<?php echo $car->getId(); ?>">
        <?php echo $car->getName(); ?>
        </a>
    </li>
    <?php endforeach; 
    

    if(count($this->getData('result')) == 0){
       echo(
        '<div class="alert alert-warning" role="alert">
        Es wurden keine Ergebnisse gefunden
        </div>'
    );
}
    ?>