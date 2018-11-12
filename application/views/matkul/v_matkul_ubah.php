            <!-- Mata Kuliah -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Mata Kuliah</h1>
            <hr>

            <table id="tablenya" border="1" cellpadding="7">
                <tr>
                    <th>ID Matkul</th>
                    <th>Nama Matkul</th>
                    <th>SKS</th>
                    <th colspan="2">Aksi</th>
                </tr>

                <?php
                if( ! empty($matkul)){
                    foreach($matkul as $datamatkul){
                        echo "<tr>
                        <td>".$datamatkul->id_matkul."</td>
                        <td>".$datamatkul->nama_matkul."</td>
                        <td>".$datamatkul->sks."</td>
                        <td><a href='".base_url("c_matkul/ubah/".$datamatkul->id_matkul)."'>Ubah</a></td>
                        <td><a href='".base_url("c_matkul/hapus/".$datamatkul->id_matkul)."'>Hapus</a></td>
                        </tr>";
                    }
                }else{ 
                    echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                }
                ?>
            </table>
        </div>
        </div>
        </div>
        </div>  
        
        
    </div>