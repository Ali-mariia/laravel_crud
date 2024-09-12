<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Student Update Form">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Student Update Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Icons -->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="container mt-5">
        <!-- Form -->
        <form action="{{ url('update_data', $record->id) }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Update Form</h2>
                </div>
                <div class="card-body">
                    <!-- Student Name -->
                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input class="form-control" type="text" name="first_name" id="first_name" value="{{ $record->studentfirstname }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input class="form-control" type="text" name="last_name" id="last_name" value="{{ $record->studentlastname }}">
                            </div>
                        </div>
                    </div>

                    <!-- Guardian Name -->
                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="gfirst_name">Guardian First Name</label>
                                <input class="form-control" type="text" name="gfirst_name" id="gfirst_name" value="{{ $record->Guradianfirstname }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="glast_name">Guardian Last Name</label>
                                <input class="form-control" type="text" name="glast_name" id="glast_name" value="{{ $record->Guradianlastname }}">
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="form-group mb-4">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="address" id="address" value="{{ $record->address }}">
                    </div>

                    <!-- Religion -->
                    <div class="form-group mb-4">
                        <label for="religion">Religion</label>
                        <input class="form-control" type="text" name="religion" id="religion" value="{{ $record->religion }}">
                    </div>

                    <!-- Nationality -->
                    <div class="form-group mb-4">
                        <label for="nationality">Nationality</label>
                        <input class="form-control" type="text" name="nationality" id="nationality" value="{{ $record->nationality }}">
                    </div>

                    <!-- Date of Birth -->
                    <div class="form-group mb-4">
                        <label for="dateofbirth">Date of Birth</label>
                        <input class="form-control" type="text" name="dateofbirth" id="dateofbirth" value="{{ $record->DOB }}">
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-4">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{ $record->Email }}">
                    </div>

                    <!-- Phone -->
                    <div class="form-group mb-4">
                        <label for="phone">Phone Number</label>
                        <input class="form-control" type="text" name="phone" id="phone" value="{{ $record->phone }}">
                    </div>

                    <!-- Gender -->
                    <div class="form-group mb-4">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="M" {{ $record->gender == 'M' ? 'selected' : 'Male' }}>Male</option>
                            <option value="F" {{ $record->gender == 'F' ? 'selected' : 'Female' }}>Female</option>
                            <option value="O" {{ $record->gender == 'O' ? 'selected' : 'others' }}>Other</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn btn-danger btn-lg" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>
</body>

</html>
