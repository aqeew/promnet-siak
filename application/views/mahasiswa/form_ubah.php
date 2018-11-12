            <!-- Mahasiswa -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Mahasiswa</h1>
            <hr>

        <!-- eror jika tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>

        <?php echo form_open("C_Mahasiswa/ubah/".$mahasiswa->nim); ?>
            <table cellpadding="8">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="input_nim" value="<?php echo set_value('input_nim', $mahasiswa->nim); ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>"></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="text" name="input_angkatan" value="<?php echo set_value('input_angkatan', $mahasiswa->angkatan); ?>"></td>
                </tr>
            </table>
                
            <hr>
            <input type="submit" name="submit" value="Ubah">
            <a href="<?php echo base_url("C_Mahasiswa/index"); ?>"><input type="button" value="Batal"></a>
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>  
        </div>
        
        
    </div>