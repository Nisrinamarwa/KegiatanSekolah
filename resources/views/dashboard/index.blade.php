@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @role('admin')
        <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Total Siswa</h5>
                            </div>
                            <div>
                                <h3>
                                    {{$students}}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
             </div>   

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Total Kegiatan</h5>
                                </div>
                                <div>
                                    <h3>
                                        {{$activitys}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div> 

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Total Peserta</h5>
                                </div>
                                <div>
                                    <h3>
                                        {{$activitys}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endrole
        {{-- Tampilan bendahara --}}
        @role('bendahara')
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Pendaftaran</h5>
                                    <h6 class="text-secondary">Pending</h6>
                                </div>
                                <div>
                                    <h3>
                                        {{$pending}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Pendaftaran</h5>
                                    <h6 class="text-secondary">Terverifikasi</h6>
                                </div>
                                <div>
                                    <h3>
                                        {{$terverivikasi}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Total Peserta</h5>
                                </div>
                                <div>
                                    <h3>
                                        {{$activitys}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endrole
        {{-- Tampilan Student --}}
        @role('student')
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Pendaftaran</h5>
                                    <h6 class="text-secondary">Pending</h6>
                                </div>
                                <div>
                                    <h3>
                                        {{$pending}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Pendaftaran</h5>
                                    <h6 class="text-secondary">Terverifikasi</h6>
                                </div>
                                <div>
                                    <h3>
                                        {{$terverivikasi}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Total Peserta</h5>
                                </div>
                                <div>
                                    <h3>
                                        {{$activitys}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endrole
        </div>
    </div>
@endsection
