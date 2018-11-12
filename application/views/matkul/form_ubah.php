            <!-- Mata Kuliah -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Mata Kuliah</h1>
            <hr>

        <!-- eror jika tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>

        <?php echo form_open("C_Matkul/ubah/".$matkul->id_matkul); ?>
            <table cellpadding="8">
                <tr>
                    <td>ID Matkul</td>
                    <td><input type="text" name="input_id_matkul" value="<?php echo set_value('input_id_matkul', $matkul->id_matkul); ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="input_nama_matkul" value="<?php echo set_value('input_nama_matkul', $matkul->nama); ?>"></td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td><input type="text" name="input_sks" value="<?php echo set_value('input_sks', $matkul->angkatan); ?>"></td>
                </tr>
            </table>
                
            <hr>
            <input type="submit" name="submit" value="Ubah">
            <a href="<?php echo base_url("C_Matkul/index"); ?>"><input type="button" value="Batal"></a>
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>  
        </div>
        
        
    </div>