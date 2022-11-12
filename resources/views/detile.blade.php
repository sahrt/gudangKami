@extends('layouts.main')

@section('container')
<div class="header-section text-white align-items-center d-flex justify-content-center pt-5" style="height: 250px; background-color:#154286">
    <h1>Lowongan Kerja</h1>
</div>
<div class="bg-warning" style="height: 10px"></div>
<div class="container mt-3">
    <div class="row">
        <div class="col-3 me-5">
            <div class="search-section shadow p-3">
                <h5>Pencarian</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Judul Lowongan">
                    <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection