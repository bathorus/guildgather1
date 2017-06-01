@extends('layouts.main')

@section('description')
	<meta name="description" content="Update with the hottest news around the guild virtual world in GuildGather.">
@endsection

@section('title')
	Article | GuildGather
@endsection

@section('content')
<section id="article-page">
	<div class="container-fluid">
		<div class="row">
			<div class="featured-article-wrapper">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol> <!-- /carousel-indicators -->

						<div class="carousel-inner">
							<div class="item active">
								<a href="#">
									<div class="inner-shadow">
										<img src="http://placehold.it/1366x500" alt="">
										<h1>asdasdasdas</h1>
										<p>asdasdasdasd</p>
									</div> <!-- /inner-shadow -->
								</a>
							</div> <!-- /item -->
						</div> <!-- /carousel-inner -->

						<a href="#slider-carousel" class="left control-carousel" data-slide="prev">
							<i class="fa fa-caret-left"></i>
						</a> <!-- /control-carousel -->

						<a href="#slider-carousel" class="right control-carousel" data-slide="next">
							<i class="fa fa-caret-right"></i>
						</a> <!-- /control-carousel -->
					</div> <!-- /slider-carousel -->
				</div> <!-- /col-sm-12 -->
			</div> <!-- /featured-blog-wrapper -->
		</div> <!-- /row -->


	</div> <!-- /container-fluid -->
</section> <!-- /article-page -->
@endsection