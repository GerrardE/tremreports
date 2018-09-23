<ul class="nav nav-pills nav-justified" role="tablist">
    <li class="dropdown" role="presentation">
        <a class="dropdown-toggle" data-toggle="dropdown" class="pointer">ENTRIES<span><i class="glyphicon glyphicon-chevron-down"></i></span></a>
        <ul class="dropdown-menu">
            <li><a href="/monthly">MONTHLY</a></li>
            <li><a href="/weekly">WEEKLY</a></li>
            <li><a href="/gtwelve">G12</a></li>
        </ul>
    </li>

    <li class="dropdown" role="presentation">
        <a class="dropdown-toggle" data-toggle="dropdown" class="pointer">REPORTS<span><i class="glyphicon glyphicon-chevron-down"></i></span></a>
        <ul class="dropdown-menu">
           @if (auth::user()->role == 6)
           <li><a href="/synodr">SYNOD REPORT</a></li>
           @endif 
          
        </ul>
    </li>

    <li role="presentation"><a href="/downloads">DOWNLOADS</a></li>
    <li class="dropdown" class="pointer" role="presentation">
        <a class="dropdown-toggle" data-toggle="dropdown">SETTINGS<span><i class="glyphicon glyphicon-chevron-down"></i></span></a>
        <ul class="dropdown-menu">
            @if (auth::user()->role == 6)
            <li><a href="/czone">ZONE</a></li>
            <li><a href="/cbranch">BRANCH</a></li>
            <li><a href="/cevent">EVENT</a></li>
            <li><a href="/cgtwelve">G12</a></li>
            <li><a href="/cuser">USER</a></li>
            @endif 
            <li><a href="/cdownloads">UPLOAD</a></li>                    
        </ul>
    </li>
</ul>
<div class="">@include('inc.messages')</div>