            <!-- Dosen -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Dosen</h1>
            <hr>

            <table id="tablenya" border="1" cellpadding="7">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                </tr>

                <?php
                if( ! empty($dosen)){
                    foreach($dosen as $datadosen){
                        echo "<tr>
                        <td>".$datadosen->nip."</td>
                        <td>".$datadosen->nama."</td>
                        <td>".$datadosen->telp."</td>
                        <td>".$datadosen->alamat."</td>
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