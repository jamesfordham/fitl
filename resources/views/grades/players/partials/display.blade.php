<h2>Players</h2>

<ul class="list-group">
    @foreach($grade->players as $players)
        <li class="list-group-item">
            <p>{{ $players->name }} [ {{ $players->position }}  ]</p>
            <div class="clearfix">
                <button class="edit-object btn btn-info btn-xs pull-left">View</button>
                @include('grades.players.partials.delete')
            </div>
            @include('grades.players.partials.edit')

        </li>
    @endforeach
    <hr>
        @include('grades.players.partials.create')
</ul>