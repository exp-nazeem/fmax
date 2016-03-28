		<div class="tickerbg">
			<div class="container">
				<div class="ticker">
					<a href="<?php echo URL::to('/'); ?>/news/1">
						<strong>News:</strong>
						<ul>
							<?php
								$news = NewsModel::where('status', '=', 1)->take(5)->orderBy('priority', 'ASC')->get();
								foreach ($news as $item) {
									echo "<li>".$item->title."</li>";
								}
							?>
							...
						</ul>
					</a>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" <?php echo (Request::path() != "/") ? 'style="background:#353535;"' : "" ?>>
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo URL::to('/'); ?>"><img src="<?php echo URL::to('/'); ?>/assets/images/logo.png"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a <?php echo (Request::path() == "/") ? 'class="active"' : "" ?> href="<?php echo URL::to('/'); ?>"> HOME</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle <?php echo in_array(Request::path(), array('cpg', 'vansales', 'pharma', 'retail', 'audit')) ? 'active' : '' ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">SOLUTIONS <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo URL::to('/'); ?>/cpg">FieldMax CPG</a></li>
								<li><a href="<?php echo URL::to('/'); ?>/vansales">FieldMax Van Sales</a></li>
								<li><a href="<?php echo URL::to('/'); ?>/pharma">FieldMax Pharma</a></li>
								<li><a href="<?php echo URL::to('/'); ?>/retail">FieldMax Retail</a></li>
								<li><a href="<?php echo URL::to('/'); ?>/audit">FieldMax Audit</a></li>
							</ul>
						</li>
						<!-- <li><a href="news.html">BLOG</a></li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle <?php echo in_array(Request::path(), array('downloads', 'faq', 'industry')) ? 'active' : '' ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">RESOURCES <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo URL::to('/'); ?>/downloads">Downloads</a></li>
								<li><a href="<?php echo URL::to('/'); ?>/faq">FAQ</a></li>
								<li><a href="<?php echo URL::to('/'); ?>/industry">Industry Recognition</a></li>
							</ul>
						</li>
						<li><a href="<?php echo URL::to('/'); ?>/news/1" <?php echo strpos(Request::path(), "news") !== false  ? 'class="active"' : "" ?>> NEWS</a></li>
						<li><a href="<?php echo URL::to('/'); ?>/about" <?php echo (Request::path() == "about") ? 'class="active"' : "" ?>> ABOUT US</a></li>
						
						<li><a class="write-to-us" href="<?php echo URL::to('/'); ?>/contact" style="color: #fff; font-weight: 700;background: #EF8E04;border-radius: 5px;padding: 7px 15px;margin-top: 8px; margin-left:10px;: "> WRITE TO US</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
