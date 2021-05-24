@extends ('RPGbotLayout')

@section ('basecontent')

    <div style="padding-left:16px">
        <h1 class="title is-1">Encounter List</h1>

        <table id="characters">
            <thead>
            <tr>
                <th scope="col">@sortablelink('name', 'Encounter')</th>
                <th scope="col">Description</th>


            </tr>
            </thead>
            <tbody>

            @foreach ($encounters as $encounter)
                <tr>

                    <td><a href="/play/{{$encounter->id}}" >{{$encounter->name}}</a></td>
                    <td>{{$encounter->description}}</td>


                </tr>
            @endforeach


            </tbody>
        </table>

        {!! $encounters->appends(\Request::except('page'))->render() !!}

        <div style="padding-left:27px">


        </div>

    </div>

@endsection
