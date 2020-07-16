@csrf
<div class="form-group">
  <label for="title">
    Titulo del proyecto <br>
    <input
    class="form-control {{$errors->first('title','is-invalid')}}"
    id="title"
    type="text"
    name="title"
    value="{{old('title',$project->title)}}">
    {!! $errors->first('title', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>')!!}
  </label>
</div>
<div class="form-group">
  <label for="description">
    Descripcion <br>
    <textarea
    id="description"
    class="form-control {{$errors->first('title','is-invalid')}}"
    name="description"
    rows="8"
    cols="80">{{old('description',$project->description)}}
  </textarea>
  {!! $errors->first('description', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>')!!}
</label>
</div>
<button class="btn btn-primary" type="submit" name="save">{{$btnText}}</button>
