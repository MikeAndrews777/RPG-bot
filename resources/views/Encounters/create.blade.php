@extends ('RPGbotLayout')

@section ('basecontent')

    <div style="padding-left:16px">
        <h1 class="title is-1">Encounter Creation</h1>


        <p><b>New encounter</b></p>

        <form method="post" action="/encounters">
            @csrf

            <div class="field">

                <label class="label" for="name">Name</label>

                <div class="control">
                    <input class="input" type="text" name="name" id="name">
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

            </div>

            <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                    <input class="textarea" name="description" id="description">
                </div>
            </div>


            <div style="padding-left:27px">
                <h4 class="title is-1">Select characters to include in</h4>


                <div class="field">
                    <label class="label" for="Characters">Character List</label>

                    <div class="control">
                        <select
                            name="characters[]"
                            multiple
                        >
                            @foreach ($characters as $character)
                                <option value="{{ $character->id }}">{{ $character->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <p></p>
            <div class="field is-grouped">

                <div style="padding-left:17px" class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>

    </div>


@endsection
