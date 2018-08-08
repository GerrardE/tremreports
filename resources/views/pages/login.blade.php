@extends('layouts.app')
@section('content')
    @include('inc.navbar')
	
        <div class="login" id="login">
                <h1>SPIRITUAL REPORT</h2>
                <hr>
               <form class="form-signin" method="POST" action="/custom/login">
                        {{ csrf_field() }}
						
						<div class="form-group">
                        <label for="username" class="control-label">USERNAME</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus/>
							
						@if (session('error'))
							<tr>
								<td><strong>{{ session('error') }}</strong></td>
							</tr>
						@endif	
							
						</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="control-label">PASSWORD</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="password" type="password" class="form-control" placeholder="Password" required/>
                        </div>
                    </div>

                    <div class="input-group">
                        <button type="submit" class="btn btn-block btn-large">LOGIN<span><i class="glyphicon glyphicon-send"></i></span></button>
                    </div>
                    
                </form>
        </div>
@endsection