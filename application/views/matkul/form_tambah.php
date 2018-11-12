            <!-- Mata Kuliah -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;"> 
                <div class="container">
                    <div class="table-wrapper">
                        <div class="modal-dialog">
                                    <div class="modal-content">
                                     <!-- eror jika tidak valid -->
                                    <div style="color: red;"><?php echo validation_errors(); ?></div>

                                <?php echo form_open("C_Matkul/tambah"); ?>
                                        <div class="modal-header">                      
                                                <h4 class="modal-title">Add Employee</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">                    
                                                <div class="form-group">
                                                    <label>ID Matkul</label>
                                                    <input type="text" class="form-control" name="input_id_matkul" value="<?php echo set_value('input_id_matkul'); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Matkul</label>
                                                    <input type="text" class="form-control" name="input_nama_matkul" value="<?php echo set_value('input_nama_matkul'); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>SKS</label>
                                                    <input type="text" class="form-control" name="input_sks" value="<?php echo set_value('input_sks'); ?>"  required>
                                                </div>                 
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="submit" value="Simpan">
                                    <a href="<?php echo base_url("C_Matkul/index"); ?>"><input type="button" value="Batal"></a>
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