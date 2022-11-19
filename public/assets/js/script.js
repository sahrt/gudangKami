$(function (){
     
    $('.tombolAnswer1').on('click', function (){
        $('#fromTittle').html('Berapa Bulan Sebelum Kelulusan ? ');
    })
    $('.tombolAnswer2').on('click', function (){
        $('#fromTittle').html('Berapa Bulan Sesudah Kelulusan ? ');
    })
    $('.tombolAnswer3').on('click', function (){
        $('#fromTittle').html('Dimana anda Melanjutkan Kuliah ? ');
    })
    $('.tombolAnswer4').on('click', function (){
        $('#fromTittle').html(' Alasan Belum Berkerja ? ');
    })
    $('.wirausaha').on('click', function (){
        $('#yesOrNo').html('<div class="title pt-4"><h6>Apakah Wirausaha anda memiliki landasan hukum ?</h6></div><div class=" label-background form-check border rounded yes-button"  style="padding:5px;"><button class="btn yes-button"  type="button"><input type="radio" name="biaya" id="from-AFIRMASI" value="Tidak Bekerja"><label class="form-check-label" for="from-AFIRMASI" >yes</label> </button></div>  <div class=" no-button label-background form-check border rounded"   style="padding:5px;"><button class="btn no-button"  type="button"><input type="radio" name="biaya" id="from-AFIRMASI" value="Tidak Bekerja"><label class="form-check-label" for="from-AFIRMASI" >No</label> </button></div>');
    })

    $('.yes-button').on('click', function (){
        $('#lesensi').html('<div class= "mb-3"><label for="recipient-name" class="col-form-label">Apa Nama Wirausaha Anda ? </label><input type="text" class="form-control" id="recipient-name"></div>   <div class="mb-3"><label for="recipient-name" class="col-form-label">Bidang Wirausaha yang anda jalani saat ini?</label><input type="text" class="form-control" id="recipient-name"></div>');
    })
    $('.no-button').on('click', function (){
        $('#lesensi').html(' <div class="mb-3"><label for="recipient-name" class="col-form-label">Bidang Wirausaha yang anda jalani saat ini?</label><input type="text" class="form-control" id="recipient-name"></div>');
    })
});