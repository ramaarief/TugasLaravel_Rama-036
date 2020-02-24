@extends('layouts/main')
@section('container')
	<!-- Main -->
	<section id="main" class="container">

		<section class="box special">
			<header class="major">
				<h2>Data Anggota Himatif</h2>
				<p>Tahun periode 2019/2020</p>
			</header>

			<br>

			<div style="margin-left: 410px;">
			<form method="get" action="/index" class="form-inline my-2 my-lg-0">
				<input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
			</div>

			<br>

			<table>
				<thead class="thead-light">
				<tr>
					<td>NIM</td>
					<td>Nama</td>
					<td>Tahun Angkatan</td>
					<td>Alamat</td>
					<td>Photo</td>
				</tr>
				</thead>
				@foreach($mahasiswa as $mhs)
				<tr>
					<td>{{ $mhs->NIM }}</td>
					<td>{{ $mhs->Nama }}</td>
					<td>{{ $mhs->Tahun_Angkatan }}</td>
					<td>{{ $mhs->Alamat }}</td>
					<td><img src="{{ asset('images/'.$mhs->Photo) }}" id="showgambar" style="max-width:200px;max-height:200px;" /></td>
				</tr>
				@endforeach
			</table>
			

			<div class="card-footer text-right">
            <nav class="d-inline-block">
            	Page Number<br>
				{{ $mahasiswa->links() }}
            </nav>
          </div>
		</section>

		<br>
			<h1 style="font-size: 30px;" align="center">Proker Himatif Periode tahun 2019/2020</h1>
		<br>

		<div class="row">
			<div class="col-6 col-12-narrower">

				<section class="box special">
					<span class="image featured"><img src="images/acara1.jpg" alt="" /></span>
					<h3>First Gathering Maba TI<br> Tahun 2019</h3>
					<p>Sebuah acara untuk mengumpulkan mahasiswa baru angkatan teknologi informasi agar dapat merekatkan hubungan antar kelas dan angkatan atas.</p>
					<ul class="actions special">
						<li><a href="#" class="button alt">Baca Selengkapnya</a></li>
					</ul>
					<br>
				</section>

			</div>
			<div class="col-6 col-12-narrower">

				<section class="box special">
					<span class="image featured"><img src="images/acara2.jpg" alt="" /></span>
					<h3>First Gathering Staff Muda TI<br> Tahun 2019</h3>
					<p>Sebuah acara untuk mengumpulkan staff muda periode 2019/2020 agar dapat merekatkan hubungan angkatan atas dan dapat mengetahui divisi dalam himpunan.</p>
					<ul class="actions special">
						<li><a href="#" class="button alt">Baca Selengkapnya</a></li>
					</ul>
				</section>

			</div>
		</div>

	</section>
@endsection
