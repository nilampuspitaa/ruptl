



<br>
<section class="box">
    <header class="panel_header">
        <h2 class="title pull-left">Tambah Data Trafo</h2>
        
    </header>
    <div class="content-body">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="message"></div>
            <form id='form' method='post'>
                <div class="form-group">
                    <label class="form-label" for="inputnama">Nama Trafo</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="inputnama" name="inputnama">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="Beban">Beban</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="beban" name="beban">
                    </div>
                </div>
                <div class="form-group">
                     <button type='submit' class='btn btn-danger pull-right' id='batal' name='batal' onclick='batal();'>Batal</button>
                    <button type='button' class='btn btn-success pull-right' id='btnsimpan' name='btnsimpan' onclick='simpan();'>SIMPAN</button>
                    
                </div>
            </form>
        </div>


    </div>
</section>

