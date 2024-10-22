<div>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $loop->iteration }}. {{ $todo }}</li>
        @endforeach
    </ul>
</div>
