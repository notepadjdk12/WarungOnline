@extends ('template.base')

@section('konten')

<div class="container">
    <div class="row">
		<div class="col-md-12 mt-5 ">
			<div class="card">
			  <div class="card-header">
				Data Produk
				<a href="{{url ('admin/produk/create')}}" class="btn btn-success float-right"><i class="fa fa-plus"></i>  Tambah data</a>
			</div>
			<div class="card-body">
				<table class="table"  >
					<thead class="bg-dark">
					<th>No</th>
					<th>Aksi</th>
					<th>Nama</th>
					<th>Harga</th>
					


					</thead>
					

					<tbody>
						@foreach($list_produk as $produk)

				    <tr>
						<td>{{$loop->iteration}}</td>
						<td>
							<div class="btn btn-group">	
							<a href="{{url ('admin/produk', $produk->id)}}" class="btn bg-secondary"><i class="fa fa-info"></i></a>
							<a href="{{url ('admin/produk', $produk->id)}}/edit" class="btn bg-warning"><i class="fa fa-edit"></i></a>

							@include('template.utils.delete', ['url' => url ('admin/produk', $produk->id )])
							</div>
						</td>
						<td>{{$produk->nama}}</td>
						<td>{{$produk->harga}}</td>
					</tr>

						@endforeach

					</tbody>
				 </table>
			</div>
		</div>
	</div>
</div>



</div>

@endsection
