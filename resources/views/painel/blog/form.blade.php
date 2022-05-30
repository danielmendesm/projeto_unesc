<div class="row">
    <div class="input-field col s12">
        <select name="categoria_id" id="categoria_id">
            <option value="" disabled selected>Selecione uma categoria</option>
            @foreach($categorias as $item)
            <option value="{{$item->id}}"}>{{$item->name}}</option>
            @endforeach

        </select>
        <label>Categoria</label>
    </div>
</div>


<div class="input-field">
    <input placeholder="Título" id="title" type="text" name="title" value="{{isset($reg->title) ? $reg->title : ''}}">
    <label for="title">Titulo</label>
</div>



<div class="row">
    <div class="input-field col s12">
        <textarea id="description" name="description" class="materialize-textarea">{{isset($reg->description) ? $reg->description : ''}}</textarea>
        <label for="description">Descrição</label>
    </div>
</div>

<div class="file-field input-field">
    <div class="btn blue darken-3">
        <span>Imagem</span>
        <input type="file" id="image" name="image">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset($reg->image))
    <div class="input-field">
        <img src="{{asset($reg->image)}}" alt="" height="70">
    </div>
@endif
<br/>
<div>

    <p>
        <input type="checkbox" id="status" name="status" {{(isset($reg->status) AND $reg->status) ? 'checked' : ''}} value="true" />
        <label for="status">Status</label>
    </p>
    <br/>
</div>




