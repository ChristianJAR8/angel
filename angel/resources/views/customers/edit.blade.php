<form action="{{route('customers.update',[ 'id' => $customer->id])}}" method="POST">
   @csrf
   <input type="hidden" value="put" name="_method">
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
    <p>Nombre: <input type="text" name="name" size="40" value="{{ old('name',$customer->name)}}"></p>
    	@if($errors->has('name')) 
    		{{$errors->first('name')}}
    	@endif
    <p>RFC: <input type="text" name="taxid" size="40" value="{{ old('taxid',$customer->taxid)}}"></p>
    <p>Email: <input type="text" name="email" size="40"value="{{ old('email',$customer->email)}}"></p>
    <p>Telefono: <input type="text" name="phone" size="40"value="{{ old('phone',$customer->phone)}}"></p>
   <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </p>

</form>