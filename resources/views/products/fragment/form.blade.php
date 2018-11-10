<div class="form-group">

	{!! Form::label('name','Nombre del colaborador') !!}
	{!! Form::text('name', null, ['class' =>'form-control'] ) !!}
	

</div>

<div class="form-group">

	{!! Form::label('short','Cargo del colaborador') !!}
	{!! Form::text('short', null, ['class' =>'form-control'] ) !!}
	

</div>

<div class="form-group">

	{!! Form::label('body','Ocupacion del colaborador') !!}
	{!! Form::textarea('body', null, ['class' =>'form-control'] ) !!}
	

</div>

<div class="form-group">

	
	{!! Form::submit('ENVIAR', ['class' =>'btn btn-primary'] ) !!}
	

</div>