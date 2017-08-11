<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<?php echo anchor(base_url(), 'Website', 'class="navbar-brand"'); ?>

		</div>

		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">

				<?php
					$navs = array(
						array('title' => 'HOME', 'url' => 'Home')
						);

					foreach ($navs as $nav)
					{
						echo $this->uri->segment(1) === $nav['url'] ? "<li class='active'>" : "<li>";
						echo anchor($nav['url'], $nav['title']);
						echo "</li>";
					}
				?>

			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Accounts <span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a href="#">Login</a></li>
						<li><a href="#">Register</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- start of container -->

