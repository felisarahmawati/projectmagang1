@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-Kendaraan/kelola_kendaraan" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2">
                <div>
                    <a href="/Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName2">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-PickUp/kelola_pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    
         <div class="container mt-4 mb-4">
            <div class="row justify-content-center">
                <div class="card" style="background-color: #fff; width:70% ">
                    <div class="card-body">
                  
                        <a href="/Vendor/Kelola-Bangunan/kelola_bangunan"><i class="bi bi-arrow-left px-2 "></i><b>Kelola Bangunan</b><hr></a>
                                
                                    <p><b>Tambah Layanan Bangunan!</b>
                                    <p class="text-muted">Daftarkan layanan bangunan dengan mengisi data 
                                        dibawah ini</p>
                                    </p><br>
                                    <h6><svg  xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor"class="bi bi-1-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                                      </svg><b>Alamat Vendor</b></h6>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="">Untuk mengatur lokasi dan detail
                                                alamat vendor</p>
                                        </div>
                                  
                                    <div class="col-md-2">
                                        <a href="/Vendor/Kelola-Bangunan/atur_alamat" ><button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#staticBackdrop">
                                            Tambah
                                          </button></a>
                                           
                                        </div>   
                                        <hr>
                                    </div>
                                    <div class="text-muted">
                                        <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-2-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                          </svg><b>Jenis bangunan</b></h6>
                                     <div class="row">
                                        <div class="col-md-10 ">
                                            <p class="ps-4">Mengatur jenis bangunan
                                                yang bisa dititipkan.</p>
                                        </div>
                                    
                                     </div>
                               
                                 </div>
                                </div>
                                </div>
                            </div>
                        </div>
          </div>
        </div>
    </section>
    @endsection