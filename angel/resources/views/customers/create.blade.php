<form action="{{route('customers.store')}}" method="POST">
   @csrf
    <p>Nombre: <input type="text" name="name" size="40"></p>
    <p>RFC: <input type="text" name="taxid" size="40"></p>
    <p>Email: <input type="text" name="email" size="40"></p>
    <p>Telefono: <input type="text" name="phone" size="40"></p>
   <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </p>

</form>