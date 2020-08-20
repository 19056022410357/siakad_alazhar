<!DOCTYPE html>
<html lang="en">
<head>
        <script type="text/javascript">	
            $(document).ready(function(){
                $('#tabs div').hide();
                $('#tabs div:first').show();
                $('#tabs ul li:first').addClass('active');
                $('#tabs ul li a').click(function(){ 
                $('#tabs ul li').removeClass('active');
                    $(this).parent().addClass('active'); 
                    var currentTab = $(this).attr('href'); 
                    $('#tabs div').hide();
                    $(currentTab).show();
                    return false;
                });
                $(".yoxview").yoxview({videoSize: { maxwidth: 720, maxheight: 560 }}); 
                $("#contentExample").yoxview({ skin: "top_menu", allowInternalLinks: true });
            });				
            document.write('<style>.noscript { display: none; }</style>');			
        </script>
</head>       
</header>
<body>
    <section id="content">
        <div class="container">
            <div class="section-title">            
                <div class="wrapper">
                    <h2>SANTRI PONDOK PESANTREN DARUSSALAM</h2>
                </div>           
            </div>       
            <div class="main-title">
                <h5>DATA SANTRI DI PONDOK PESANTREN</h5>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="tabs" class="div">
                        <ul>
                            <li class=""><a href="#tab-1">KMI</a></li>
                            <li class=""><a href="#tab-1">SMA</a></li>
                            <li class=""><a href="#tab-2">SMP</a></li>
                            <li class=""><a href="#tab-3">SD</a></li>
                            <li class=""><a href="#tab-4">TK</a></li>
                        </ul>
                        
                        <!-- SMA -->
                        <div id="tab-1" class="div" style="display: block;">					  
                            <table class="table_border" width="100%" rules="all">			       
                                <tbody><tr>
                                    <td width="15">No.</td>
                                    <td width="65">Kelas</td>
                                    <td width="40">Nama Rombel</td>
                                    <td width="65">Wali Kelas</td>
                                    <td width="45">L</td>
                                    <td width="45">P</td>
                                    <td width="45">Jumlah</td> 
                                </tr>
                                <tr>
                                    <td width="15">2.</td>
                                    <td width="65">Ir. Marbudi</td>
                                    <td width="40">647382764753626</td>
                                    <td width="65">Mapel IPA</td>
                                    <td width="45">GTY</td>
                                    <td width="50">Detail<a href="">(.....)</a></td>  
                                </tr>
                                <tr>
                                    <td width="15">3.</td>
                                    <td width="65">Ir. Marbudi</td>
                                    <td width="40">647382764753626</td>
                                    <td width="65">Mapel IPA</td>
                                    <td width="45">GTY</td>
                                    <td width="50">Detail<a href="">(.....)</a></td>  
                                </tr>    
                                <tr>
                                    <td width="15">4.</td>
                                    <td width="65">Ir. Marbudi</td>
                                    <td width="40">647382764753626</td>
                                    <td width="65">Mapel IPA</td>
                                    <td width="45">GTY</td>
                                    <td width="50">Detail<a href="">(.....)</a></td>  
                                </tr>    
                                <tr>
                                    <td width="15">1.</td>
                                    <td width="65">Ir. Marbudi</td>
                                    <td width="40">647382764753626</td>
                                    <td width="65">Mapel IPA</td>
                                    <td width="45">GTY</td>
                                    <td width="50">Detail<a href="">(.....)</a></td>  
                                </tr>                     
                            </tbody></table>
                        </div>
                        
                        <!-- SMP -->
                        <div id="tab-2" class="div" style="display: block;">					  
                            <table class="table_noborder" width="100%">			       
                                <tbody><tr>
                                    <td width="115">NSS</td>
                                    <td width="10">:</td>
                                    <td width="250">202056030005</td>                      
                                </tr>
                                <tr>
                                    <td>NPSN</td>
                                    <td>:</td>
                                    <td>20532644</td>
                                </tr>
                                <tr>
                                    <td>Nama Sekolah </td>
                                    <td>:</td>
                                    <td>SMP AL-AZHAR</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pendirian </td>
                                    <td>:</td>
                                    <td>28 Juli 1995</td>
                                </tr>
                                <tr>
                                    <td>Status Sekolah </td>
                                    <td>:</td>
                                    <td>Swasta</td>
                                </tr>
                                    <tr>
                                        <td>Akreditasi</td>
                                        <td>:</td>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <td>Sertifikasi</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                                                <tr>
                                    <td>Kepala Sekolah </td>
                                    <td>:</td>
                                    <td>KHOIRONUL MUBIN, M.Pd</td>
                                </tr>
                                <tr>
                                    <td>No. NPWP Lembaga </td>
                                    <td>:</td>
                                    <td>313732166604000</td>
                                </tr>
                                <!---->
                                                                    <tr>
                                        <td>Yayasan</td>
                                        <td>:</td>
                                        <td>PONDOK PESANTREN DARUSSALAM BEHJI             </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Alamat : JL. PESAREHAN BEJI NO. 1 PAKAL SURABAYA                      </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Pimpinan : NADHIR                      </td>
                                    </tr>                    
                                                                <tr>
                                    <td>Alamat Lembaga</td>
                                    <td>:</td>
                                    <td>Jl. PESAREHAN BEJI No.1 SURABAYA                       </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Kecamatan : Kec. Pakal</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Desa/kel : Pakal</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>RT 2 / RW 4 </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td> Surabaya  60196    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Telp 0317410171           , Fax                         </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>smpalazhar.beji@gmail.com                      </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>:</td>
                                    <td>sekolahalazharbehji.blogspot.co.id        <a href="http://sekolahalazharbehji.blogspot.co.id       " target="_bliank">[lihat website]</a></td>
                                </tr>                    
                            </tbody></table>
                        </div>
                        
                        <!--SD -->
                        <div id="tab-3" class="div" style="display: block;">					  
                            <table class="table_noborder" width="100%">			       
                                <tbody><tr>
                                    <td width="115">NSS</td>
                                    <td width="10">:</td>
                                    <td width="250">202056030005</td>                      
                                </tr>
                                <tr>
                                    <td>NPSN</td>
                                    <td>:</td>
                                    <td>20532644</td>
                                </tr>
                                <tr>
                                    <td>Nama Sekolah </td>
                                    <td>:</td>
                                    <td>SD AL-AZHAR BEHJI</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pendirian </td>
                                    <td>:</td>
                                    <td>28 Juli 1995</td>
                                </tr>
                                <tr>
                                    <td>Status Sekolah </td>
                                    <td>:</td>
                                    <td>Swasta</td>
                                </tr>
                                    <tr>
                                        <td>Akreditasi</td>
                                        <td>:</td>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <td>Sertifikasi</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                                                <tr>
                                    <td>Kepala Sekolah </td>
                                    <td>:</td>
                                    <td>UMMU WAROH, S.Pd</td>
                                </tr>
                                <tr>
                                    <td>No. NPWP Lembaga </td>
                                    <td>:</td>
                                    <td>313732166604000</td>
                                </tr>
                                <!---->
                                                                    <tr>
                                        <td>Yayasan</td>
                                        <td>:</td>
                                        <td>PONDOK PESANTREN DARUSSALAM BEHJI             </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Alamat : JL. PESAREHAN BEJI NO. 1 PAKAL SURABAYA                      </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Pimpinan : NADHIR                      </td>
                                    </tr>                    
                                                                <tr>
                                    <td>Alamat Lembaga</td>
                                    <td>:</td>
                                    <td>Jl. PESAREHAN BEJI No.1 SURABAYA                       </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Kecamatan : Kec. Pakal</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Desa/kel : Pakal</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>RT 2 / RW 4 </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td> Surabaya  60196    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Telp 0317410171           , Fax                         </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>smpalazhar.beji@gmail.com                      </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>:</td>
                                    <td>sekolahalazharbehji.blogspot.co.id        <a href="http://sekolahalazharbehji.blogspot.co.id       " target="_bliank">[lihat website]</a></td>
                                </tr>                    
                            </tbody></table>
                        </div>
                        
                        <!-- TK -->
                        <div id="tab-4" class="div" style="display: block;">					  
                            <table class="table_noborder" width="100%">			       
                                <tbody><tr>
                                    <td width="115">NSS</td>
                                    <td width="10">:</td>
                                    <td width="250">202056030005</td>                      
                                </tr>
                                <tr>
                                    <td>NPSN</td>
                                    <td>:</td>
                                    <td>20532644</td>
                                </tr>
                                <tr>
                                    <td>Nama Sekolah </td>
                                    <td>:</td>
                                    <td>TK AL-AZHAR BEHJI</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pendirian </td>
                                    <td>:</td>
                                    <td>28 Juli 1995</td>
                                </tr>
                                <tr>
                                    <td>Status Sekolah </td>
                                    <td>:</td>
                                    <td>Swasta</td>
                                </tr>
                                    <tr>
                                        <td>Akreditasi</td>
                                        <td>:</td>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <td>Sertifikasi</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                                                <tr>
                                    <td>Kepala Sekolah </td>
                                    <td>:</td>
                                    <td>MURTHOSIYAH, S.Pd</td>
                                </tr>
                                <tr>
                                    <td>No. NPWP Lembaga </td>
                                    <td>:</td>
                                    <td>313732166604000</td>
                                </tr>
                                <!---->
                                                                    <tr>
                                        <td>Yayasan</td>
                                        <td>:</td>
                                        <td>PONDOK PESANTREN DARUSSALAM BEHJI  </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Alamat : JL. PESAREHAN BEJI NO. 1 PAKAL SURABAYA  </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Pimpinan : NADHIR </td>
                                    </tr>                    
                                                                <tr>
                                    <td>Alamat Lembaga</td>
                                    <td>:</td>
                                    <td>Jl. PESAREHAN BEJI No.1 SURABAYA </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Kecamatan : Kec. Pakal</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Desa/kel : Pakal</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>RT 2 / RW 4 </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td> Surabaya  60196    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Telp 0317410171           , Fax</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>smpalazhar.beji@gmail.com </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>:</td>
                                    <td>sekolahalazharbehji.blogspot.co.id <a href="http://sekolahalazharbehji.blogspot.co.id       " target="_bliank">[lihat website]</a></td>
                                </tr>                    
                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>