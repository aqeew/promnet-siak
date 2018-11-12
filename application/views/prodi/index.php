            <!-- Program Studi -->  
            <div class="content" style="padding-top: 70px; padding-left: 100px;">
                <div class="container">
                    <div class="table-wrapper">

            <h1>Data Program Studi</h1>
            <hr>

            <table id="tablenya" border="1" cellpadding="7">
                <tr>
                    <th>ID Prodi</th>
                    <th>Nama Prodi</th>
                    <th>Akreditasi</th>
                </tr>

                <?php
                if( ! empty($prodi)){
                    foreach($prodi as $dataprodi){
                        echo "<tr>
                        <td>".$dataprodi->id_prodi."</td>
                        <td>".$dataprodi->nama_prodi."</td>
                        <td>".$dataprodi->akreditasi."</td>
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