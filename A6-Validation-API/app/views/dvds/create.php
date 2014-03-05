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
    <?php if (Session::has('errors')) : ?>
        <p style="color: red;">
            <?php foreach ($errors->all() as $error) {
                echo $error . "<br/>";
            }
            ?>
        </p>
    <?php endif; ?>
    <div>
        DVD Title:
        <input type="text" name="dvd_title" value="<?php if (Input::old('dvd_title')) { echo Input::old('dvd_title'); }?>" />
    </div>

    <div>
        Genre:
        <select name="genre">
            <option></option>
            <?php foreach ($genres as $genre) : ?>
                <option value="<?php echo $genre->id ?>" <?php if (Input::old('genre') == $genre->id) { echo "selected"; }?>><?php echo $genre->genre_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Rating:
        <select name="rating">
            <option></option>
            <?php foreach ($ratings as $rating) : ?>
                <option value="<?php echo $rating->id ?>" <?php if (Input::old('rating') == $rating->id) { echo "selected"; }?>><?php echo $rating->rating_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Sound:
        <select name="sound">
            <option></option>
            <?php foreach ($sounds as $sound) : ?>
                <option value="<?php echo $sound->id ?>" <?php if (Input::old('sound') == $sound->id) { echo "selected"; }?>><?php echo $sound->sound_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Label:
        <select name="label">
            <option></option>
            <?php foreach ($labels as $label) : ?>
                <option value="<?php echo $label->id ?>" <?php if (Input::old('label') == $label->id) { echo "selected"; }?> ><?php echo $label->label_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        Format:
        <select name="format">
            <option></option>
            <?php foreach ($formats as $format) : ?>
                <option value="<?php echo $format->id ?>" <?php if (Input::old('format') == $format->id) { echo "selected"; }?> ><?php echo $format->format_name ?></option>
            <?php endforeach; ?>
        </select>
        <br/>
        <input type="submit" value="Submit" />
    </div>

</form>
</body>
</html>