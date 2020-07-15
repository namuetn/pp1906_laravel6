@extends('adminlte::page')




@section('content')
<h1>Order List</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Total price</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>	
            @foreach($orders as $order)
                <tr>
                    <td>Order {{ $order->id }}</td>
                    <td>${{ $order->total_price ?? '' }}</td>
                    <td>{{$order->status == 1}}
                        
                    </td>
                    <td>{{ $order->updated_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                    
                    <td>
                        <!-- <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-info">Edit</a> -->
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Total price</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Operation</th>
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
