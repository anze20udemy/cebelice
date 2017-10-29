<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.php">Čebelarstvo Zupanek</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}">Domov</a>
                </li>
                <!--                <li>
                                    <a href="izdelki.php">Izdelki</a>
                                </li>-->
                <li>
                    <a href="{{ url('../ste_vedeli') }}">Ste vedeli</a>
                </li>
                <li>
                    <a href="{{ url('../izdelek/cvetlicni-med-900g') }}">izdelki</a>
                </li>

                <li>
                    <a href="{{ url('../nasveti') }}">nasveti</a>
                </li>
                <li>
                    <a href="{{ url('../kontakt') }}">kontakt</a>
                </li>
                <li>
                    <a href="{{ url('../admin') }}"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                </li>



            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>