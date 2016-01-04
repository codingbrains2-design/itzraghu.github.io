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
        <li>{!! Html::link('logout','Logout',array('class'=>'nav-link')) !!}</li>
        
      </ul>
    </div>
  </div>
</nav>


<div class="container">
  <section id="vault">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        {!! Form::open(array('url'=>'vote','class'=>'form-horizontal text-left')) !!}
        <div class="form-group">
         <h1>Choose Your Candidate</h1>
         <p class="text-capitalize">prove your authenticity of being correct voter</p>
         <hr>
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
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
      @endif
      @if(Session::has('error'))
      <div class="alert alert-danger">
        {{ Session::get('error') }}

      </div>
      @endif
      {!! Form::label('voter_id', ' Confirm Your Voter Id/Card No.')!!}
      {!! Form::text('voter_id',null,array('class'=>'form-control'))!!}

      {!! Form::label('party', ' Select Your Party')!!}
      {!! Form::select('party',array('Bhartiya Janta Party'=>'Bhartiya Janta Party',
        'Samajwaadi Party'=>'Samajwaadi Party',
        'Aam Aadami Party'=>'Aam Aadami Party',
        'Congress'=>'Congress'),null,['class'=>'form-control'] )!!}
        <br>
        {!! Form::submit('Submit',array('class'=>'btn btn-primary center-block'))!!}
        {!! Form::close() !!}


      </div>
    </div>
  </section>
</div>
<br>
@include('layouts.footer')
