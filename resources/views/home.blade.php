<?php
use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TB FORUM - HOME</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
       
    </head>

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom"><h3>TB FORUM</h3></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Random</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Meme</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Film</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <h3>Random</h3>
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                @foreach($dbs as $key => $data)
                <div class="container" style="margin-top: 2%;" id="{{ $data->id }}">
                    <div class="card" style="width: 35rem; float:left; margin-right:2%; margin-bottom:2%;">
                        <h5 class="card-title">{{ $data->username }}</h5>
                        <img src="{{ $data->link }}" class="card-img-top" alt="..." style="object-fit:cover;">


                        <a href="/home/like?idpost={{ $data->id }}" style="float: left;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16" style="margin-top: 2%; margin-left:2%; float:left;">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                        </a> 
                

                        <?php
                       $forlik = DB::table('tbforumlikfunc')->where('idpost', '=', $data->id)->sum('likestatus');
                       echo '<p>'.$forlik.' likes</p>';
                       ?>
                        <div class="card-body">
                          <p class="card-text">{{ $data->descbio }}</p>
                        </div>
                      </div>
                      @endforeach
                    
                      </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://raw.githubusercontent.com/StartBootstrap/startbootstrap-simple-sidebar/master/dist/js/scripts.js"></script>
    </body>
</html>
