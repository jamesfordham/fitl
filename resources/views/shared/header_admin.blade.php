<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Briars Team Selections - ADMIN</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main_menu">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('grades') }}">Teams <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Match Card</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">Unavaliable List</a></li>
                <li><a href="{{ url('admin/users') }}">User Mgr</a></li>
            </ul>
            @include('shared.user_actions')
            @include('shared.player_search_form')
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>