@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center">
    <div class="">
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href="/Vendor/Kelola-kendaraan/kelola_kendaraanr" style="text-decoration:none">
                        <div class="cardName2">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2">
                <div>
                    <a href="/Vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName2">Barang
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

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" style="width: 400px">
          

                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card" style="background-color: #fff;">
                                <div class="card-body">

                                 <a href="/Vendor/Kelola-kendaraan/layanan_step4"><i class="bi bi-arrow-left px-2 "></i><b>Kelola kendaraan</b></a><hr>
                                        
                                            <p><b>Tambah layanan lahan parkir!</b>
                                                <p class="text-muted">Daftarkan tempat parkir anda dengan 
                                                    mengisi data dibawah ini</p>
                                                </p><br>
                                                <h6><svg  xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor"class="bi bi-1-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                                                  </svg><b>Alamat lahan parkir</b></h6>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <p class="ps-3">Untuk mengatur lokasi dan detail alamat lahan parkir Anda</p>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <i class="bi bi-check2-square" style="font-size: 37px; color:text-success;"></i>
                                                    </div>   
                                                    <hr>
                                                </div>
                                                <div>
                                                    <h6 class=""><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-2-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                                      </svg><b>Jenis kendaraan</b></h6>
                                                 <div class="row ">
                                                    <div class="col-md-10 ">
                                                        <p class="ps-3">Mengatur jenis kendaraan yang dititipkan</p>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <i class="bi bi-check2-square" style="font-size: 37px; color:text-success;"></i>
                    
                                                    </div>   
                                                    <hr>
                                                 </div>
                                                </div>
                                                <div class="">
                                                 <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-3-circle-fill p-2"  viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                                                  </svg><b>Ketersediaan Lahan</b></h6>
                                                 <div class="row">
                                                    <div class="col-md-9 ">
                                                        <p class="ps-3">Menginputkan detail rincian kondisi lahan parkir</p>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button class="btn btn-outline-success">Proses</button>
                                                    </div>   
                                                    
                                             </div>
                                            </div>
                                </div>
                            </div>
                        </div>
          </div>
        </div>
        <div class="col" style="width: 700px">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Rincian lahan</h5>
                <hr width="100%" color="#c0c0c0">
               
                  <div class="mb-3">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Ketersediaan lahan parkir </b>
                          <p class="text-muted">Mohon masukan jumlah kapasitas dan luas lahan parkir Anda</p>
                      </label>
  
                      </div>
                  
              
                      
                      <div class="col-md-12">
                        <label for="exampleFormControl" class="form-label"><b>Berapa luas lahan parkir Anda?</b></label>
                        <p class="text-muted">ukuran luas lahan parkir Anda</p>
                        <input class="form-control" type="text" placeholder="50m x 50m">
                      </div>
                    
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Catatan kapasitas</b></label>
                        <p><small class="text-muted">Deskripsikan berapa banyak kendaraan yang
                            bisa parkir?</small></p>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <a href="/Vendor/Kelola-Kendaraan/layanan_step4"> <button type="button" class="btn btn-success col-md-12 mt-3">Selanjutnya</button></a>
            
                
            </div>
          </div>
        </div>
        </div>
    
</div>             
</section>
@endsection