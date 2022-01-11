<?php
include 'connect_crud.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM name_artist INNER JOIN artist_song ON artist_song.artist_id = name_artist.id_artist INNER JOIN genres ON genres.id_genre = artist_song.genre_id inner join streams on streams.id_streams=name_artist.id_artist where artist_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$name_song = $row['name_song'];
$genre_name = $row['genre_name'];
$streams_count= $row['streams_count'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $name_song = $_POST['name_song'];
    $id_genre = $_POST['genre_name'];
    $streams_count=$_POST['streams_count'];

    echo $id_genre;
    $sql = "update name_artist set name='$name'where id_artist=$id";
    $result = mysqli_query($con, $sql);

    $sql1 = "update artist_song set name_song='$name_song'where id_song=$id";
    $result = mysqli_query($con, $sql1);

    $sql2 = "update artist_song set genre_id='$id_genre' where artist_id=$id";
    $result = mysqli_query($con, $sql2);
    $sql3= "update streams set streams_count='$streams_count' where id_streams=$id";
    $result = mysqli_query($con, $sql3);
    if ($result) {
        // echo "data inserted successefylly";
        header("Location:display.php");
    } else {
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud Operations</title>

</head>

<body>
    <div class="continerr my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Artist name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Artist song</label>
                <input type="text" class="form-control" placeholder="Enter your song" name="name_song" autocomplete="off" value=<?php echo $name_song; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Artist Streams</label>
                <input type="text" class="form-control" placeholder="Enter your song" name="streams_count" autocomplete="off" value=<?php echo $streams_count; ?>>
            </div>
            <div>
                <label for="genres">Choose a genre:</label>
                <select id="genres" name="genre_name">
                    <option value="1"<?php if($genre_name=="HIP-HOP") { echo "selected"; } ?>>HIP-HOP</option>
                    <option value="2"<?php if($genre_name=="POP") { echo "selected"; } ?>>POP</option>
                    <option value="3"<?php if($genre_name=="R&B") { echo "selected"; } ?>>R&B</option>
                    <option value="4"<?php if($genre_name=="RAP") { echo "selected"; } ?>>RAP</option>
                    <option value="5"<?php if($genre_name=="JALE") { echo "selected"; } ?>>JALE</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>