@if (Auth::user()->is_having($item->code))
    {!! Form::open(['route' => 'item_user.dont_have', 'method' => 'delete']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Having', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user.have']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('have', ['class' => 'btn btn-outline-primary']) !!}
    {!! Form::close() !!}
@endif