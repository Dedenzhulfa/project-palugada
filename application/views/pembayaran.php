<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()){
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');    
                 ?>
            </div><br>

            <h5>Input Alamat Pengiriman dan Pembayaran</h5>  
            <form method="post" action="<?php echo base_url().'dashboard/proses_pesanan' ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>SiCepat</option>
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BNI     -XXXXXXXX</option>
                        <option>BRI     -XXXXXXXX</option>
                        <option>Mandiri -XXXXXXXX</option>
                        <option>BCA     -XXXXXXXX</option>
                        <option>BSI     -XXXXXXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>

            <?php 
        }else{
            echo "Anda belum memasukkan apa-apa ke keranjang";
        }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
