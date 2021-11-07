<div class="card" style="width: 40rem;">
<img src="/DiesUndDas/v3/data/images/911_rot.jpg" class="rounded float-left">
  <div class="card-body">


    <h5 class="card-title title"><?php echo $this->getData('book')->getName(); ?></h5>
    <p class="card-text">
        Author: <?php echo $this->getData('book')->getAuthor(); ?><br />
        Jahr: <?php echo $this->getData('book')->getYear(); ?>
    </p>

  </div>

</div>

<hr />

<a class="btn btn-secondary" href="/DiesUndDas/v3/book">Zur Übersicht</a>    