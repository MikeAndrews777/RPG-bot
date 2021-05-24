@extends ('RPGbotLayout')

@section ('basecontent')

    <div style="padding-left:16px">
        <h1 class="title is-1">Character List</h1>

        <table id="characters">
            <thead>
            <tr>
                <th scope="col">@sortablelink('name', 'Name')</th>
                <th scope="col">Description</th>
                <th scope="col">@sortablelink('hit_points', 'Hit Points')</th>
                <th scope="col">@sortablelink('initiative', 'Initiative')</th>
                <th scope="col">@sortablelink('created_at', 'Created At')</th>
                <th scope="col">@sortablelink('updated_at', 'Updated At')</th>

            </tr>
            </thead>
            <tbody>

                @foreach ($characters as $character)
                    <tr>

                        <td><a href="/characters/list/{{$character->id}}" >{{$character->name}}</a></td>
                        <td>{{$character->description}}</td>
                        <td>{{$character->hit_points}}</td>
                        <td>{{$character->initiative}}</td>
                        <td>{{$character->created_at}}</td>
                        <td>{{$character->updated_at}}</td>


                    </tr>
                @endforeach


            </tbody>
        </table>

        {!! $characters->appends(\Request::except('page'))->render() !!}

        <div style="padding-left:27px">

            <p></p>
            <a href="/characters/create" >Create New Character</a>
        </div>

    </div>

@endsection
