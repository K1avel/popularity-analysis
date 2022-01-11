<?php
include 'connect_crud.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5"><a href="crud.php" class="text-light">Add artist </a>
      <div class="container" style>
        <button class="btn btn-primary my-5 text-right"><a href="lucrare_an.php" class="text-light">Home </a>
  
        </button>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">S1 no</th>
              <th scope="col">Arstist Name</th>
              <th scope="col">Artist Song</th>
              <th scope="col">Artist Genre</th>
              <th scope="col">Number of Streams</th>
              <th scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM name_artist INNER JOIN artist_song ON artist_song.artist_id = name_artist.id_artist INNER JOIN genres ON genres.id_genre = artist_song.genre_id inner join streams on streams.id_streams=name_artist.id_artist ORDER BY
            `name_artist`.`id_artist` ASC    ";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id_artist = $row['id_artist'];
                $name = $row['name'];
                $name_song = $row['name_song'];
                $genre_name = $row['genre_name'];
                $streams_count=$row['streams_count'];
                echo ' <tr>
                  <th scope="row">' . $id_artist . '</th>
                  <td>' . $name . '</td>
                  <td>' . $name_song . '</td>
                  <td>' . $genre_name . '</td>
                  <td>' . $streams_count . '</td>
                  <td>
                  <button class="btn btn-primary"><a href="update.php? updateid=' . $id_artist . '" 
                  class="text-light">Update</a></button>
                  <button class="btn btn-danger"><a href="delete.php? deleteid=' . $id_artist . '" 
                  class="text-light">Delete</a></button>
              </td>
                </tr>';
              }
            }
            ?>

          </tbody>
        </table>
      </div>
</body>

</html>