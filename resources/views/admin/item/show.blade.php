@extends('layouts.main')
@section('table')
<link rel="stylesheet" href="{{asset('public/style/feedback.css')}}">
@endsection
@section('content')

@include('admin.inc.topnavbar')
@include('admin.inc.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Review</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/item')}}">All Item</a></li>
              <li class="breadcrumb-item active">Review</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="border-bottom"></div>
    <!-- /.content-header -->

    <div class="ml-5">
    <div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 main-section">
				<div class="col-md-12">
					<h3>Feedback</h3>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-12 rating-part-left text-center">
						<!-- <h1>1.3</h1>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<p>Average Rating</p> -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="">
						    <img src="{{asset('public/images/prod-1.jpg')}}" height="50" width="50">
						</div>
						
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12 rating-part-right">
						<!-- <div class="row">
							<div class="col-md-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<span>70%</span>
							</div>
							<div class="col-md-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>20%</span>
							</div>
							<div class="col-md-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>8%</span>
							</div>
							<div class="col-md-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>4%</span>
							</div>
							<div class="col-md-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>0%</span>
							</div>
						</div> -->
					</div>
				</div>


				<div class="row review-section">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<hr>
						<h3>Reviews</h3>
						<hr>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-4 col-md-4 col-xs-4 review-part-left">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<img src="/demo/1499344631_malecostume.png">
									</div>	
									<div class="col-md-8 col-sm-8 col-xs-12">
										<p>8 days ago</p>
										<span>Tom kok</span><br>
										<small>Report</small>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8 review-part-right">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-4 col-md-4 col-xs-4 review-part-left">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<img src="/demo/1499345471_boy.png">
									</div>	
									<div class="col-md-8 col-sm-8 col-xs-12">
										<p>2 days ago</p>
										<span>Vin Desal</span><br>
										<small>Report</small>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8 review-part-right">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-4 col-md-4 col-xs-4 review-part-left">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<img src="/demo/1499345372_maturewoman.png">
									</div>	
									<div class="col-md-8 col-sm-8 col-xs-12">
										<p>12 days ago</p>
										<span>Liza Bin</span><br>
										<small>Report</small>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8 review-part-right">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-4 col-md-4 col-xs-4 review-part-left">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<img src="/demo/1499345224_female1.png">
									</div>	
									<div class="col-md-8 col-sm-8 col-xs-12">
										<p>15 days ago</p>
										<span>Saniya Neo</span><br>
										<small>Report</small>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8 review-part-right">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-4 col-md-4 col-xs-4 review-part-left">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<img src="/demo/businessman.png">
									</div>	
									<div class="col-md-8 col-sm-8 col-xs-12">
										<p>5 month ago</p>
										<span>Jeck Spero</span><br>
										<small>Report</small>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8 review-part-right">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection()
	