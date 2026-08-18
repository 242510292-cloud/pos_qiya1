@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-person-circle"></i>
                        
                        Profile
                    </h4>
                </div>

                <div class="card-body">

                    <div class="text-center mb-4">

                       <div class="profile-photo">
                            <img src="{{ asset('storage/ningen.jpg') }}" 
                                alt="Foto Profil">
                        </div>
                    </div>

                    <hr>

                    <h5 class="text-primary mb-3">
                        <i class="bi bi-person-vcard"></i>
                        Identitas Diri
                    </h5>

                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">
                            Nama :
                        </div>

                        <div class="col-sm-8">
                           Dezqiya nur annisa
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">
                            Kelas :
                        </div>

                        <div class="col-sm-8">
                            XII RPL 4
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">
                            Jurusan :
                        </div>

                        <div class="col-sm-8">
                            Rekayasa Perangkat Lunak  dan Gim
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">
                            Sekolah :
                        </div>

                        <div class="col-sm-8">
                            smkn 4 Tassikmalaya
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">
                            Email :
                        </div>

                        <div class="col-sm-8">
                            email@gmail.com
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">
                            No. HP :
                        </div>

                        <div class="col-sm-8">
                            08xxxxxxxxxx
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">
                            Alamat :
                        </div>

                        <div class="col-sm-8">
                            Alamat lengkap kamu
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
 <a href="{{ route('dashboard') }}" class="btn btn-secondary">
            Kembali
        </a>
@endsection