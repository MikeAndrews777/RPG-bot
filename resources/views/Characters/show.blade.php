@extends ('RPGbotLayout')

@section ('basecontent')

    <div style="padding-left:16px">
        <h1 class="title is-1">Selected Character</h1>

        <table id="characters">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Hit Points</th>
                <th scope="col">Initiative</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>

            </tr>
            </thead>
            <tbody>

                        <td>{{$character->name}}</td>
                        <td>{{$character->description}}</td>
                        <td>{{$character->hit_points}}</td>
                        <td>{{$character->initiative}}</td>
                        <td>{{$character->created_at}}</td>
                        <td>{{$character->updated_at}}</td>

                    </tr>

            </tbody>
        </table>
        <p></p>

        <div style="padding-left:27px">
            <h4 class="title is-1"> {{$character->name}} is assigned to the following encounters</h4>
            <div style="padding-left:27px">
                <p>
                    @forelse ($character->encounters as $encounter)
                        <a href="/encounters/{{$encounter->id}}" >{{$encounter->name}}</a>
                    @empty
                        <i>Not assigned to any encounters yet</i>
                    @endforelse

                </p>
            </div>
        </div>

        <a href="/characters/edit/{{$character->id}}" >Edit {{$character->name}}</a>

    </div>
    <p style="margin-top: 4em">
    <a href="/characters/delete/{{$character->id}}" >Delete {{$character->name}}</a>
    </p>

@endsection
