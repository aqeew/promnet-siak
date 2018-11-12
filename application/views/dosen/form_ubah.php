            <!-- Dosen -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Dosen</h1>
            <hr>

        <!-- eror jika tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>

        <?php echo form_open("C_Dosen/ubah/".$dosen->nip); ?>
            <table cellpadding="8">
                <tr>
                    <td>nip</td>
                    <td><input type="text" name="input_nip" value="<?php echo set_value('input_nip', $dosen->nip); ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $dosen->nama); ?>"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="input_telp" value="<?php echo set_value('input_telp', $dosen->telp); ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="input_alamat"><?php echo set_value('input_alamat', $dosen->alamat); ?></textarea></td>
                </tr>
            </table>
                
            <hr>
            <input type="submit" name="submit" value="Ubah">
            <a href="<?php echo base_url("C_Dosen/index"); ?>"><input type="button" value="Batal"></a>
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>  
        </div>
        
        
    </div>