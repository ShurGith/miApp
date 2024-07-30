@php
	$directorio = public_path('/images/productos');
	$files = File::files($directorio);
	$fileNames = [];
	foreach ($files as $file) {
	    $fileNames[] = $file->getFilename();
	}
	// use Illuminate\Support\Facades\DB;
    use App\Models\Categoria;
	  $categs = Categoria::pluck('name', 'id');
    $i = 0;
@endphp
@section('categorias-crear')
    <div class="flex flex-col gap-2">
        <label for="files_select" htmlFor="remember">Categorías Actuales</label>
            <div class="flex items-center pt-4 pl-10 gap-2">
            @foreach ($categs as $id => $name )
            @php
               $i++;
            @endphp
            @if($i%4 == 0)
               </div>
               <div class="flex items-center pl-10 gap-2">
            @endif
                <input class="cursor-pointer rounded-xl" name="categoria[]" type="checkbox" value="{{ $id}}">{{ $name }}</input>
            @endforeach
            </div>
    </div>
@endsection
@section('categorias')
    @if(!$page_create)
        <div class="flex flex-col gap-2">
            <label for="files_select" htmlFor="remember">Categorías</label>
            <div class="flex items-center pl-10 gap-2">
                @foreach ($categs as $id => $name )
                <input class="cursor-pointer rounded-xl" name="categoria[]" type="checkbox" value="{{ $id}}"
                    @foreach ( $product->categorias as $catego )
                        @if($catego->id == $id)
                            @checked(true)
                        @endif
                    @endforeach
            >{{ $name }}</input>
            @endforeach
            </div>
        </div>
    @endif
@endsection

@section('imagenes')
	<div class="flex flex-col gap-2">
		<label for="files_select" htmlFor="remember">Disponibles</label>
		<select class="rounded-md border bg-transparent"
			id="files_select" name="files_select">
            <option value="" enabled=false>Selecciona</option>
			@foreach ($fileNames as $fileName)
				<option value="{{ $fileName }}">{{ $fileName }}</option>
			@endforeach
		</select>
	</div>
@endsection
