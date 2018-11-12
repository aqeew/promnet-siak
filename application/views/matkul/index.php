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
                </tr>

                <?php
                if( ! empty($matkul)){
                    foreach($matkul as $datamatkul){
                        echo "<tr>
                        <td>".$datamatkul->id_matkul."</td>
                        <td>".$datamatkul->nama_matkul."</td>
                        <td>".$datamatkul->sks."</td>
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