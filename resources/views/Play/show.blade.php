@extends ('RPGbotLayout')

@section ('basecontent')

    <div style="padding-left:16px">
        <h1 class="title is-1">{{$encounter->name}}</h1>
        <div style="padding-left:16px">
        <p>{{$encounter->description}}</p>
        </div>

        <div style="padding-left:27px">

            <h4 class="title is-1">Characters involved in {{$encounter->name}}</h4>
            <table id="characters">
                <thead>
                <tr>
                    <th scope="col">@sortablelink('name', 'Name')</th>
                    <th scope="col">Description</th>
                    <th scope="col">@sortablelink('hit_points', 'Hit Points')</th>
                    <th scope="col">@sortablelink('initiative', 'Initiative')</th>


                </tr>
                </thead>
                <tbody>

                @foreach ($encounter->characters as $character)
                    <tr>

                        <td><a href="/characters/list/{{$character->id}}" >{{$character->name}}</a></td>
                        <td>{{$character->description}}</td>
                        <td>{{$character->hit_points}}</td>
                        <td>{{$character->initiative}}</td>


                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>

    </div>




@endsection
