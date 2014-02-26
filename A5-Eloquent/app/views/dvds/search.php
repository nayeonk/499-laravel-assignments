<!doctype html>
<html>
<head>
    <title>DVD Search</title>
</head>
<body>
<form method="GET" action="/dvds">
    <h1>DVD Search</h1>
    <div>
        DVD Title:
        <input type="text" name="dvd_title" />
    </div>

    <div>
        Genre:
        <select name="genre">
            <option value="all">All</option>
            <?php foreach ($genres as $genre) : ?>
                <option value="<?php echo $genre->id ?>"><?php echo $genre->genre_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Rating:
        <select name="rating">
            <option value="all">All</option>
            <?php foreach ($ratings as $rating) : ?>
                <option value="<?php echo $rating->id ?>"><?php echo $rating->rating_name ?></option>
            <?php endforeach; ?>
        </select>
        <br/>
        <input type="submit" value="Submit" />
    </div>
</form>
</body>
</html>