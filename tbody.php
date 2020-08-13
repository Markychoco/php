<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
        background-color: khaki;
    }
    .navbar-brand{
        background-color:brown;
    }
.nav-item{
        background-color: khaki;
    }
#navbarCollapse{
        background-color: khaki;
    }
.navbar-toggler{
        background-color: khaki;
    }
     table {
            width: 1345px;
            border-collapse: ;
        }
        table, th, td {
            border: 20px solid aquamarine;
        }
        th, td {
            padding: 100px;
            text-align: left;
        }
    a{
font-family:Monotype Corsiva;
font-size:21px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <h1><a href="#" class="navbar-brand">🇯Jungle</a></h1>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Inbox</a>
                        <a href="#" class="dropdown-item">Drafts</a>
                        <a href="#" class="dropdown-item">Sent Items</a>
                        <div class="dropdown-divider"></div>
                        <a href="#"class="dropdown-item">Trash</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Reports</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#"class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
                            
<title>HTML Table with a Header, Footer and Body</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Pure Red Wine Collections</th>
                <th><button onclick="window.location.href='file:///C:/Users/Charles/Desktop/HTML%20Folder/skechers.html';" class="button button4"><img src="https://www.wine.com/product/images/w_767,c_fit,q_auto:good,fl_progressive/nsxzznnyoglp7fzunx3i.jpg"width="100%" height="300px"></button></th>
                <td>Ksh 3,000</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dirt Bikes</td>
                <th><img src="https://image.freepik.com/free-photo/green-black-sport-bike-cross-country-white-background-racing-sportbike-modern-supercross-motocross-dirt-bike_101266-1285.jpg"width="100%" height="300px"></th>
                <td>Ksh 2,000</td>
            </tr>
            <tr>
                <td>Furniture</td>
                <th><img src="https://i0.wp.com/www.victoriafurnitures.com/wp-content/uploads/Category1.png?resize=960%2C560" width="120%" height="300px"></th>
                <td>10,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>Watches</td>
                <th><img src="https://i.pinimg.com/236x/f1/0e/8f/f10e8f53fd8a8683f2424c7df7220453--cute-men-the-spencer.jpg" width="40%" height="200px"></th>
                <td>12,000</td>
            </tr>
        </tfoot>
    </table>
</body>
</html