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
  <section id="features">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h1 class="text-uppercase page-header">what is it.</h1>
        <p class="text-capitalize">a intractive way to solve the conventional voting.</p>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          {!! Html::image('public/feature/feature-1.png','feature image',array('class'=>'img img-responsive')) !!}
          <div class="caption text-center text-capitalize">
            <p>You just need Basic Details of yours and we will let you vote</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          {!! Html::image('public/feature/feature-2.png','feature image',array('class'=>'img img-responsive')) !!}
          <div class="caption text-center text-capitalize">
            <p>admin's control panel allows you to manage the list of filled nomination </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          {!! Html::image('public/feature/feature-3.png','feature image',array('class'=>'img img-responsive')) !!}
          <div class="caption text-center text-capitalize">
            <p>shows you the graphical data representation of your votes and, it is an admin control panel.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@include('layouts.footer')
