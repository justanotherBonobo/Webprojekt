<h2>Meine Bücher</h2>

<!-- 
    TODO: Add link to each book, that point to a book detail page
-->
<ul>
    <p>Sie suchten nach: 
        <?php echo $this->getData('search')
        ?>
    </p>
    <?php foreach($this->getData('bookList') as $title => $details): ?>
    <li><?php echo $title; ?></li>
    <?php endforeach; ?>
</ul>