@if (Auth::user()->is_wanting($item->code))
    {!! Form::open(['route' => 'item_user.dont_want', 'method' => 'delete']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Wanted', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user.want']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Want', ['class' => 'btn btn-outline-primary']) !!}
    {!! Form::close() !!}
@endif