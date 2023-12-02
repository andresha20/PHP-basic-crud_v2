<?php
include "PHP/connection.php";

$data = $connect->query("SELECT * FROM library");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="row vh-100 justify-content-center">
    <div class="col-auto p-5 border">
      <h1>Formulario Web ll</h1>
      <form action="./PHP/register.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Author</label>
          <input type="text" class="form-control" name="author">
        </div>
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
    <div class="container p-5">
      <h1 class="text-white text-center">Data</h1>
      <table class="table table-success">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Author</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col" colspan="2">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $i) { ?>
              <form action="./PHP/edit.php">
                <tr>
                  <input class="noneD" type="text" value="<?php echo $i['id']; ?>" name="editId">
                  <th scope="row">
                    <?php echo $i['id']; ?>
                  </th>
                  <td><input class="form-control" type="text" value="<?php echo $i['author']; ?>" name='editAuthor'></td>
                  <td><input class="form-control" type="text" value="<?php $title = $i['title'];
                  echo $title; ?>" name='edittitle'></td>
                  <td><textarea class="form-control" name='editDescription'><?php $description = $i['description'];
                  echo $description; ?></textarea></td>
                  <td><button type="submit" class="btn btn-primary">Edit</button></td>
                  <td><a class="btn btn-danger" href="PHP/delete.php?id=<?php echo $i['id']; ?>"
                      class="btn btn-danger">Delete</a></td>
                </tr>
              </form>
              <?php } ?>
          </tbody>
        </table>
    </div>
    <script src="js/bootstrap.js"></script>
  </body>
</html>