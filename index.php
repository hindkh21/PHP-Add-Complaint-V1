<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PHP CRUD using Bootstrap Modal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="complaintaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ADD Complaint Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="insertcode.php" method="POST">
            <div class="form-group">
              <label>id_reclamation</label></label>
              <input type="text" name="id" class="form-control" placeholder="Enter the id of the complaint">
            </div>
            <div class="form-group">
              <label>titre</label></label>
              <input type="text" name="titre" class="form-control" placeholder="Enter the title">
            </div>
            <div class="form-group">
              <label>description</label></label>
              <input type="textarea" name="description" class="form-control" placeholder="Enter the description">
            </div>
            <div class="form-group">
              <label>role</label></label>
              <input type="textarea" name="role" class="form-control" placeholder="Enter the description">
            </div>
            <div class="form-group">
              <label>date</label></label>
              <input type="date" name="created" class="form-control" placeholder="Enter the description">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">validate</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Savedata</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="jumbotron">
      <div class="card">
        <h2>
          PHP CRUD Bootstrap Modal
        </h2>
      </div>
      <div class="card">
        <div class="card-body">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#complaintaddmodal">
            ADD DATA </button>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>

</html>