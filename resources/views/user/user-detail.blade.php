<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="bg-light">
    <div class="alert alert-success" role="alert">
        LaravelCorner : User Management System
    </div>
    <div class="container">


        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                        <div class="flex-grow-1 me-3">
                            <input type="text" class="form-control form-control-md" placeholder="Search User"
                                aria-label="Search User">
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary">Add User</button>
                            <button type="button" class="btn btn-secondary">Export</button>
                            <button type="button" class="btn btn-info">Import</button>
                            <button type="button" class="btn btn-dark">Print</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">

                </div>
                <table class="table table-success table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">DateOfBirth</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            <th scope="col">Toggler</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lutfia</td>
                            <td>Ubwa</td>
                            <td>2002-02-02</td>
                            <td>Female</td>
                            <td>Active</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-danger">View</button>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-success">Delete</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary">ChangeStatus</button>

                            </td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Asha</td>
                            <td>Zahor</td>
                            <td>2003-01-01</td>
                            <td>Female</td>
                            <td>Inactive</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-danger">View</button>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-success">Delete</button>

                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary">ChangeStatus</button>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ame</td>
                            <td>Ali</td>
                            <td>2009-09-09</td>
                            <td>Male</td>
                            <td>Inactive</td>

                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-danger">View</button>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-success">Delete</button>

                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary">ChangeStatus</button>

                            </td>
                        </tr>
                    </tbody>
                </table>





            </div>
        </div>
    </div>

    <br>


    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <script src="javascriptfile.js"></script> -->


</body>

</html>