<div class="card" style="width: 40rem;">
<img src="/DiesUndDas/v3/data/images/911_rot.jpg" class="rounded float-left">
  <div class="card-body">


    <h5 class="card-title title"><?php echo $this->getData('car')->getModell(); ?></h5>
    <p class="card-text">
        Marke: <?php echo $this->getData('car')->getMarke(); ?><br />
        Modell: <?php echo $this->getData('car')->getModell(); ?>
        Preis: <?php echo $this->getData('car')->getPreis(); ?><br />
        Zustand: <?php echo $this->getData('car')->getZustand(); ?><br />
        Kilometerstand: <?php echo $this->getData('car')->getKilometerstand(); ?><br />
        Farbe: <?php echo $this->getData('car')->getFarbe(); ?><br />
        Leistung: <?php echo $this->getData('car')->getLeistung(); ?><br />
        Getriebe: <?php echo $this->getData('car')->getGetriebe(); ?><br />
        Von 0 auf 100: <?php echo $this->getData('car')->getBeschleunigungAufHundert(); ?><br />
        Emissionsklasse: <?php echo $this->getData('car')->getEmissionsklasse(); ?><br />
        Kraftstoffart: <?php echo $this->getData('car')->getKraftstoffart(); ?><br />
        Verbrauch Innerorts: <?php echo $this->getData('car')->getInnerorts(); ?><br />
        Verbrauch Außerorts: <?php echo $this->getData('car')->getAußerorts(); ?><br />
        Verbrauch Kombiniert: <?php echo $this->getData('car')->getKombiniert(); ?><br />
        </p>

  </div>

</div>

<hr />

<a class="btn btn-secondary" href="/DiesUndDas/v3/car">Zur Übersicht</a>    