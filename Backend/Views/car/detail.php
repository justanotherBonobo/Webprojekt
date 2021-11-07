<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $this->getData('car')->getName(); ?></h5>
    <p class="card-text">
        Marke: <?php echo $this->getData('car')->getMarke(); ?><br />
        Preis: <?php echo $this->getData('car')->getPreis(); ?>
    </p>
  </div>
</div>

<hr />

<a class="btn btn-secondary" href="/DiesUndDas/Backend/car">Zur Übersicht</a>    