            <!-- Mahasiswa -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;"> 
                <div class="container">
                    <div class="table-wrapper">
                        <div class="modal-dialog">
                                    <div class="modal-content">
                                     <!-- eror jika tidak valid -->
                                    <div style="color: red;"><?php echo validation_errors(); ?></div>

                                <?php echo form_open("C_Mahasiswa/tambah"); ?>
                                        <div class="modal-header">                      
                                                <h4 class="modal-title">Add Employee</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">                    
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <input type="text" class="form-control" name="input_nim" value="<?php echo set_value('input_nim'); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="input_nama" value="<?php echo set_value('input_nama'); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Angkatan</label>
                                                    <input type="text" class="form-control" name="input_angkatan" value="<?php echo set_value('input_angkatan'); ?>"  required>
                                                </div>                 
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="submit" value="Simpan">
                                    <a href="<?php echo base_url("C_Mahasiswa/index"); ?>"><input type="button" value="Batal"></a>
                                            </div>
                                        </form>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>

        </div>
        </div>
        </div>
        </div>
        </div>