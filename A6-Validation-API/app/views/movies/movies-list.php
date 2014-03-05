<?php foreach ($movies as $movie) : ?>
    <p>
        <strong>Title:</strong> <?php echo $movie->title ?>
        (<?php echo $movie->year ?>)
        <br/>
        <strong>Rating:</strong> <?php echo $movie->mpaa_rating ?>
        <br/>
        <strong>Runtime:</strong> <?php echo $movie->runtime ?>
    </p>
<?php endforeach; ?>