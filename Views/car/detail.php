<div class="card" style="width: 40rem;">
<img src="/Webprojekt/data/images/<?php echo $this->getData('car')->getImg()?>" class="rounded float-left">
  <div class="card-body">

    <!-- Detailed view of the car object -->
    <h5 class="card-title subtitle"><?php echo $this->getData('car')->getMarke(); ?></h5>
    <h5 class="card-title title"><?php echo $this->getData('car')->getModell(); ?></h5>

    <p class="card-text">
        <b>Marke:</b> <?php echo $this->getData('car')->getMarke(); ?><br />
        <b>Modell:</b> <?php echo $this->getData('car')->getModell(); ?><br />
        <b>Preis:</b> <?php echo $this->getData('car')->getPreis(); ?><br />
        <b>Zustand:</b> <?php echo $this->getData('car')->getZustand(); ?><br />
        <b>Erstzulassung:</b> <?php echo $this->getData('car')->getErstzulassung(); ?><br />
        <b>Kilometerstand:</b> <?php echo $this->getData('car')->getKilometerstand(); ?><br />
        <b>Farbe:</b> <?php echo $this->getData('car')->getFarbe(); ?><br />
        <b>Höchstgeschwindigkeit:</b> <?php echo $this->getData('car')->getHoechstgeschwindigkeit(); ?><br />
        <b>Leistung:</b> <?php echo $this->getData('car')->getLeistung(); ?><br />
        <b>Getriebe:</b> <?php echo $this->getData('car')->getGetriebe(); ?><br />
        <b>Von 0 auf 100:</b> <?php echo $this->getData('car')->getBeschleuigungAufHundert(); ?><br />
        <b>Emissionsklasse:</b> <?php echo $this->getData('car')->getEmissionsklasse(); ?><br />
        <b>Kraftstoffart:</b> <?php echo $this->getData('car')->getKraftstoffart(); ?><br />
        <b>Verbrauch Innerorts:</b> <?php echo $this->getData('car')->getInnerorts(); ?><br />
        <b>Verbrauch Außerorts:</b> <?php echo $this->getData('car')->getAusserorts(); ?><br />
        <b>Verbrauch Kombiniert:</b> <?php echo $this->getData('car')->getKombiniert(); ?><br />
        </p>

  </div>

</div>
<br>

<a class="btn btn-secondary" href="/Webprojekt/car">Zur Übersicht</a>    
<br>
<br>