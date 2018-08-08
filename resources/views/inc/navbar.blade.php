    
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="brand-img">
                    <img src="images/tremlogo2.jpg">
                    <a class="navbar-brand" href="/">THE REDEEMED<br>EVANGELICAL MISSION</a>
                </div>  
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://www.trem.org">HOME</a></li>
                    <li><a href="#">LOGOUT</a></li>
                    <!-- @if (auth::check())
                        <li id="logout"><a>
                            <form  method="post" action="/logout">
                            {{ csrf_field() }}
                            <button>LOGOUT</button>
                            </form>
                            </a>
                        </li>
                    @endif -->
				</ul>
            </div><!--/.nav-collapse -->
    </div>
</nav>