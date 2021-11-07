<div class="card" style="width: 40rem;">
<img src="/DiesUndDas/v3/data/images/<?php echo $this->getData('car')->getImg()?>" class="rounded float-left">
  <div class="card-body">


    <h5 class="card-title title"><?php echo $this->getData('car')->getMarke().' '. $this->getData('car')->getModell(); ?></h5>
    <p class="card-text">
        <b>Marke:</b> <?php echo $this->getData('car')->getMarke(); ?><br />
        <b>Modell:</b> <?php echo $this->getData('car')->getModell(); ?><br />
        <b>Preis:</b> <?php echo $this->getData('car')->getPreis(); ?><br />
        <b>Zustand:</b> <?php echo $this->getData('car')->getZustand(); ?><br />
        <b>Erstzulassung:</b> <?php echo $this->getData('car')->getErstzulassung(); ?><br />
        <b>Kilometerstand:</b> <?php echo $this->getData('car')->getKilometerstand(); ?><br />
        <b>Farbe:</b> <?php echo $this->getData('car')->getFarbe(); ?><br />
        <b>Leistung:</b> <?php echo $this->getData('car')->getLeistung(); ?><br />
        <b>Getriebe:</b> <?php echo $this->getData('car')->getGetriebe(); ?><br />
        <b>Von 0 auf 100:</b> <?php echo $this->getData('car')->getBeschleuigungAufHundert(); ?><br />
        <b>Emissionsklasse:</b> <?php echo $this->getData('car')->getEmissionsklasse(); ?><br />
        <b>Kraftstoffart:</b> <?php echo $this->getData('car')->getKraftstoffart(); ?><br />
        <b>Verbrauch Innerorts:</b> <?php echo $this->getData('car')->getInnerorts(); ?><br />
        <b>Verbrauch Außerorts:</b> <?php echo $this->getData('car')->getAußerorts(); ?><br />
        <b>Verbrauch Kombiniert:</b> <?php echo $this->getData('car')->getKombiniert(); ?><br />
        </p>

  </div>

</div>

<hr />

<a class="btn btn-secondary" href="/DiesUndDas/v3/car">Zur Übersicht</a>    