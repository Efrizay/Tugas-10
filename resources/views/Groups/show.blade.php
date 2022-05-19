@extends('layouts.app')

@section('title', 'Coba')

@section('content')

<div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
            <h3>{{ $group['name'] }}</h3>
            <hr>
        </div>

        <div class="text">
        <h6>Anggota Grup :</h6 >
@foreach ($group->member_groups as $friend)
@if ($friend->status == 1)
  <p><h6> {{$friend->friends->nama}} <a href="{{url('groups/deletemember/'. $friend->id)}}" class="btn btn-danger">hapus</a></p></h6>  
</ul>
</div>
  @endif
@endforeach
@php
    $jumlah = $group->member_groups->where('status', 1)->count();
    $jumlah_keluar = $group->member_groups->where('status', 2)->count();
@endphp <br>
<p>Jumlah Anggota Grup : {{$jumlah}} anggota
  <br>
  Jumlah yang Keluar : {{$jumlah_keluar}} anggota</p>




  <hr>
      </div>
    </div>
  </div>
</div>

@endsection

