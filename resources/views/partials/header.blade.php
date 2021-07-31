<header>

	<nav class="navbar">

		<div class="container">

			<a class="navbar-brand" href="{{ url('/') }}">Pequi Mecânico</a>

			<div class="menu-toggle">
				<i class="fas fa-bars"></i>
			</div>

			<ul class="navbar-nav navbar-pages">

				<li class="nav-item active">
					<a class="nav-link" href="{{ url('/') }}">Home</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link href="#">Equipes</a>
					<ul class="dropdown-menu">
						<li><a class="nav-link" href="{{ url('equipes/@home') }}">@HOME</a></li>
						<li><a class="nav-link" href="{{ url('equipes/humanoide') }}">Humanóide</a></li>
						<li><a class="nav-link" href="{{ url('equipes/sek') }}">SEK</a></li>
						<li><a class="nav-link" href="{{ url('equipes/vsss') }}">VSSS</a></li>
					</ul>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="{{ url('publications') }}">Publicações</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#contato">Contato</a>
				</li>

			</ul>

		</div>

	</nav>

</header>