<!doctype HTML>
<html>
    <head>
        <title>Movie Search Results</title>
        <style>
            body {
                background-color: #eeeeee;
            }
            #container {
                width: 800px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
            }
            img {
                width: 200px;
                height: auto;
                float: left;
                margin-right: 10px;
            }
        </style>
    </head>
    <body>

    <div id="container">

    <?php foreach ($movies as $movie) : ?>
        <p>
            <img src="<?php echo $movie->posters->original ?>">
            <strong>Title:</strong> <?php echo $movie->title ?>
            (<?php echo $movie->year ?>)
            <br/>
            <strong>Rating:</strong> <?php echo $movie->mpaa_rating ?>
            <br/>
            <strong>Runtime:</strong> <?php echo $movie->runtime ?> minutes
            <br/>
            <strong>Synopsis:</strong> <?php echo $movie->synopsis ?>
        </p>
        <div style="clear: both"></div>
    <?php endforeach; ?>
    </div>

    </body>
</html>