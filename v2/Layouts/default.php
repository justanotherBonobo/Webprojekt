<!DOCTYPE html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    </head>
    <body>

    <section class="section">
    <div class="container content">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
        My first website with <strong>Bulma</strong>!
      </p>
      <nav>
            <ul>
                <li><a href="index.php?c=book&a=detail">Menu 1</a></li>
                <li><a href="index.php?c=book">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
            </ul>
        </nav>
      <?php echo $this->renderView(); ?>
    </div>
    </section>
    </body>
</html>