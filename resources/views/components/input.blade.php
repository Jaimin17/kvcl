<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <input type="{{$type}}" class="form-control" id="{{$name}}" name="{{$name}}" value="{{old('$name')}}">
    <span class="text-danger">
        @error("$name")
            {{$message}}
        @enderror
    </span>
  </div>