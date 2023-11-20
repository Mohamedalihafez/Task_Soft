<select name="timezone" class="form-control span5">
    @foreach($timezones as $key => $timezone)
        <option value="{{$key}}">{{  $key .' '.$timezone}}</option>
    @endforeach
</select>