<?php
	include_once 'mysqli_connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ARO-MURI</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!--Bootstrap-->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous"
        />

        <!--Custom-->
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>

    <style>
        /* The actual timeline (the vertical ruler) */
        nav::after {
            bottom: 2rem;
        }
    </style>

    <body>
        <div class="d-block d-lg-none">
            <nav class="mobile-menu navbar navbar-dark fixed-top">
                <a class="navbar-brand" href="/index.html">
                    <img src="/images/header-mobile.png" style="height: 20px; width: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/overview.html" class="nav-selected display-4">Project Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/people.html">People</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/projects.html">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/paper.html">Paper</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events.html">Meetings/Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/positions.html">Open Positions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cgi-bin/reading-group.html">Reading Group</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/cgi-bin/internal-discussion">Internal Discussion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="page-grid">
            <img class="header-bg" src="/images/title-bg.png" />
            <img class="header-neural1" src="/images/child-graphic-02.png" />
            <img class="header-neural2" src="/images/child-graphic-13-gradient.png" />
            <img class="header-numbers" src="/images/number-graphic.png" />
            <img class="header-shield" src="/images/logo-final.png" />
            <span class="header-title d-none d-lg-block"><a href="/index.html"><img src="/images/title-block-no-bg.png" /></a></span>
            <span class="header-title d-block d-lg-none"><a href="/index.html"><img src="/images/header-title.png" /></a></span>
            <div class="d-none d-lg-block nav-container">
                <nav>
                    <ul>
                        <li><a href="/overview.html">Project Overview</a></li>
                        <li><a href="/people.html">People</a></li>
                        <li><a href="/projects.html">Projects</a></li>
                        <li><a href="/paper.html">Paper</a></li>
                        <li><a href="/events.html">Meetings/ Events</a></li>
                        <li><a href="/positions.html">Open Positions</a></li>
                        <li><a href="/cgi-bin/reading-group.html">Reading Group</a></li>
                        <li><a href="/cgi-bin/internal-discussion" class="nav-selected display-4">Internal<br />Discussion</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <section>
                <h1 class="display-4">Internal Discussion</h1>
                <hr class="mb-4" />

                <form method="POST" action="insertChat.php" class="my-5">
                    <div class="form-group">  
                        <textarea
                            name="chatbody"
                            type="text"
                            class="form-control"
                            rows="4"
                            style="border-color: #a7a7a7;"
                        ></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-sm">Send</button>
                </form>

                <?php
                    $sql = "SELECT * FROM chats;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                $items[] = $row;
                            }
                            $items = array_reverse($items ,true);
                            
                            foreach($items as $item){
                                $name = $item['user_first'] . " " . $item['user_last'];
                                if (!$item['user_first'] || !$item['user_last']) {
                                    $name = $item['pennKey'];
                                }
                                $date = new DateTime($item['last_updated']);
                                echo 
                            '<form method = "post" action = "deleteChat.php">
                            <div class="card mx-auto mb-4" style="width: 100%;">
                            <h6 class="card-header mb-0 align-text-bottom">
                            <b class="font-weight-bold">' . $name . '&nbsp&nbsp;</b><small class="text-muted">' . date_format($date, 'm/d/Y  g:i A') . '</small> 
                                    <input class="closeBtn close text-muted" name="delete" type="submit"id="delete"value="x">
                                    <input type="hidden" name="chat_id" value='.$item["chat_id"].'></input>
                                    <input type="hidden" name="pennID" value='.$item["pennID"].'> </input>
                                    </h6>
                                <div class="card-body"> 
                                <p class="card-text">' .
                                    $item["chat"] .
                                    '</p>
                                </div>
                            </div>
                            </form>';
                            }
                        }
                ?>
                <!-- card placeholder-->
                <!-- <div class="card mx-auto mb-4" style="width: 100%;">
                    <h6 class="card-header mb-0 align-text-bottom">
                        <b class="font-weight-bold"> Admin </b><small class="text-muted"> 2020-08-20 11:01:10 </small>
                        <a class="close text-muted"><small>x</small></a>
                    </h6>
                    <div class="card-body">
                        <p class="card-text">
                            Leave a comment here!
                        </p>
                    </div>
                </div> -->
            </section>
        </div>

        <footer>
            <div class="container">
                <div class="mb-5">
                    <p class="mb-0" style="font-size:1.5rem;">WE ARE HIRING!</p>
                    <p style="line-height: 1;">
                        Please contact Professor <a href="mailto:lee@cis.upenn.edu" target="_blank">Insup Lee</a> if you are interested in collaborating on this project.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="lead">
                            wng@cis.upenn.edu<br />
                            (215) 898-8543
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="lead">
                            University of Pennsylvania<br />
                            3330 Walnut Street<br />
                            Philadelphia, PA 19104
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p class="lead">
                            Copyright &#169; 2020 PRECISE<br />
                            All Rights Reserved
                        </p>
                    </div>
                </div>
                <div class="row">
                    <img src="/images/Logos-white.png" />
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
