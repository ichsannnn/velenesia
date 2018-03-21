<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Bahasa Untuk Validasi
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut adalah bahasa yang  biasa digunakan oleh class
    | validator. Beberapa aturan disini memiliki beberapa versi seperti aturan
    | ukuran. Jangan ragu untuk mengubah pesan-pesan yang ada disini.
    |
    */

    'accepted'             => ':attribute harus diterima.',
    'active_url'           => ':attribute bukan URL yang benar.',
    'after'                => ':attribute harus tanggal setelah :date.',
    'after_or_equal'       => ':attribute harus tanggal setelah atau sama dengan :date.',
    'alpha'                => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'           => ':attribute hanya boleh berisi huruf, angka, dan tanda hubung.',
    'alpha_num'            => ':attribute hanya boleh berisi huruf dan angka.',
    'array'                => ':attribute harus berupa array.',
    'before'               => ':attribute harus tanggal sebelum :date.',
    'before_or_equal'      => ':attribute harus tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => ':attribute harus diantara :min dan :max.',
        'file'    => ':attribute harus diantara :min dan :max kilobyte.',
        'string'  => ':attribute harus diantara :min dan :max karakter.',
        'array'   => ':attribute harus diantara :min and :max item.',
    ],
    'boolean'              => ':attribute harus berisi benar atau salah.',
    'confirmed'            => 'Konfirmasi :attribute tidak sesuai.',
    'date'                 => ':attribute bukan tanggal yang benar.',
    'date_format'          => ':attribute tidak sesuai dengan format :format.',
    'different'            => ':attribute dan :other harus berbeda.',
    'digits'               => ':attribute harus :digits digit.',
    'digits_between'       => ':attribute harus diantara :min dan :max digit.',
    'dimensions'           => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'             => ':attribute field mempunyai data duplikat.',
    'email'                => ':attribute harus berisi email yang benar.',
    'exists'               => ':attribute yang dipilih tidak benar.',
    'file'                 => ':attribute harus berupa file.',
    'filled'               => 'Bidang :attribute harus mempunyai isi.',
    'image'                => ':attribute harus berupa gambar.',
    'in'                   => ':attribute yang dipilih tidak benar.',
    'in_array'             => 'Bidang :attribute tidak ada dalam :other.',
    'integer'              => ':attribute harus berupa bilangan bulat.',
    'ip'                   => ':attribute harus berupa alamat IP yang benar.',
    'ipv4'                 => ':attribute harus berupa alamat IPv4 yang benar.',
    'ipv6'                 => ':attribute harus berupa alamat IPv6 yang benar.',
    'json'                 => ':attribute harus berupa string JSON yang benar.',
    'max'                  => [
        'numeric' => ':attribute tidak boleh lebih dari :max.',
        'file'    => ':attribute tidak boleh lebih dari :max kilobyte.',
        'string'  => ':attribute tidak boleh lebih dari :max karakter.',
        'array'   => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes'                => ':attribute harus berupa file dengan tipe: :values.',
    'mimetypes'            => ':attribute harus berupa file dengan tipe: :values.',
    'min'                  => [
        'numeric' => ':attribute minimal berisi :min.',
        'file'    => ':attribute minimal berisi :min kilobyte.',
        'string'  => ':attribute minimal berisi :min karakter.',
        'array'   => ':attribute minimal berisi :min item.',
    ],
    'not_in'               => ':attribute yang dipilih tidak benar.',
    'not_regex'            => 'Format :attribute tidak benar.',
    'numeric'              => ':attribute harus berupa angka.',
    'present'              => ':attribute harus ada.',
    'regex'                => 'Format :attribute tidak benar.',
    'required'             => ':attribute harus diisi.',
    'required_if'          => ':attribute harus diisi jika :other sama dengan :value.',
    'required_unless'      => ':attribute harus diisi kecuali jika :other sama dengan :values.',
    'required_with'        => ':attribute haris diisi jika :values ada.',
    'required_with_all'    => ':attribute harus diisi jika :values ada.',
    'required_without'     => ':attribute harus diisi jika :values tidak ada.',
    'required_without_all' => ':attribute harus diisi jika tidak ada :values yang ditampilkan.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':attribute harus berukuran :size.',
        'file'    => ':attribute harus berukuran :size kilobyte.',
        'string'  => ':attribute harus berisi :size karakter.',
        'array'   => ':attribute harus berisi :size item  .',
    ],
    'string'               => ':attribute harus berupa string.',
    'timezone'             => ':attribute harus berupa zona waktu yang benar.',
    'unique'               => ':attribute sudah digunakan.',
    'uploaded'             => ':attribute gagal untuk diupload.',
    'url'                  => 'Format :attribute tidak benar.',

    /*
    |--------------------------------------------------------------------------
    | Bahasa Untuk Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Disini anda diperbolehkan untuk membuat pesan validasi kustom untuk
    | atribut menggunakan konvensi "attribute.rule" untuk namanya. Ini mempercepat 
    | untuk menentukan bahasa tertentu, untuk atribut tertentu.
    |
    */

    'custom' => [
        'nama-atribut' => [
            'nama-aturan' => 'pesan',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atribut Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Baris berikut ini digunakan untuk mengubah teks pada atribut
    | awal menjadi sesuatu yang lebih enak untuk dibaca. Contohnya 
    | daripada hanya "email", "E-Mail Address" lebih baik. Ini membuat
    | pesan validasi sedikit lebih baik.
    |
    */

    'attributes' => [],

];
