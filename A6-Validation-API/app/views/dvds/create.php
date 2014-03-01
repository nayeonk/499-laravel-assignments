<!doctype html>
<html>
<head>
    <title>DVD Insert</title>
</head>
<body>
<form method="POST" action="/dvds">
    <h1>Insert DVD</h1>
    <?php if (Session::has('success')) : ?>
        <p style="color: green;">
            <?php echo Session::get('success') ?>
        </p>
    <?php endif; ?>
    <div>
        DVD Title:
        <input type="text" name="dvd_title" />
    </div>

    <div>
        Genre:
        <select name="genre">
            <option value="blank"></option>
            <?php foreach ($genres as $genre) : ?>
                <option value="<?php echo $genre->id ?>"><?php echo $genre->genre_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Rating:
        <select name="rating">
            <option value="blank"></option>
            <?php foreach ($ratings as $rating) : ?>
                <option value="<?php echo $rating->id ?>"><?php echo $rating->rating_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Sound:
        <select name="sound">
            <option value="blank"></option>
            <?php foreach ($sounds as $sound) : ?>
                <option value="<?php echo $sound->id ?>"><?php echo $sound->sound_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Label:
        <select name="label">
            <option value="blank"></option>
            <?php foreach ($labels as $label) : ?>
                <option value="<?php echo $label->id ?>"><?php echo $label->label_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Format:
        <select name="format">
            <option value="blank"></option>
            <?php foreach ($formats as $format) : ?>
                <option value="<?php echo $format->id ?>"><?php echo $format->format_name ?></option>
            <?php endforeach; ?>
        </select>
        <br/>
        <input type="submit" value="Submit" />
    </div>

</form>
</body>
</html>