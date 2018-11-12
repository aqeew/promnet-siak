            <!-- Program Studi -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Program Studi</h1>
            <hr>

        <!-- eror jika tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>

        <?php echo form_open("C_Prodi/ubah/".$prodi->id_prodi); ?>
            <table cellpadding="8">
                <tr>
                    <td>ID Prodi</td>
                    <td><input type="text" name="input_id_prodi" value="<?php echo set_value('input_id_prodi', $prodi->id_prodi); ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Prodi</td>
                    <td><input type="text" name="input_nama_prodi" value="<?php echo set_value('input_nama_prodi', $prodi->nama_prodi); ?>"></td>
                </tr>
                <tr>
                    <td>Akreditasi</td>
                    <td><input type="text" name="input_akreditasi" value="<?php echo set_value('input_akreditasi', $prodi->akreditasi); ?>"></td>
                </tr>
            </table>
                
            <hr>
            <input type="submit" name="submit" value="Ubah">
            <a href="<?php echo base_url("C_Prodi/index"); ?>"><input type="button" value="Batal"></a>
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>  
        </div>
        
        
    </div>