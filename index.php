<?php
$con = mysqli_connect("localhost", "root", "", "belajar");
$query = mysqli_query($con, "SELECT * FROM user LIMIT 10");

$user = [];
while ($data = mysqli_fetch_assoc($query)) {
    $user[] = $data;
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="search">
                    <input placeholder="Pencarian..." type="text" class="keyword">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search icon-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="table-responsive-md">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Company</th>
                                <th scope="col">Setting</th>
                            </tr>
                        </thead>
                        <tbody class="container-table">
                            <?php
                            $sort = 1;
                            foreach ($user  as $u) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $sort ?></th>
                                    <td><?= $u["nama"] ?></td>
                                    <td><?= $u["company"] ?></td>
                                    <td>
                                        <button class="btn-style detail">detail</button>
                                        <button class="btn-style hapus">hapus</button>
                                        <button class="btn-style update">update</button>
                                    </td>
                                </tr>

                            <?php
                                $sort++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>













    <script src="jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>