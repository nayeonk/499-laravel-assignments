<!doctype html>
<html>
<head>
    <title>DVDs</title>
    <style>
        tr:nth-child(odd)		{ background-color:#eee; }
        tr:nth-child(even)		{ background-color:#fff; }
    </style>
</head>
<body>

<h1>DVD Search Results</h1>

<?php if($dvds == NULL) :?>
    <p>No results found.</p>
<?php dd(); endif;?>

<table>
    <tr>
        <th>Title</th>
        <th>Rating</th>
        <th>Genre</th>
        <th>Label</th>
        <th>Sound</th>
        <th>Format</th>
        <th>Release Date</th>
    </tr>
<?php foreach ($dvds as $dvd) : ?>
    <tr>
        <td><?php echo $dvd->title; ?></td>
        <td><?php echo $dvd->rating->rating_name; ?></td>
        <td><?php echo $dvd->genre->genre_name; ?></td>
        <td><?php echo $dvd->label->label_name; ?></td>
        <td><?php echo $dvd->sound->sound_name; ?></td>
        <td><?php echo $dvd->format->format_name; ?></td>
        <td><?php echo $dvd->release_date; ?></td>
    </tr>
<?php endforeach ?>

</table>


</body>
</html>