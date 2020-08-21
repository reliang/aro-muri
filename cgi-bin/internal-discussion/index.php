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

        <div class="page-grid">
            <img class="header-bg" src="/images/title-bg.png" />
            <img class="header-neural1" src="/images/child-graphic-02.png" />
            <img class="header-neural2" src="/images/child-graphic-13-gradient.png" />
            <img class="header-shield" src="/images/logo-final.png" />
            <a class="header-title" href="/index.html"><img src="/images/title-block-no-bg.png" /></a>
            <div class="nav-container">
                <nav>
                    <ul>
                        <li><a href="/overview.html">Project Overview</a></li>
                        <li><a href="/people.html">People</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Paper</a></li>
                        <li><a href="/events.html">Meetings/ Events</a></li>
                        <li><a href="/cgi-bin/reading-group.html">Reading Group</a></li>
                        <li><a href="/cgi-bin/internal-discussion" class="nav-selected display-4">Internal<br />Discussion</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <section>
                <h1 class="display-4">Internal Discussion</h1>
                <hr class="mb-4" />

                <form method="POST" action="chat.php" class="my-5">
                    <div class="form-group">
                        <?php
                        //display current user name
                        echo "<label>You are logged in as: <i>" . $_SERVER['REMOTE_USER'] . "</i></label>";
                        //create a user model with username
                        //when send is clicked, store the word into db
                        ?>
                        <textarea
                            name="chatbody"
                            type="text"
                            class="form-control"
                            placeholder="How do you think of this project...."
                            rows="4"
                            style="border-color: #a7a7a7;"
                        ></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-sm">Send Chat</button>
                </form>

                <div class="card mx-auto mb-4" style="width: 100%;">
                    <h6 class="card-header mb-0 align-text-bottom">
                        <b class="font-weight-bold"> student1 </b><small class="text-muted"> 08/15 </small>
                        <a class="close text-muted"><small>x</small></a>
                    </h6>
                    <div class="card-body">
                        <p class="card-text">
                            Chat1
                        </p>
                    </div>
                </div>
                <div class="card mx-auto mb-4" style="width: 100%;">
                    <h6 class="card-header mb-0 align-text-bottom">
                        <b class="font-weight-bold"> student2 </b><small class="text-muted"> 08/07 </small>
                        <a class="close text-muted"><small>x</small></a>
                    </h6>
                    <div class="card-body">
                        <p class="card-text">
                            Chat2
                        </p>
                    </div>
                </div>
                <div class="card mx-auto mb-4" style="width: 100%;">
                    <h6 class="card-header mb-0 align-text-bottom">
                        <b class="font-weight-bold"> student3 </b><small class="text-muted"> 08/05 </small>
                        <a class="close text-muted"><small>x</small></a>
                    </h6>
                    <div class="card-body">
                        <p class="card-text">
                            Chat3
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="lead">
                            University of Pennsylvania<br />
                            3330 Walnut Street<br />
                            Levine Hall Room 302<br />
                            Philadelphia, PA 19104
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="lead">
                            (215) 898-8543<br />
                            Contact: mailto:wng@cis.upenn.edu
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="lead">
                            Copyright &#169; 2020 PRECISE<br />
                            All Rights Reserved.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <img style="width: 100%; max-width: 700px;" src="/images/Logos-white.png" />
                </div>
            </div>
        </footer>
    </body>
</html>
