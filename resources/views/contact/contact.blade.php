<div id="form" class="form">

<ul>
    @foreach($errors->all() as $error)
        <li>{{{ $error }}}</li>
    @endforeach
</ul>

{!! Form::open(array('action' => 'ContactController@sendEmail', 'class' => 'form')) !!}

	<div class="row">
	{!! Form::label('first_name', 'First Name') !!}
	{!! Form::text('first_name') !!}
	</div>
	
	<div class="row">
	{!! Form::label('second_name', 'Second Name') !!}
	{!! Form::text('second_name') !!}
	</div>
	
	<div class="row">
	{!! Form::label('email', 'Email Address') !!}
	{!! Form::email('email') !!}
	</div>
	
	<div class="row">
	{!! Form::label('email_confirm', 'Confirm Email Address') !!}
	{!! Form::email('email_confirm') !!}
	</div>
	
	<div class="row">
	{!! Form::label('mobile', 'Contact Number') !!}
	{!! Form::text('mobile') !!}
	</div>
	
	<div class="row">
	{!! Form::label('body', 'Your Message') !!}
	{!! Form::textarea('body') !!}
	</div>
	
	<div class="row buttons">
	{!! Form::submit('Submit') !!}
	</div>
	
{!! Form::close() !!}