<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
     */

    'accepted' => ':attribute harus disetujui.',
    'active_url' => ':attribute bukan URL yang valid.',
    'after' => ':attribute harus tanggal setelah :date.',
    'after_or_equal' => ':attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh terdiri dari huruf.',
    'alpha_dash' => ':attribute hanya boleh terdiri dari huruf, angka, dan tanda pisah (-).',
    'alpha_num' => ':attribute hanya boleh terdiri dari huruf dan angka.',
    'array' => ':attribute harus berupa array.',
    'before' => ':attribute harus tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file' => ':attribute harus antara :min dan :max kilobytes.',
        'string' => ':attribute harus antara :min dan :max characters.',
        'array' => ':attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean' => ':attribute input harus berisi benar atau salah.',
    'confirmed' => ':attribute konfirmasi tidak sesuai.',
    'date' => ':attribute bukan merupakan tanggal yang valid.',
    'date_format' => ':attribute tidak sesuai dengan format :format.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus terdiri dari :digits digit.',
    'digits_between' => ':attribute harus antara :min dan :max digits.',
    'dimensions' => ':attribute memilik dimensi gambar yang tidak sesuai.',
    'distinct' => ':attribute memiliki duplikasi nilai.',
    'email' => ':attribute harus berupa email yang valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value kilobytes.',
        'string' => ':attribute harus lebih besar dari :value characters.',
        'array' => ':attribute harus lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar atau sama dengan :value.',
        'file' => ':attribute harus lebih besar atau sama dengan :value kilobytes.',
        'string' => ':attribute harus lebih besar atau sama dengan :value characters.',
        'array' => ':attribute harus memilik :value item atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => ':attribute tidak ada dalam :other.',
    'integer' => ':attribute harus berupa angka bulat.',
    'ip' => ':attribute harus berupa IP address yang valid.',
    'ipv4' => ':attribute harus berupa IPv4 address yang valid.',
    'ipv6' => ':attribute harus berupa IPv6 address yang valid.',
    'json' => ':attribute harus berupa JSON string yang valid.',
    'lt' => [
        'numeric' => ':attribute harus kurang dari :value.',
        'file' => ':attribute harus kurang dari :value kilobytes.',
        'string' => ':attribute harus kurang dari :value characters.',
        'array' => ':attribute harus terdiri kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => ':attribute harus kurang dari atau sama dengan :value.',
        'file' => ':attribute harus kurang dari atau sama dengan :value kilobytes.',
        'string' => ':attribute harus kurang dari atau sama dengan :value characters.',
        'array' => ':attribute tidak boleh lebih dari :value item.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file' => ':attribute tidak boleh lebih besar dari :max kilobytes.',
        'string' => ':attribute tidak boleh lebih besar dari :max characters.',
        'array' => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'numeric' => ':attribute minimal harus :min.',
        'file' => ':attribute minimal harus :min kilobytes.',
        'string' => ':attribute minimal harus :min characters.',
        'array' => ':attribute minimal harus punya :min item.',
    ],
    'not_in' => ':attribute yang dipilih .',
    'not_regex' => ':attribute format tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'present' => ':attribute input harus ada.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute wajib diisi.',
    'required_if' => ':attribute wajib diisi jika :other adalah :value.',
    'required_unless' => ':attribute wajib diisi kecuali jika :other ada dalam :values.',
    'required_with' => ':attribute wajib diisi jika :values diisi.',
    'required_with_all' => ':attribute wajib diisi jika :values diisi.',
    'required_without' => ':attribute wajib diisi jika :values tidak diisi.',
    'required_without_all' => ':attribute wajib diisi jika tiap :values tidak diisi.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobytes.',
        'string' => ':attribute harus :size characters.',
        'array' => ':attribute harus berjumlah :size item.',
    ],
    'string' => ':attribute harus berupa huruf.',
    'timezone' => ':attribute harus berupa zona waktu yang valid.',
    'unique' => ':attribute sudah terdaftar dalam data.',
    'uploaded' => ':attribute gagal mengupload.',
    'url' => ':attribute format tidak valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
     */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
     */

    'attributes' => [
        'title' => 'judul',
        'slug' => 'slug',
        'content' => 'konten',
        'parent' => 'parent',
        'name' => 'nama',
        'url' => 'url',
        'order' => 'urutan',
    ],

];
