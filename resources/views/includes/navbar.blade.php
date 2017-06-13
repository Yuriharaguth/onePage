	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Kolus</span>OnePage</a>
				@if(Auth::check())
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
							<use xlink:href="#stroked-male-user"></use></svg> User  {{Auth::user()->name}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile  {{Auth::user()->name}}</a></li>
							<li><a href="{{url('/auth/logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>     
					</li>
				</ul>
				@else
					<p><a href="{{url('/auth/login')}}">Efetuar Login</a></p>
				@endif
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{{ route('header.index') }}">
				<span class="glyphicon glyphicon-chevron-up"></span>Topo</a></li>
			<li class="active"><a href="{{ route('contato.index') }}">
				<span class="glyphicon glyphicon-phone-alt"></span>Contato</a></li>
			<li class="active"><a href="{{ route('apresentacao.index') }}">
				<span class="glyphicon glyphicon-asterisk"></span>Apresentação</a></li>
			<li class="active"><a href="{{ route('servico.index') }}">
				<span class="glyphicon glyphicon-th-large"></span>Serviços</a></li>
			<li class="active"><a href="{{ route('servicosimg.index') }}">
				<span class="glyphicon glyphicon-th"></span>Serviços</a></li>
		</ul>
	</div><!--/.sidebar-->