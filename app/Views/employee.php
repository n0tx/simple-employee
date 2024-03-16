<!doctype html>
<html lang="en">
 
<head>
    <title><?= $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="">Simple Employee Management</a>
        </div>
    </nav>

    <div class="container pt-5">
        <div class="text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Add New</button>
        </div>
 
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title" style="text-align: center;">Employee List</h4>
            </div>
 
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>First Vaccine Status</th>
                                <th>Second Vaccine Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($employees as $employee) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $employee['name']; ?></td>
                                    <td><?= $employee['gender']; ?></td>
                                    <td><?= $employee['age']; ?></td>
                                    <td><?= $employee['first_vaccine']; ?></td>
                                    <td><?= $employee['second_vaccine']; ?></td>
                                    <td>
                                        <a href="<?= base_url('/edit/' . $employee['id']); ?>" class="btn btn-success" data-target="#editModal">
                                            Edit</a>
                                        <a href="<?= base_url('/delete/' . $employee['id']); ?>" onclick="javascript:return confirm('Are you sure want to delete employee data?')" class="btn btn-danger">
                                            Delete</a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
 
                    </table>
                </div>
            </div>
        </div>
    </div>
 
    <!--   Modal Tambah Data-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('/add'); ?>">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-form-label">Gender</label>
                            <select class="form-control" name="gender">
                                <option selected="true" disabled="disabled">Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="age" class="col-form-label">Age</label>
                            <input type="text" class="form-control" id="age" name="age">
                        </div>
                        <div class="form-group">
                            <label for="first_vaccine" class="col-form-label">First Vaccine Status</label>
                            <select class="form-control" name="first_vaccine">
                                <option selected="true" disabled="disabled">Choose Vaccine Status</option>
                                <option value="not yet">Not Yet</option>
                                <option value="already">Already</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="second_vaccine" class="col-form-label">Second Vaccine Status</label>
                            <select class="form-control" name="second_vaccine">
                            <option selected="true" disabled="disabled">Choose Vaccine Status</option>
                                <option value="not yet">Not Yet</option>
                                <option value="already">Already</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
 
    </html>