@extends ('RPGbotLayout')

@section ('basecontent')

    <div style="padding-left:16px">
        <h1 class="title is-1">Selected Encounter</h1>

        <table id="characters">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>

            </tr>
            </thead>
            <tbody>

            <td>{{$encounter->name}}</td>
            <td>{{$encounter->description}}</td>
            <td>{{$encounter->created_at}}</td>
            <td>{{$encounter->updated_at}}</td>

            </tr>

            </tbody>
        </table>
        <p></p>



        <div style="padding-left:27px">
            <h4 class="title is-1">The following characters are included in {{$encounter->name}}</h4>
            <div style="padding-left:27px">
            <p>
                @forelse ($encounter->characters as $character)
                    <a href="/characters/list/{{$character->id}}" >{{$character->name}}</a>
                @empty
                    <i>No characters assigned yet</i>
                @endforelse

            </p>
            </div>
        </div>

        <a href="/encounters/{{$encounter->id}}/edit">Edit {{$encounter->name}}</a>

        </div>

        <p style="margin-top: 4em">
            <form actions="{{'encounter.destroy', $encounter['id'] }}" method="POST">
                @method('DELETE')
                @csrf
                <button>Delete {{$encounter->name}}</button>
            </form>
        </p>
    </div>


@endsection
