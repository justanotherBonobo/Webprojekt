<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>

    <section class="section">
        <div class="container content">
            <div class="columns">

                <div class="column is-one-quarter">
                    <h1 class="title">
                        Carsearch
                    </h1>
                    <p class="subtitle">
                        Find your <strong>dreamcar</strong>!
                    </p>
                    <nav>
                        <ul>
                            <li><a href="index.php?c=book&a=detail">Menu 1</a></li>
                            <li><a href="index.php?c=book">Menu 2</a></li>
                            <li><a href="#">Menu 3</a></li>
                        </ul>
                    </nav>

                </div>

                <div class="column">
                    <div class="">
                        <form action="index.php?c=book" method="get">


                            <div class="field has-addons">
                                <p class="control">
                                    <span class="select">
                                        <select name="c">
                                            <option>book</option>
                                            <option>car</option>
                                        </select>
                                    </span>
                                </p>
                                
                                <p class="control is-expanded">
                                    <input class="input" name="search" type="text" placeholder="Find a post"></input>
                                </p>

                                <p class="control">
                                    <input class="button is-info" type="submit" value="suchen">
                                    </input>
                                </p>
                                <input type="hidden" name="a" value="detail"> 
                            </div>


                        </form>


                        <?php echo $this->renderView(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
<br>
<br>
<br>
    <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>

</body>

</html>