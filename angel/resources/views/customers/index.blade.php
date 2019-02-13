
@include('flash::message')<br>
<a href="{{route('customers.create')}}">Nuevo</a><br>
@forelse($customers as $customer )

    {{ $customer->id }}&nbsp; &nbsp; {{ $customer->name }} &nbsp; {{ $customer->email }} <br>


   @empty
@endforelse
//PARA EL PAGINADO
{{$customers->links()}}