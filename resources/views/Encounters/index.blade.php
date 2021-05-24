@extends ('RPGbotLayout')

@section ('basecontent')

    <div style="padding-left:16px">
        <h1 class="title is-1">Encounter List</h1>

        <table id="characters">
            <thead>
            <tr>
                <th scope="col">@sortablelink('name', 'Encounter')</th>
                <th scope="col">Description</th>
                <th scope="col">@sortablelink('created_at', 'Created At')</th>
                <th scope="col">@sortablelink('updated_at', 'Updated At')</th>

            </tr>
            </thead>
            <tbody>

            @foreach ($encounters as $encounter)
                <tr>

                    <td><a href="/encounters/{{$encounter->id}}" >{{$encounter->name}}</a></td>
                    <td>{{$encounter->description}}</td>
                    <td>{{$encounter->created_at}}</td>
                    <td>{{$encounter->updated_at}}</td>

                </tr>
            @endforeach


            </tbody>
        </table>

        {!! $encounters->appends(\Request::except('page'))->render() !!}

        <div style="padding-left:27px">

            <p></p>
            <a href="/encounters/create" >Create New Encounter</a>
        </div>

    </div>

@endsection
