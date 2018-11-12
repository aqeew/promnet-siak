            <!-- Mahasiswa -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Mahasiswa</h1>
            <hr>

            <table id="tablenya" border="1" cellpadding="7">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th colspan="2">Aksi</th>
                </tr>

                <?php
                if( ! empty($dosen)){
                    foreach($dosen as $datadosen){
                        echo "<tr>
                        <td>".$datadosen->nip."</td>
                        <td>".$datadosen->nama."</td>
                        <td>".$datadosen->telp."</td>
                        <td>".$datadosen->alamat."</td>
                        <td><a href='".base_url("c_dosen/ubah/".$datadosen->nip)."'>Ubah</a></td>
                        <td><a href='".base_url("c_dosen/hapus/".$datadosen->nip)."'>Hapus</a></td>
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