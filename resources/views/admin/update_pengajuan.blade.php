<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.component.css')
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        
        }
        .h2font{
            font-size: 35px;
            padding-bottom: 40px;
        }

    </style>

  </head>
  <body>
    @include('sweetalert::alert')
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.component.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.component.header')
        <!-- partial -->

    <!-- container-scroller -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="div_center">
                <h2 class="h2font">Tambah Pengajuan</h2>
                <form action="{{ url('/update_pengajuan_confirm', $pengajuan->id) }}" method="POST" enctype="multipart/form-data">
                
                  @csrf
                  <div>
                    <label>Perihal Kejadian</label>
                    <input class="input_color" type="text" name="perihal" placeholder="Harus di Inputkan" value="{{ $pengajuan->perihal }}">
                  </div>
                  <div>
                    <label>Waktu Kejadian</label>
                    <input class="input_color" type="date" name="waktu_kejadian" placeholder="Harus di Inputkan" value="{{ $pengajuan->waktu_kejadian }}">
                  </div>
                  <div>
                    <label>Lokasi Kejadian</label>
                    <input class="input_color" type="text" name="lokasi" placeholder="Harus di Inputkan" value="{{ $pengajuan->lokasi }}">
                  </div>
                  <div>
                    <label>Uraian Lengkap</label>
                    <textarea name="uraian" id="" cols="30" rows="10" class="input_color" value="{{ $pengajuan->uraian }}"></textarea>
                  </div>
                  <div>
                    <label>Bukti untuk Pendukung</label>
                    <input class="input_color" type="file" name="bukti" placeholder="Harus di Inputkan" value="{{ $pengajuan->bukti }}">
                  </div>
                  <br><br>
                   <input type="submit" name="submit" value="Kirim">
                </form>
            </div>
            
        </div>
        
    </div>
    <!-- plugins:js -->
    @include('admin.component.script')
    <!-- End custom js for this page -->
  </body>
</html>



