@extends ('layouts.sidebar')

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>      

<style>
label{
   font-weight: bold;

}

</style>
 <div class="wrapper">

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
             <a class="navbar-brand" href="{{ url('/home') }}"><img src="/img/logo unpaders.png" width="150" height="40" style="margin-left:30px;"></a>
             
            </div>

            <ul class="list-unstyled components"  style="text-align: center">
                <li>
                    <a href="{{url('/artikel')}}">Artikel</a>
                </li>
                <li>
                    <a href="{{url('/belanjaumum')}}">Belanja</a>
                </li>
                <li>
                    <a href="{{url('/')}}">Logout</a>
                </li>
            </ul>
        </nav>

 <div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn">
               <i class="fa fa-align-justify"></i>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/profil')}}"><img src="/img/user.png"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card">
     <div class="card-header" style="background-color: #FFFFFF;">
        <div class="row align-items-center">
            <div class="col-md-10">
                SUNTING PROFIL
            </div>
        </div>
    </div>
    <div class="card-body">
        <form class="form-horizontal">
			<div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="nama">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" > 
                    </div>
                </div>
			</div>
			<div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat">
                    </div>
                </div>
			</div>
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">No. HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="alamat">
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Fakultas</label>
                    <div class="col-sm-10">
                    <label for="country"></label>
                        <select id="country" name="country" class="form-control">
                        <option value="australia">KEDOKTERAN</option>
                        <option value="canada">KEDOKTERAN GIGI</option>
                        <option value="canada">KEPERAWATAN</option>
                        <option value="canada">FARMASI</option>
                        <option value="usa">MATEMATIKA & IPA</option>
                        <option value="usa">PERIKANAN 7 ILMU KELAUTAN</option>
                        <option value="usa">TEKNOLOGI INDUSTRI PERTANIAN</option>
                        <option value="usa">PERTANIAN</option>
                        <option value="usa">PSIKOLOGI</option>
                        <option value="canada">PETERNAKAN</option>
                        <option value="usa">TEKNIK GEOLOGI</option>
                        <option value="usa">ILMU SOSIAL & ILMU POLITIK</option>
                        <option value="usa">EKONOMI & BISNIS</option>
                        <option value="usa">ILMU BUDAYA (SASTRA)</option>
                        <option value="usa">ILMU KOMUNIKASI</option>
                        <option value="usa">HUKUM</option>
                        <option value="usa">SEKOLAH PASCASARJANA</option>
                        </select>
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Angkatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat">
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Foto Profil</label>
                    <div class="col-sm-10">
                        <script>$('.file-upload').file_upload();</script>
                       <div class="file-upload-wrapper">
                        <input type="file" id="input-file-now-custom-2" class="file-upload"
                        data-height="500" />
                        </div>
                        <a href="#" style="color: #18B5FC">Hapus Foto Profil</a>
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Ubah Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat">
                    </div>
                </div>
			</div>			
			<button type="submit" class="btn btn-style"><a href="{{url('/profil')}}">Kirim</a></button>
            <button type="cancel" class="btn btn-stylered">Batal</button>
		</form>		
    </div>

    </div>
    </div>