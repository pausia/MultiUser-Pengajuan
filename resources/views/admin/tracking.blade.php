<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.component.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
            <div class="row ">
                <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Tracking Pengaduan</h4>
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                            <th> Bukti </th>
                            <th> Tanggal Pengaduan </th>
                            <th> Perihal Aduan </th>
                            <th> Status </th>
                            <th> Aksi </th>
                            </tr>
                        </thead>
                        @foreach ($data as $dt)
                            
                        
                        <tbody>

                            <td><img src="{{ asset('admin.images/' . $dt->bukti) }}" style="max-width: 100px;"></td>
                            <td> {{ $dt->waktu_kejadian }} </td>
                            <td> {{ $dt->perihal }} </td>
                            <td>
                                <div class="badge badge-outline-success">{{ $dt->status }}</div>
                            </td>
                                <td> <a href="{{ url('update_tracking', $dt->id) }}"> <input name="submit" class="nav-link btn btn-warning create-new-button" type="submit" value="Edit"></a></td>
                                <td> <a onclick="confirmation(event)" href="{{ url('delete_tracking', $dt->id) }}"><input name="submit" class="nav-link btn btn-danger create-new-button" type="submit" value="Hapus"></a></td>
                            </tr>
    
                        </tbody>
                        @endforeach
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    @include('admin.component.script')
    <script>
        function confirmation(ev) {
          ev.preventDefault();
          var urlToRedirect = ev.currentTarget.getAttribute('href');  
          console.log(urlToRedirect); 
          swal({
              title: "Are you sure to cancel this product",
              text: "You will not be able to revert this!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willCancel) => {
              if (willCancel) {
  
  
                   
                  window.location.href = urlToRedirect;
                 
              }  
  
  
          });
  
          
      }
  </script>
    <!-- End custom js for this page -->
  </body>
</html>
