@extends('layouts/main')



@section('hero')
      <!-- Hero-->
  <section style="background-color: rgb(63, 63, 180);">
    <div class="container" style="padding-top: 200px;">
        <h1 style="color: white;">Question Moster</h1>
        <p style="color:wheat;">Ayo Persiapkan Tujuan Hidupmu, Masa Sekolah bukan Akhir segalahnya Semangat <br> Jadilah Orang Yang Bermanfaat</p>
      </div>
    </div>

</section><!-- End Hero -->
@endsection


@section('container')

<div class="container">


  <section id="about" class="about">
    <div class="container" data-aos="fade-up" style="padding: 20px;">

      <div class="section-title text-center">
        <h2>Pelacak Alumni</h2>
      </div>

      <div class="row justify-content-center " style="padding: 20px;">
        <form action="{{ route('soal2-process') }}" method="post">
          @csrf
            <div class="title pt-4">
                <h4>2. Berapa bulan waktu yang dibutuhkan (sebelum atau sesudah kelulusan)untuk memperoleh pekerjaan/wirausaha pertama?</h4>
               </div>
            <div class="container"> 
              
              <div class="  label-background form-check border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="padding:5px; margin: 2px; ">
                <button class="btn  button tombolAnswer1"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="biaya-sendiri" style="width: 20px;">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Sebelum Kelulusan
                </label> 
              
                </button>
              </div>
       
              <div class="  label-background form-check border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="padding:5px; margin: 2px; ">
                <button class="btn  button tombolAnswer2"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="bidikmisi">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Sesudah Kelulusan
                </label> 
              
                </button>
              </div>

              <div class="  label-background form-check border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="padding:5px; margin: 2px; ">
                <button class="btn  button tombolAnswer3"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="PPA">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Saya Melanjutkan Kuliah
                </label> 
              
                </button>
              </div>
            
                <div class="  label-background form-check border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="padding:5px; margin: 2px; ">
                  <button class="btn  button tombolAnswer4"  type="button">
                   <input type="radio" name="biaya" id="from-AFIRMASI" value="AFIRMASI">
                   <label class="form-check-label" for="from-AFIRMASI" >
                   Saya Belum Berkerja 
                  </label> 
                
                  </button>
                </div>


            <div class="button d-flex justify-content-between" style="margin-top: 20px; margin-left:10px; margin-right:10px;">
                <a href="{{ route('soal1') }}">
                   <button type="button" class="btn btn-primary">Back</button>
                </a>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
            </div>
        </form>
      </div>    
    </div>
  </section><!-- End About Us Section -->



</div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fromTittle">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('soal2-process') }}">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label"></label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

@endsection