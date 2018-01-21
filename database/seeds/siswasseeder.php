<?php

use Illuminate\Database\Seeder;

class siswasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a= [ ["nis"=>"999","nama"=>"ahmad","umur"=>"12","tempat_lahir"=>"bandung","tanggal_lahir"=>"2005-09-07","alamat"=>"Cibaduyut","kelas"=>"XI RPL","hobi"=>"berenang"],
        ["nis"=>"333","nama"=>"taufik","umur"=>"17","tempat_lahir"=>"spain","tanggal_lahir"=>"2000-12-04","alamat"=>"kopo","kelas"=>"XI RPL 2","hobi"=>"main game"],
        ["nis"=>"555","nama"=>"somad","umur"=>"18","tempat_lahir"=>"bandung","tanggal_lahir"=>"2000-02-07","alamat"=>"Ciodeng","kelas"=>"XII RPL","hobi"=>"sholawatan"],
        ["nis"=>"256","nama"=>"roni","umur"=>"20","tempat_lahir"=>"jakarta","tanggal_lahir"=>"1996-02-09","alamat"=>"Cisoak","kelas"=>"XII RPL","hobi"=>"main catur"],
        ["nis"=>"789","nama"=>"kamil","umur"=>"17","tempat_lahir"=>"bandung","tanggal_lahir"=>"2000-09-07","alamat"=>"Cisaat","kelas"=>"XII RPL","hobi"=>"bermain bola"],
        ["nis"=>"909","nama"=>"anis","umur"=>"18","tempat_lahir"=>"bandung","tanggal_lahir"=>"2000-09-07","alamat"=>"Cibaduyut","kelas"=>"XII RPL","hobi"=>"mengaji"],
        ["nis"=>"109","nama"=>"asep","umur"=>"18","tempat_lahir"=>"bandung","tanggal_lahir"=>"1999-07-07","alamat"=>"Sayati","kelas"=>"XII RPL","hobi"=>"jualan"],
        ["nis"=>"100","nama"=>"habib","umur"=>"17","tempat_lahir"=>"bandung","tanggal_lahir"=>"2000-02-07","alamat"=>"Ciraos","kelas"=>"XII RPL","hobi"=>"ngoding"],
        ["nis"=>"950","nama"=>"aceng","umur"=>"19","tempat_lahir"=>"bandung","tanggal_lahir"=>"1998-04-09","alamat"=>"Ciraos","kelas"=>"XII RPL","hobi"=>"gelut"],
        ["nis"=>"503","nama"=>"dadang","umur"=>"18","tempat_lahir"=>"bandung","tanggal_lahir"=>"1999-04-15","alamat"=>"Ciraos","kelas"=>"XII RPL","hobi"=>"pamer duit"],
    ];

        DB::table('siswas')->insert($a);
    }
}
