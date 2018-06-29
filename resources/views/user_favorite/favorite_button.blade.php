@if (Auth::user()->is_favoriting($user->id))
        {!! From::open(['route' => ['user.unfavorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['user.favorite', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-outline-dark btn-xs"]) !!}
        {!! Form::close() !!}
@endif 