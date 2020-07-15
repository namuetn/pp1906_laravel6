@extends('adminlte::page')

@section('content')
<h1>Order {{$orders->id}}</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>	
            @foreach($orders->products as $order_product)
                <tr>
                    <td>{{$order_product->name}}</td>
                    <td>{{$order_product->pivot->quantity}}</td>
                    <td>${{$order_product->pivot->quantity * $order_product->price }}</td>
                </tr>

            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </tfoot>
    </table>
@endsection

 

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
    	$('#example').DataTable();
	} );
</script>
@endsection
