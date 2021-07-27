<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = "transaksi";
    protected $useTimestamps = true;
    // protected $returnType = "object";
    protected $allowedFields = ['tanggal', 'id_pesan', 'id_user', 'ppn', 'total_bayar'];
}
