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
        <form action="{{ route('soal7-process') }}" method="post">
          @csrf
            <div class="title pt-4">
                <h4>7. Skill Yang Ingin Kamu Kembangkan</h4>
               </div>
            <div class="container"> 
              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="biaya-sendiri" style="width: 20px;">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Biaya Sendiri / Keluarga
                </label> 
              
                </button>
              </div>
       
              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="bidikmisi">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Beasiswa BidikMisi
                </label> 
              
                </button>
              </div>

              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="PPA">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Beasiswa PPA
                </label> 
              
                </button>
              </div>
            
                <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                  <button class="btn  button"  type="button">
                   <input type="radio" name="biaya" id="from-AFIRMASI" value="AFIRMASI">
                   <label class="form-check-label" for="from-AFIRMASI" >
                   Beasiswa AFIRMASI
                  </label> 
                
                  </button>
                </div>

                <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                  <button class="btn  button"  type="button">
                   <input type="radio" name="biaya" id="from-AFIRMASI" value="Swasta">
                   <label class="form-check-label" for="from-AFIRMASI" >
                    Beasiswa Perusahaan / Swasta
                  </label> 
                
                  </button>
                </div>

                <div class="  label-background form-check border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"  style="padding:5px; margin: 2px; ">
                  <button class="btn  button"  type="button">
                   <input type="radio" name="biaya" id="from-AFIRMASI" value="Swasta">
                   <label class="form-check-label" for="from-AFIRMASI" >
                    Lainya, Tuliskan
                  </label> 
                
                  </button>
                </div>

            <div class="button d-flex justify-content-between" style="margin-top: 20px; margin-left:10px; margin-right:10px;">
                  <a href="{{ route('soal6') }}">
                   <button type="button" class="btn btn-primary">Back</button>
                </a> 
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">finish</button>
              
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
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>

@endsection