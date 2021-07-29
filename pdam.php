<?php
class PDAM 
{
    public $id, $nama. $jumlah_penggunaan;
    public function __construct getBiaya($id, $nama. $jumlah_penggunaan)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->jumlah_penggunaan = $jumlah_penggunaan;
    }
}

public function getBiaya()
    {
        if ($this->tagihan < 2000000) {
            $biaya = $this->jalur->spp[0] + $this->jalur->dsp[0];
            return $biaya;
        }
        elseif ($this->tagihan >= 2000000 && $this->pendapatan <= 10000000) {
            $biaya = $this->jalur->spp[1] + $this->jalur->dsp[1];
            return $biaya;
        }
        elseif ($this->tagihan > 10000000) {
            $biaya = $this->jalur->spp[2] + $this->jalur->dsp[2];
            return $biaya;
        }
        elseif ($this->tagihan >= 2000000 && $this->pendapatan <= 10000000) {
            $biaya = $this->jalur->spp[1] + $this->jalur->dsp[1];
            return $biaya;
        }
        elseif ($this->ptagihan > 10000000) {
            $biaya = $this->jalur->spp[2] + $this->jalur->dsp[2];
            return $biaya;
?>