<?php
include 'connect_crud.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $name_song = $_POST['name_song'];
  $id_genre = $_POST['genre_id'];
  $streams_count = $_POST['streams_count'];

  $sql = "insert into name_artist(name)
  values('$name')";
  $result = mysqli_query($con, $sql);
  $artist_id=$con->insert_id;

  $sql2 = "insert into genres(genre_name)
  values('$id_genre')";
  $result = mysqli_query($con, $sql2);
  $genre_id=$con->insert_id;
  
  $sql1 = "insert into artist_song(name_song,artist_id,genre_id)values('$name_song','$artist_id','$genre_id')";
  $result = mysqli_query($con, $sql1);

  $sql3="insert into streams (streams_count) values ('$streams_count')";
  $result = mysqli_query($con, $sql3);
  $id_streams=$con->insert_id;
  
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
        <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Artist song</label>
        <input type="text" class="form-control" placeholder="Enter your song" name="name_song" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Artist Genre</label>
        <input type="text" class="form-control" placeholder="Enter your genre" name="genre_id" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Artist Streams</label>
        <input type="text" class="form-control" placeholder="Enter your streams" name="streams_count" required>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>