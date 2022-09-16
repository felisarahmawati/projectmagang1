@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2 ">
                <div>
                    <a href="Vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName2">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-PickUp/kelola_pickup" style="text-decoration:none">
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
                  
                        <a href="/Vendor/Kelola_Barang/layanan_atep3"><i class="bi bi-arrow-left px-2 "></i><b>Kelola Barang</b><hr></a>
                                                                
                                    <p><b>Tambah layanan penitipan barang!</b>
                                    <p class="text-muted">Daftarkan gudang / tempat anda dengan 
                                        mengisi data dibawah ini</p><br>
                                    </p>
                                    <h6><svg  xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor"class="bi bi-1-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                                      </svg><b>Alamat lahan gudang</b></h6>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="ps-4">Untuk mengatur lokasi dan detail alamat gudang Anda</p>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="bi bi-check2-square" style="font-size: 37px; color:rgb(98, 212, 133);"></i>
                                           
                                        </div>   
                                        <hr>
                                    </div>
                                    <div class="">
                                        <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-2-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                          </svg><b>Jenis barang</b></h6>
                                     <div class="row">
                                        <div class="col-md-10 ">
                                            <p class="ps-4">Mengatur jenis barang yang dititipkan</p>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <i class="bi bi-check2-square" style="font-size: 37px; color:rgb(98, 212, 133);"></i>
                                        </div>   
                                        <hr>
                                     </div>
                                    </div>
                                    <div class="">
                                     <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-3-circle-fill p-2"  viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                                      </svg><b>Ketersediaan Lahan</b></h6>
                                     <div class="row mb-5">
                                        <div class="col-md-10 ">
                                            <p class="ps-4">Menginputkan detail rincian kondisi gudang</p>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <i class="bi bi-check2-square" style="font-size: 37px; color:rgb(98, 212, 133);"></i>
                                        </div>   
                                

                                     </div>
                                    <div>
                                        <p><i class="bi bi-check-circle-fill p-2" style="font-size: 25px; color:rgb(98, 212, 133);"></i>Dengan mengisi data ini, maka Anda setuju
                                            dengan <b>Syarat & Ketentuan Umum </b> 
                                            Kebijakan Privasi</p>
                                    </div>
                                    <a href="/Vendor/Kelola_Barang/setelah_input"  data-bs-toggle="modal" data-bs-target="#exampleModalearning"><button type="button" class="btn btn-success col-md-12 mt-3">Selanjutnya</button></a>
                                    </div>

                                  

                                </div>
                            </div>
                        </div>
          </div>
        
      
          <!--modal selesai-->
          <div class="modal fade" id="exampleModalearning" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   
                        <div class="text-center mt-4 mb-4">
                          <img src="../../assets/img/centanghijau.png" alt="centangHijau" style="width: 100px; height:100px">
                          <p class="congratulations" style="padding-top: 20px"><b>Selamat!!!<b></p>
                          <h5 class="berhasil" style="padding-top: 5px; color: grey">Selamat anda telah berhasil 
                            membuat layanan.!</h5>
                        </div>
                 
                </div>
            </div>
        </div>
    </section>
    @endsection