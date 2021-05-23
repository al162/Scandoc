<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SUBIR DOCUMENTO') }}
            
   
        </h2>
    </x-slot>

    <body>
@if($paths)
    @foreach ($paths as $file)<img src={{ $file }} style="height: 15vw; min-height: 100px;">@endforeach<br><br>

    @foreach ($paths as $file)
        {{ $file }}<br>
    @endforeach<br><br>    
    Cantidad de páginas: {{ count($paths) }}
@endif <br>

<form method="POST" enctype="multipart/form-data" > 

    
    @csrf
    
    <input type="file" name="image[]" multiple>
    <button type="submit">Subir</button><br>
    @if ($errors->any())
        @foreach ($errors->all() as $error) {{ $error }} @endforeach
    @endif
</form>
@if($paths)
<a href="{{ route('destroy') }}"><button type="submit">Borrar</button></a> 
@endif
</body>


</x-app-layout>



