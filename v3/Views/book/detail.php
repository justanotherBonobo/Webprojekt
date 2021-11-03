<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $this->getData('book')->getName(); ?></h5>
    <p class="card-text">
        Author: <?php echo $this->getData('book')->getAuthor(); ?><br />
        Jahr: <?php echo $this->getData('book')->getYear(); ?>
    </p>
  </div>
</div>

<hr />

<a class="btn btn-secondary" href="/book">Zurück zur Liste</a>    