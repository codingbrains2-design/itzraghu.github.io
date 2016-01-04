@include('layouts.header')

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			{!! Html::link('/','eVoting',array('class'=>'navbar-brand')) !!}
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>{!! Html::link('feature','Features',array('class'=>'nav-link')) !!}</li>
				<li>{!! Html::link('login','Cast Your Vote',array('class'=>'nav-link')) !!}</li>
				<li>{!! Html::link('voter-registration','Be voter',array('class'=>'nav-link')) !!} </li>
				<li>{!! Html::link('election-status','Election Status',array('class'=>'nav-link')) !!}</li>
				<li>{!! Html::link('voter-list','Voter List',array('class'=>'nav-link')) !!}</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<section id="login">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				{!! Form::open(array('url'=>'login','class'=>'form form-horizontal text-left')) !!}
				<div class="page-header">
					<h2 class="text-center">Voter Registration</h2>
				</div>
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				@if(Session::has('success'))
				<div class="alert alert-danger">
					{{ Session::get('success') }}

				</div>
				@endif
				@if(Session::has('error'))
				<div class="alert alert-danger">
					{{ Session::get('error') }}

				</div>
				@endif
				<br>
				{!! Form::label('voter_id', 'Voter Id/Card No.')!!}
				{!! Form::text('voter_id',null,array('class'=>'form-control'))!!}
				{!! Form::label('password', 'Password')!!}
				{!! Form::password('password',array('class'=>'form-control'))!!}
				<br>
				{!! Form::submit('Submit',array('class'=>'btn btn-primary center-block'))!!}
				{!! Form::close() !!}
			</div>
		</div>
	</section>
</div>
@include('layouts.footer')
