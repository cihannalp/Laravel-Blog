


<div class="form-group">
{!! Form::label('title','Title')!!}<br>
{!! Form::text('title',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('body','Body') !!}<br>
{!! Form::textarea('body',null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
{!! Form::submit('Create', ['class' => 'btn-submit'])!!}
</div>


