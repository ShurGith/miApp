@php
	$directorio = public_path('/images/productos');
	$files = File::files($directorio);
	$fileNames = [];
	foreach ($files as $file) {
	    $fileNames[] = $file->getFilename();
	}
	// use Illuminate\Support\Facades\DB;
    use App\Models\Categoria;
    $categs = Categoria::orderBy('name', 'asc')->pluck('name', 'id');
    $a = 0
@endphp
@section('categorias-crear')
    <div class="flex flex-col gap-2">
        <label for="files_select" htmlFor="remember">Categorías</label>
            <div class="flex items-center justify-start gap-8 pl-8">
            @foreach ($categs as $id => $name )
            @php
               $a++;
            @endphp
                <label class="cursor-pointer"><input class="cursor-pointer rounded mr-2" name="categoria[]" type="checkbox" value="{{ $id}}">{{ ucwords($name)  }}</label>
            @if($a%3 == 0)
               </div>
               <div class="flex items-center justify-start gap-8 pl-8">
            @endif
            @endforeach
            </div>
    </div>
@endsection
@section('categorias')
    @php $a = 0; @endphp
    @if(!$page_create)
        <div class="flex flex-col gap-2  w-7/12">
            <label for="files_select" htmlFor="remember">Categorías</label>
            <div class="flex items-center justify-start gap-8 pl-8">
            @foreach ($categs as $id => $name )
                @php
                   $a++;
                @endphp
                    <label class="cursor-pointer"><input class="cursor-pointer rounded mr-2" name="categoria[]" type="checkbox" value="{{ $id }}"
                        @foreach ( $product->categorias as $catego )
                            @if($catego->id == $id)
                                @checked(true)
                            @endif
                        @endforeach
                >{{ ucwords($name) }}</label>
                @if($a%3 == 0 && $a > 0)
                   </div>
                   <div class="flex items-center justify-start gap-8 pl-8">
                @endif
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
