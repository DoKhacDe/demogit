<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .top-left{
            float:left;
            padding-left: 30px;
        }
        .top-right{
            text-align: right;
            padding-right: 30px;
            padding-top: 10px;
        }
        .top{
            width: 100%;
            height: 70px;
            background: #aaffff;
        }
        li{
            list-style-type: none;
        }
        li a{
            text-decoration: none;
        }
        .content {
            width: 100%;
            height: auto;
        }
        .content .menu-left{
            width: 20%;
            float: left;
        }
        .content .menu-left ul li a{
            text-align: center;
        }
        .content-right{
            text-align: center;
            float: left;
            width: 80%;
            height: auto;
            background: #e0fcee;
        }
    </style>
</head>
<body>
    <div class="container-fluied">
        <div class="row">
            <div class="top">
                <div class="top-left">
                    <h2>Welcome Profile</h2>
                    <p>Hello {{ $LoggedUserInfo['name'] }}</p>
                </div>
                <div class="top-right">
                    <span>{{ $LoggedUserInfo['name'] }}</span>
                    <a href="{{ route('auth.logout') }}">Logout</a>
                </div>
            </div>         
        </div> 
    </div>
    <div class="container-fluied">
        <div class="content">
            <div class="menu-left">         
                <ul class="list-group list-group-flush">
                    <li><a class="list-group-item" href="/admin/dashboard">Dashboard</a></li>
                    <li><a class="list-group-item" href="/admin/settings">Settings</a></li>
                    <li><a class="list-group-item" href="/admin/profile">Profile</a></li>
                    <li><a class="list-group-item" href="/admin/staff">Staff</a></li>
                </ul>
            </div>
            <div class="content-right">
           
           
           
            </div>
        </div>
    </div>
    
    </div>
</body>
</html>