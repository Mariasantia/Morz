<?php
class Bahan 
{
    private static $data = [
        ["id" => 1, "nama" => "Kunyit", "jenis" => "Bahan utama", "deskripsi" => "Antioksidan, antiradang, meningkatkan sistem imun, meredakan nyeri haid", "harga" => 1500],
        ["id" => 2, "nama" => "Jahe", "jenis" => "Bahan utama", "deskripsi" => "Menghangatkan tubuh, meredakan nyeri otot, meningkatkan imun, mencegah mual", "harga" => 1200],
        ["id" => 3, "nama" => "Temulawak", "jenis" => "Bahan utama", "deskripsi" => "Melindungi hati, antiinflamasi, meningkatkan nafsu makan", "harga" => 2000],
        ["id" => 4, "nama" => "Kencur", "jenis" => "Bahan utama", "deskripsi" => "Meredakan nyeri, antibakteri, melancarkan pencernaan, meningkatkan nafsu makan", "harga" => 1500],
        ["id" => 5, "nama" => "Serai", "jenis" => "Bahan utama", "deskripsi" => "Meredakan demam, melancarkan pencernaan, mengurangi stres", "harga" => 800],
        ["id" => 6, "nama" => "Daun Pepaya", "jenis" => "Bahan utama", "deskripsi" => "Meningkatkan nafsu makan, membantu pencernaan dengan enzim papain", "harga" => 600],
        ["id" => 7, "nama" => "Mengkudu", "jenis" => "Bahan utama", "deskripsi" => "Mengelola tekanan darah, pereda nyeri, memperbaiki pencernaan", "harga" => 2100],
        ["id" => 8, "nama" => "Daun Beluntas", "jenis" => "Bahan utama", "deskripsi" => "Antibakteri, detoksifikasi, menghilangkan bau badan", "harga" => 800],
        ["id" => 9, "nama" => "Asam Jawa", "jenis" => "Bahan utama", "deskripsi" => "Menurunkan suhu badan, menyegarkan, mendukung kesehatan hati", "harga" => 1000],
        ["id" => 10, "nama" => "Cengkeh", "jenis" => "Rempah tambahan", "deskripsi" => "Mengatasi sakit kepala, antibakteri", "harga" => 800],
        ["id" => 11, "nama" => "Kayu Manis", "jenis" => "Rempah tambahan", "deskripsi" => "Menurunkan gula darah, meningkatkan metabolisme", "harga" => 800],
        ["id" => 12, "nama" => "Daun Pandan", "jenis" => "Rempah tambahan", "deskripsi" => "Memberi aroma harum, membantu pencernaan", "harga" => 800],
        ["id" => 13, "nama" => "Kapulaga", "jenis" => "Rempah tambahan", "deskripsi" => "Melancarkan peredaran darah, meningkatkan nafsu makan", "harga" => 500],
        ["id" => 14, "nama" => "Bunga Lawang", "jenis" => "Rempah tambahan", "deskripsi" => "Memberi aroma khas, membantu pencernaan", "harga" => 500],
        ["id" => 15, "nama" => "Daun Sirih", "jenis" => "Rempah tambahan", "deskripsi" => "Antiseptik, kesehatan mulut dan organ kewanitaan", "harga" => 500],
        ["id" => 16, "nama" => "Gula Merah", "jenis" => "Pemanis", "deskripsi" => "Menambah rasa manis alami, sumber energi", "harga" => 1000],
        ["id" => 17, "nama" => "Madu", "jenis" => "Pemanis", "deskripsi" => "Meningkatkan imun, mempercepat penyembuhan, menambah rasa manis", "harga" => 2000],
        ["id" => 18, "nama" => "Tebu", "jenis" => "Pemanis", "deskripsi" => "Menambah rasa manis alami, mempercepat penyembuhan", "harga" => 1000],
        ["id" => 19, "nama" => "Lemon", "jenis" => "Bahan tambahan", "deskripsi" => "Menambah rasa segar, sumber vitamin C", "harga" => 1200],
        ["id" => 20, "nama" => "Delima", "jenis" => "Bahan tambahan", "deskripsi" => "Antioksidan, meningkatkan stamina", "harga" => 3400],
        ["id" => 21, "nama" => "Soda", "jenis" => "Bahan tambahan", "deskripsi" => "Memberi sensasi segar dan rasa modern pada jamu", "harga" => 1000],
        ["id" => 22, "nama" => "Mint", "jenis" => "Bahan tambahan", "deskripsi" => "Memberi sensasi segar, antibakteri", "harga" => 800],
        ["id" => 23, "nama" => "Stevia", "jenis" => "Pemanis", "deskripsi" => "Menambah rasa manis alami, sumber energi", "harga" => 2000]
    ];

    public static function get() {
        return self::$data;
    }

    public static function find($id) {
        foreach (self::$data as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }
}