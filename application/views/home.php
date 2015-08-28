<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Travelbaik | pelayanan baik dengan harga terbaik</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/travel.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    
    
</head>
 
<body>
    <div class="container-large_">
        <div class="container">
            <!-- HEADER OPEN -->
            <div class="row header_">
                <div class="col-md-4 remove_padding">
                    <a href=""> 
                        <img class="logoimg" src="<?php echo base_url() ?>assets/images/logo-h.png"/>
                    </a>
                </div>
                <div class="col-md-8 remove_padding">
                    <div class="header-top hidden-sm hidden-xs">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-2">Cara Pemesanan</div>
                            <div class="col-md-3">Cek Pemesanan</div>
                            <div class="col-md-4">(031) 211 355</div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-1">Travel</div>
                            <div class="col-md-2">Pesawat</div>
                            <div class="col-md-2">Tour</div>
                            <div class="col-md-2">Sewa Mobil</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HEADER CLOSE-->=
            
            <!-- SLIDER -->
            <div class="row">
                <div class="col-md-12 slider"></div>
            </div>            
            <!-- SLIDER CLOSE -->
            
            <!-- SEARCH BOX OPEN -->
            <div class="row">
                <div class="col-md-12 searchbox" >
                
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav_" >
                            <li class="active"><a href="#pesawat" data-toggle="tab">PESAWAT</a></li>
                            <li ><a href="#travel" data-toggle="tab">TRAVEL</a></li>
                            <li ><a href="#sewamob" data-toggle="tab">SEWA MOBIL</a></li>
                            <li ><a href="#tour" data-toggle="tab">PAKET TOUR</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent_">
                            <!---------------------PESAWAT SEARCH TAB----------------------- -->
                          <div class="tab-pane active" id="pesawat">
                              <div class="row">
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Kota Asal</div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border"/>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Surabaya</a></li>
                                                    <li><a href="#">Jakarta</a></li>
                                                  </ul>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Kota Tujuan</div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border"/>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Tanggal Keberangkatan</div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border" />
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="row" style="padding: 10px">
                                  <div class="col-md-4 ">
                                          <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group" >
                                                    <input type="text" class="form-control remove_border" />
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2 <span class="caret"></span></button>
                                                    </div><!-- /btn-group -->
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="input-group ">
                                                    <input type="text" class="form-control remove_border" />
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1 <span class="caret"></span></button>
                                                    </div><!-- /btn-group -->
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="input-group ">
                                                    <input type="text" class="form-control remove_border" />
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">0 <span class="caret"></span></button>
                                                    </div><!-- /btn-group -->
                                                  </div>
                                              </div>
                                          </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div style="float: right" class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn remove_border themecolor">Sekali Jalan</button>
                                            <button type="button" class="btn remove_border">Pulang Pergi</button>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div style="float: right; padding-right: 0px;" >
                                            <button type="button" class="btn remove_border themecolor">Cari Penerbangan</button>
                                            
                                      </div>
                                  </div>
                              </div>


                          </div>
                          <div class="tab-pane" id="travel">
                              <!---------------------TRAVEL SEARCH TAB----------------------- -->
                            
                              <div class="row">
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Kota Berangkat</div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border"/>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Surabaya</a></li>
                                                    <li><a href="#">Jakarta</a></li>
                                                  </ul>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Kota Tujuan</div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border"/>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Tanggal </div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border" />
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="row" style="padding: 10px">
                                  <div class="col-md-4 ">
                                         
                                  </div>
                                  <div class="col-md-4">
                                      
                                  </div>
                                  <div class="col-md-4">
                                      <div style="float: right; padding-right: 0px;" >
                                            <button type="button" class="btn remove_border themecolor">Cari Travel</button>
                                            
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="sewamob">
                            <!---------------------MOBIL SEARCH TAB----------------------- -->
                            
                              <div class="row">
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Kota Pencarian</div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border"/>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Surabaya</a></li>
                                                    <li><a href="#">Jakarta</a></li>
                                                  </ul>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Tanggal Sewa</div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border"/>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 padding10">
                                      <div class="konten3_">
                                          <div class="head_konten3">Lama Sewa </div>
                                          <div class="input-group isi_konten3">
                                            <input type="text" class="form-control remove_border" />
                                            <div class="input-group-btn">
                                                <button type="button" class="btn dropdown-toggle themecolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></button>
                                            </div><!-- /btn-group -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="row" style="padding: 10px">
                                  <div class="col-md-4 ">
                                         
                                  </div>
                                  <div class="col-md-4">
                                      <div style="float: right" class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn remove_border themecolor">Dengan Sopir</button>
                                            <button type="button" class="btn remove_border">Tanpa Sopir</button>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div style="float: right; padding-right: 0px;" >
                                            <button type="button" class="btn remove_border themecolor">Cari Mobil</button>
                                            
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tour">
                          
                          </div>
                        </div>
                    </div>
            </div>
            <!-- SEARCH BOX CLOSE -->
            
            <!-- CONTENT OPEN -->
            <div class="row">
                <div class="col-md-12 content_">
                    <div class="row head_table">
                        <div class="col-md-4" style="padding-top: 10px; font-weight: bold" >HASIL PENCARIAN</div>
                        <div class="col-md-8" style="padding: 0;" >
                             <button style="float: right" type="button" class="btn remove_border themecolor">Ubah Pencarian</button>
                             <p style="float: right;padding-top: 10px; margin-right: 10px;"> Pesawat | Surabaya ke Jakarta | 15 Desember 2015</p>
                           
                        </div>
                    </div>
                    <div class="row" style="margin-top: 5px; height: 50px;">
                        <div class="kotakrekom">
                            <div class="rekom_harga">
                                <h4>Senin, 27 Des</h4>
                                <h5>Rp. 199.000,-</h5>
                            </div>
                        </div>
                        <div class="kotakrekom">
                            <div class="rekom_harga">
                                <h4>Senin, 27 Des</h4>
                                <h5>Rp. 199.000,-</h5>
                            </div>
                        </div>
                        <div class="kotakrekom">
                            <div class="rekom_harga">
                                <h4>Senin, 27 Des</h4>
                                <h5>Rp. 199.000,-</h5>
                            </div>
                        </div>
                        <div class="kotakrekom">
                            <div class="rekom_harga_selected">
                                <h4>Senin, 27 Des</h4>
                                <h5>Rp. 199.000,-</h5>
                            </div>
                        </div>
                        <div class="kotakrekom">
                            <div class="rekom_harga">
                                <h4>Senin, 27 Des</h4>
                                <h5>Rp. 199.000,-</h5>
                            </div>
                        </div>
                        <div class="kotakrekom">
                            <div class="rekom_harga">
                                <h4>Senin, 27 Des</h4>
                                <h5>Rp. 199.000,-</h5>
                            </div>
                        </div>
                        <div class="kotakrekom">
                            <div class="rekom_harga">
                                <h4>Senin, 27 Des</h4>
                                <h5>Rp. 199.000,-</h5>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row" style="margin-top: 15px;">
                        
                        <div class="kotakfilter">
                            <div class="filter_data">
                                <h4>Pilih Pemberhentian</h4>
                            </div>
                        </div>
                        <div class="kotakfilter">
                            <div class="filter_data">
                                <h4>Pilih Waktu</h4>
                            </div>
                        </div>
                        <div class="kotakfilter">
                            <div class="filter_data">
                                <h4>Pilih Maskapai</h4>
                            </div>
                        </div>
                        <div class="kotakfilter">
                            <div class="filter_data">
                                <h4>Pilih Tanggal</h4>
                            </div>
                        </div>
                        <div class="kotakfilter">
                            <div class="filter_data">
                                <h4>Pilih Harga</h4>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row" style="margin-top: 30px;">
                       
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            
                            <?php for($i=0;$i<13;$i++) { ?>
                            <div class="panel kotakdata" style="border-radius: inherit">
                                <div class="kotak_datatabel" data-toggle="collapse" data-parent="#accordion" data-target="#data<?php echo $i ?>">
                                    
                                    <div class="data_maskapai">
                                        <div><center><img src="<?php echo base_url() ?>assets/images/garuda.png"/></center></div>
                                    </div>
                                    <div class="data_maskapai">
                                        <div><h3>GA-988</h3></div>
                                    </div>
                                    <div class="data_maskapai">
                                        <div>
                                            <h4>15.30</h4>
                                            <h5>Surabayas</h5>
                                        </div>
                                    </div>
                                    <div class="data_maskapai">
                                        <div>
                                            <h4>17.10</h4>
                                            <h5>Jakartas</h5>
                                        </div>
                                    </div>
                                    <div class="data_maskapai">
                                        <div>
                                            <h4>1j 40m</h4>
                                            <h5>Langsung</h5>
                                        </div>
                                    </div>
                                    <div class="data_maskapai2">
                                        <div><center><img src="<?php echo base_url() ?>assets/images/facility.png"/></center></div>
                                    </div>
                                    <div class="data_maskapai2">
                                        <div>
                                            <h2>IDR 300.000,-</h2>
                                            <h6><del>IDR 450.000</del></h6>
                                        </div>
                                    </div>
                                    <div class="button_pesan" >
                                        <div></div>
                                    </div>
                                    
                                </div>
                                <div id="data<?php echo $i ?>" class="collapse" >
                                  <div class="kotak_colaps">
                                      <div class="row"></div>
                                  </div>
                                </div>
                            </div>
                            <?php } ?>
                          </div> 
                    </div>
                </div>
            </div>   
            <div class="row subscribe_" style="background: #eee; height: 80px;margin-bottom: 10px;">
                <div class="col-md-6">
                    <h3>Daftarkan email anda sekarang untuk mendapatkan diskon Rp 100.000,-</h3>
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control remove_border" id="exampleInputEmail3" placeholder="Email"/>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn remove_border themecolor">Subscribe</button>
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="footer_large">
        <div class="footer_page">
            <div class="row">
                <div class="col-md-3">
                    <ul class="group_list_">
                        <li class="group_list_item_head_">TIKET PESAWAT MURAH</li>
                        <li class="group_list_item_">Tiket Murah Jakarta Bali</li>
                        <li class="group_list_item_">Tiket Murah Surabaya Jakarta</li>
                        <li class="group_list_item_">Tiket Murah Surabaya Bandung</li>
                        <li class="group_list_item_">Tiket Murah Surabaya Bali</li>
                        <li class="group_list_item_">Tiket Murah Jakarta Bali</li>
                        <li class="group_list_item_">Tiket Murah Surabaya Jakarta</li>
                        <li class="group_list_item_">Tiket Murah Surabaya Bandung</li>
                        <li class="group_list_item_">Tiket Murah Surabaya Bali</li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="group_list_">
                        <li class="group_list_item_head_">Tiket Travel Murah</li>
                        <li class="group_list_item_">Tiket Travel Jakarta Bandung</li>
                        <li class="group_list_item_">Tiket Travel Jakarta Jogjakarta</li>
                        <li class="group_list_item_">Tiket Travel Surabaya Malang</li>
                        <li class="group_list_item_">Tiket Travel Malang Surabaya</li>
                        <li class="group_list_item_">Tiket Travel Jakarta Palembang</li>
                        <li class="group_list_item_">Tiket Travel Jakarta Bandung</li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="group_list_">
                        <li class="group_list_item_head_">Sewa Mobil Murah</li>
                        <li class="group_list_item_">Sewa Mobil Murah Jakarta</li>
                        <li class="group_list_item_">Sewa Mobil Murah Bandung</li>
                        <li class="group_list_item_">Sewa Mobil Murah Surabaya</li>
                        <li class="group_list_item_">Sewa Mobil Murah Bali</li>
                        <li class="group_list_item_">Sewa Mobil Murah Malang</li>
                        <li class="group_list_item_">Sewa Mobil Murah Balikpapan</li>
                        <li class="group_list_item_">Sewa Mobil Murah Makasar</li>
                        <li class="group_list_item_">Sewa Mobil Murah Mataram</li>
                        <li class="group_list_item_">Sewa Mobil Murah Jogjakarta</li>
                        <li class="group_list_item_">Sewa Mobil Murah Solo</li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="group_list_">
                        <li class="group_list_item_head_">Paket Tour Wisata</li>
                        <li class="group_list_item_">Paket Tour Bali</li>
                        <li class="group_list_item_">Paket Tour Jogjakarta</li>
                        <li class="group_list_item_">Paket Tour Jakarta Bandung</li>
                        <li class="group_list_item_">Paket Tour Lombok</li>
                        <li class="group_list_item_">Paket Tour Jogjakarta</li>
                        <li class="group_list_item_">Paket Tour Jakarta Bandung</li>
                        <li class="group_list_item_">Paket Tour Lombok</li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>