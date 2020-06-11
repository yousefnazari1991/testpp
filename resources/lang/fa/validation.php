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

    'accepted' => ':attribute باید پذیرفته شده باشد.',
    'active_url' => 'آدرس :attribute معتبر نیست',
    'after' => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => ':attribute باید شامل حروف الفبا باشد.',
    'alpha_dash' => ':attribute باید شامل حروف الفبا و عدد و خظ تیره(-) باشد.',
    'alpha_num' => ':attribute باید شامل حروف الفبا و عدد باشد.',
    'array' => ':attribute باید شامل آرایه باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        "numeric" => ":attribute باید بین :min و :max باشد.",
        "file"    => ":attribute باید بین :min و :max کیلوبایت باشد.",
        "string"  => ":attribute باید بین :min و :max کاراکتر باشد.",
        "array"   => ":attribute باید بین :min و :max آیتم باشد.",
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => ':attribute با تاییدیه مطابقت ندارد.',
    'date' => ':attribute یک تاریخ معتبر نیست.',
    'date_equals' => ':attribute با الگوی :format مطاقبت ندارد.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => ':attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'فرمت :attribute معتبر نیست.',
    'exists' => ':attribute انتخاب شده، معتبر نیست',
    'file' => ':attribute باید فایل باشد.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute باید تصویر باشد.',
    'in' => ':attribute انتخاب شده، معتبر نیست.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => ':attribute باید نوع داده ای عددی (integer) باشد.',
    'ip' => ':attribute باید IP آدرس معتبر باشد.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        "numeric" => ":attribute نباید بزرگتر از :max باشد.",
        "file"    => ":attribute نباید بزرگتر از :max کیلوبایت باشد.",
        "string"  => ":attribute نباید بیشتر از :max کاراکتر باشد.",
        "array"   => ":attribute نباید بیشتر از :max آیتم باشد.",
    ],
    'mimes' => ':attribute باید یکی از فرمت های :values باشد.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        "numeric" => ":attribute نباید کوچکتر از :min باشد.",
        "file"    => ":attribute نباید کوچکتر از :min کیلوبایت باشد.",
        "string"  => ":attribute نباید کمتر از :min کاراکتر باشد.",
        "array"   => ":attribute نباید کمتر از :min آیتم باشد.",
    ],
    'not_in' => ':attribute انتخاب شده، معتبر نیست.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute باید شامل عدد باشد.',
    'present' => 'The :attribute field must be present.',
    'regex' => ':attribute یک فرمت معتبر نیست',
    'required' => 'فیلد :attribute الزامی است',
    'required_if' => 'فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => ':attribute الزامی است زمانی که :values موجود است.',
    'required_with_all' => ':attribute الزامی است زمانی که :values موجود است.',
    'required_without' => ':attribute الزامی است زمانی که :values موجود نیست.',
    'required_without_all' => ':attribute الزامی است زمانی که :values موجود نیست.',
    'same' => ':attribute و :other باید مانند هم باشند.',
    'size' => [
        "numeric" => ":attribute باید برابر با :size باشد.",
        "file"    => ":attribute باید برابر با :size کیلوبایت باشد.",
        "string"  => ":attribute باید برابر با :size کاراکتر باشد.",
        "array"   => ":attribute باسد شامل :size آیتم باشد.",
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => ':attribute باید از نوع رشته ای باشد.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => ':attribute قبلا انتخاب شده است.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'فرمت آدرس :attribute اشتباه است.',
    'uuid' => 'The :attribute must be a valid UUID.',
    'dumbpwd' => 'گذر واژه انتخابی شما ضعیف است لطفا یک گذر واژه قوی انتخاب کنید',

    'jdate' => ':attribute' . ' تاریخ شمسی معتبر نمی باشد.',
    'jdate_equal' => ':attribute' . ' تاریخ شمسی برابر ' . ':fa-date' . ' نمی باشد.',
    'jdate_not_equal' => ':attribute' . ' تاریخ شمسی نامساوی ' . ':fa-date' . ' نمی باشد.',
    'jdatetime' => ':attribute' . ' تاریخ و زمان شمسی معتبر نمی باشد.',
    'jdatetime_equal' => ':attribute' . ' تاریخ و زمان شمسی مساوی ' . ':fa-date' . ' نمی باشد.',
    'jdatetime_not_equal' => ':attribute' . ' تاریخ و زمان شمسی نامساوی ' . ':fa-date' . ' نمی باشد.',
    'jdate_after' => ':attribute' . ' تاریخ شمسی باید بعد از ' . ':fa-date' . ' باشد.',
    'jdate_after_equal' => ':attribute' . ' تاریخ شمسی باید بعد یا برابر از ' . ':fa-date' . ' باشد.',
    'jdatetime_after' => ':attribute' . ' تاریخ و زمان شمسی باید بعد از ' . ':fa-date' . ' باشد.',
    'jdatetime_after_equal' => ':attribute' . ' تاریخ و زمان شمسی باید بعد یا برابر از ' . ':fa-date' . ' باشد.',
    'jdate_before' => ':attribute' . ' تاریخ شمسی باید قبل از ' . ':fa-date' . ' باشد.',
    'jdate_before_equal' => ':attribute' . ' تاریخ شمسی باید قبل یا برابر از ' . ':fa-date' . ' باشد.',
    'jdatetime_before' => ':attribute' . ' تاریخ و زمان شمسی باید قبل از ' . ':fa-date' . ' باشد.',
    'jdatetime_before_equal' => ':attribute' . ' تاریخ و زمان شمسی باید قبل یا برابر از ' . ':fa-date' . ' باشد.',
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        "name" => "نام",
        "username" => "نام کاربری",
        "email" => "پست الکترونیکی",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "password" => "رمز عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "city" => "شهر",
        "country" => "کشور",
        "address" => "نشانی",
        "phone" => "تلفن",
        "mobile" => "تلفن همراه",
        "age" => "سن",
        "sex" => "جنسیت",
        "gender" => "جنسیت",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "عنوان",
        "text" => "متن",
        "content" => "محتوا",
        "description" => "توضیحات",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "available" => "موجود",
        "size" => "اندازه",
    ],

];