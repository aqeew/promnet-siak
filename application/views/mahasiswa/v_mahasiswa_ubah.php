            <!-- Mahasiswa -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Mahasiswa</h1>
            <hr>

            <table id="tablenya" border="1" cellpadding="7">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th colspan="2">Aksi</th>
                </tr>

                <?php
                if( ! empty($mahasiswa)){
                    foreach($mahasiswa as $datamahasiswa){
                        echo "<tr>
                        <td>".$datamahasiswa->nim."</td>
                        <td>".$datamahasiswa->nama."</td>
                        <td>".$datamahasiswa->angkatan."</td>
                        <td><a href='".base_url("c_mahasiswa/ubah/".$datamahasiswa->nim)."'>Ubah</a></td>
                        <td><a href='".base_url("c_mahasiswa/hapus/".$datamahasiswa->nim)."'>Hapus</a></td>
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