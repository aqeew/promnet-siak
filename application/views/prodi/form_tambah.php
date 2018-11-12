            <!-- Program Studi -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;"> 
                <div class="container">
                    <div class="table-wrapper">
                        <div class="modal-dialog">
                                    <div class="modal-content">
                                     <!-- eror jika tidak valid -->
                                    <div style="color: red;"><?php echo validation_errors(); ?></div>

                                <?php echo form_open("C_Prodi/tambah"); ?>
                                        <div class="modal-header">                      
                                                <h4 class="modal-title">Add Employee</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">                    
                                                <div class="form-group">
                                                    <label>ID Prodi</label>
                                                    <input type="text" class="form-control" name="input_id_prodi" value="<?php echo set_value('input_id_prodi'); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Prodi</label>
                                                    <input type="text" class="form-control" name="input_nama_prodi" value="<?php echo set_value('input_nama_prodi'); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Akreditasi</label>
                                                    <input type="text" class="form-control" name="input_akreditasi" value="<?php echo set_value('input_akreditasi'); ?>"  required>
                                                </div>                 
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="submit" value="Simpan">
                                    <a href="<?php echo base_url("C_Prodi/index"); ?>"><input type="button" value="Batal"></a>
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