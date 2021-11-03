<h2>Meine Bücher</h2>

<!-- 
    TODO: Add link to each book, that point to a book detail page
-->
<ul>

    <?php foreach($this->getData('bookList') as $title => $details): ?>
    <li><?php echo $title; ?></li>
    <?php endforeach; ?>
</ul>