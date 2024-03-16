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

    <div class="container p-5">
        <a href="<?= base_url('/'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title">Edit Employee Data</h4>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('/update'); ?>">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" value="<?= $employee['name']; ?>" name="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select class="form-control" name="gender">
                            <option disabled="disabled">Choose Gender</option>
                            <option value="Male" <?= $employee['gender'] == 'Male' ? 'selected' : '' ?> >Male</option>
                            <option value="Female" <?= $employee['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" value="<?= $employee['age']; ?>" name="age" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">First Vaccine Status</label>
                        <select class="form-control" name="first_vaccine">
                            <option disabled="disabled">Choose Vaccine Status</option>
                            <option value="not yet" <?= $employee['first_vaccine'] == 'not yet' ? 'selected' : '' ?>>Not Yet</option>
                            <option value="already" <?= $employee['first_vaccine'] == 'already' ? 'selected' : '' ?>>Already</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Second Vaccine Status</label>
                        <select class="form-control" name="second_vaccine">
                            <option disabled="disabled">Choose Vaccine Status</option>
                            <option value="not yet" <?= $employee['second_vaccine'] == 'not yet' ? 'selected' : '' ?>>Not Yet</option>
                            <option value="already" <?= $employee['second_vaccine'] == 'not yet' ? 'selected' : '' ?>>Already</option>
                        </select>
                    </div>
    
                    <input type="hidden" value="<?= $employee['id']; ?>" name="id">
                    <div class="text-right">
                        <button class="btn btn-success">Update</button>
                    </div>
                </form>
    
            </div>
        </div>
    </div>
</body>
</html>