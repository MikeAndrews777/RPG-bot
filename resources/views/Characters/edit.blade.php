@extends ('RPGbotLayout')

@section ('basecontent')

    <div style="padding-left:16px">
        <h1 class="title is-1">Edit Character</h1>


        <h3><b>{{$character->name}}</b></h3>
        <p></p>

        <form method="post" action="/characters/list/{{$character->id}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" id="name" value="{{$character->name}}">
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                    <input class="textarea" name="description" id="description" value="{{$character->description}}">
                </div>

                <div class="field">
                    <label class="label" for="hit_points">Hitpoints</label>
                    <div class="control">
                        <input class="input" type="intiger" name="hit_points" id="hit_points" value="{{$character->hit_points}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="initiative">Initiative</label>
                    <div class="control">
                        <input class="input" type="intiger" name="initiative" id="initiative" value="{{$character->initiative}}">
                    </div>
                </div>
                <p></p>
                <div class="field is-grouped">

                    <div style="padding-left:17px" class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                </div>
            </div>


        </form>


    </div>




@endsection
