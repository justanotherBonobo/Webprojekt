<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS and Bulma -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>CarSearch</title>
  </head>
  <body>
    <?php include('Layouts/components/nav.php'); ?>
    <div class="section">
    <div class="container">
        <?php echo $this->renderView(); ?>

    </div>
    </div>
    <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>CarSearch</strong> by SimpleSolutions GmbH, Rosenthalerstr. 23, 10119 Berlin.
    </p>
  </div>
</footer>

  </body>
</html>
