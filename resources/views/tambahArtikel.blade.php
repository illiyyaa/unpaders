@extends ('layouts.sidebar') 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
label{
   font-weight: bold;

}
</style>


@section ('content')

  <div class="wrapper">

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
             <a class="navbar-brand" href="{{ url('/home') }}"><img src="/img/logo unpaders.png" width="150" height="40" style="margin-left:30px;"></a>
             
            </div>

            <ul class="list-unstyled components" style="text-align: center">
                <li class="active">
                    <a href="{{url('/artikel')}}">Artikel</a>
                </li>
                <li>
                    <a href="{{url('/belanja')}}">Belanja</a>
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
                TAMBAH ARTIKEL
            </div>
        </div>
    </div>
    <div class="card-body">
        <form class="form-horizontal">
			<div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="nama">Judul Atas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
			</div>
			<div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Judul Utama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat">
                    </div>
                </div>
			</div>
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Judul Bawah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-sm-12" id="alamat">
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Konten</label>
                    <div class="col-sm-10">    
                    <div class="panel-heading">  
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="New file">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Save">
                            <i class="fa fa-save"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Print">
                            <i class="fa fa-print"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Source code">
                            <i class="fa fa-code"></i> Source
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Bold">
                            <i class="fa fa-bold"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Italic">
                            <i class="fa fa-italic"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Underline">
                            <i class="fa fa-underline"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Strikethrough">
                            <i class="fa fa-strikethrough"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Cut">
                            <i class="fa fa-scissors"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Copy">
                            <i class="fa fa-copy"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Past">
                            <i class="fa fa-paste"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Undo">
                            <i class="fa fa-reply"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Redo">
                            <i class="fa fa-share"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align left">
                            <i class="fa fa-align-left"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align center">
                            <i class="fa fa-align-center"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align right">
                            <i class="fa fa-align-right"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align justify">
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Numbered list">
                            <i class="fa fa-list-ol"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Bulleted list">
                            <i class="fa fa-list-ul"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Link">
                            <i class="fa fa-link"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Unlink">
                            <i class="fa fa-unlink"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default"  data-toggle="tooltip" title="Picture">
                            <i class="fa fa-picture-o"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="HTML table">
                            <i class="fa fa-table"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Font">
                            <i class="fa fa-font"></i>
                        </button>
                    </div>
                    </div>
                     <textarea  class="col-sm-12 form-control" name="paragraph_text" rows="10"></textarea>                             
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Gambar</label>
                    <div class="col-sm-10">
                    <script>$('.file-upload').file_upload();</script>
                       <div class="file-upload-wrapper">
                        <input type="file" id="input-file-now-custom-2" class="file-upload"
                        data-height="500" />
                        </div>
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Keterangan Gambar</label>
                    <div class="col-sm-10">
                        <textarea class="col-sm-12 form-control" name="paragraph_text" rows="5"></textarea>  
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat">
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Kata Kunci</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat">
                    </div>
                </div>
			</div>	
            <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="alamat">Deskripsi</label>
                    <div class="col-sm-10">
                       <textarea class="col-sm-12 form-control" name="paragraph_text" rows="5"></textarea>  
                    </div>
                </div>
			</div>			
			<button type="submit" class="btn btn-style"><a href="{{url('/artikel')}}">Kirim</button>
            <button type="cancel" class="btn btn-stylered">Batal</button>
		</form>		
    </div>
</div>
</body>
@endsection
