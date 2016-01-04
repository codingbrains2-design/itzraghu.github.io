@include('layouts.header')
<div id="wrapper">

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
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        {!! Html::image('public/vote.png','vote image',array('class'=>'img-circle img-responsive img-center')) !!}
        <h1>Online Voting System</h1>
        <p>Safe, Reliable, Secure, Fast</p>
        {!! Html::link('login','Cast Your Vote' ,array('class'=>'btn btn-primary')) !!}
      </div>
    </div>
  </div>
  @include('layouts.footer')
