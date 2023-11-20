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

    'accepted'             => 'يجب قبول  :attribute',
    'active_url'           => ' :attribute لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على  :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => ' :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي  :attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي  :attribute على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون  :attribute ًمصفوفة',
    'before'               => 'يجب على  :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => ' :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
    ],
    'lt' => [
        'numeric' => 'يجب ان تكون قيمة  :attribute اقل من :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'يجب ان تكون قيمة  :attribute اقل من او تساوي :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'gt' => [
        'numeric' => 'يجب ان تكون قيمة  :attribute اكبر من :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'يجب ان تكون قيمة  :attribute اكبر من او تساوي :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'boolean'              => 'يجب أن تكون قيمة  :attribute إما true أو false ',
    'confirmed'            => ' التأكيد غير مُطابق  :attribute',
    'date'                 => ' :attribute ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق  :attribute مع الشكل :format.',
    'different'            => 'يجب أن يكون  :attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي  :attribute على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي  :attribute بين :min و :max رقمًا/أرقام ',
    'dimensions'           => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'             => ' :attribute قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => ' :attribute لاغٍ',
    'file'                 => 'الـ :attribute يجب أن يكون من ملفا.',
    'filled'               => ' :attribute إجباري',
    'image'                => 'يجب أن يكون  :attribute صورةً',
    'in'                   => ' :attribute لاغٍ',
    'in_array'             => ' :attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون  :attribute عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون  :attribute عنوان IP ذا بُنية صحيحة',
    'ipv4'                 => 'يجب أن يكون  :attribute عنوان IPv4 ذا بنية صحيحة.',
    'ipv6'                 => 'يجب أن يكون  :attribute عنوان IPv6 ذا بنية صحيحة.',
    'json'                 => 'يجب أن يكون  :attribute نصا من نوع JSON.',
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة  :attribute مساوية أو أصغر لـ :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول نص :attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي  :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون  ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون  ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة  :attribute مساوية أو أكبر لـ :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string'  => 'يجب أن تكون  :attribute على الأقل :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي  :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => ' :attribute لاغٍ',
    'numeric'              => 'يجب على  :attribute أن يكون رقمًا',
    'present'              => 'يجب تقديم  :attribute',
    'regex'                => 'صيغة  :attribute .غير صحيحة',
    'required'             => ' :attribute مطلوب.',
    'required_if'          => ' :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => ' :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => ' :attribute إذا توفّر :values.',
    'required_with_all'    => ' :attribute إذا توفّر :values.',
    'required_without'     => ' :attribute إذا لم يتوفّر :values.',
    'required_without_all' => ' :attribute إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق  :attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة  :attribute مساوية لـ :size',
        'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'string'  => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
        'array'   => 'يجب أن يحتوي  :attribute على :size عنصرٍ/عناصر بالظبط',
    ],
    'string'               => 'يجب أن يكون  :attribute نصآ.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة  :attribute مُستخدمة من قبل',
    'uploaded'             => 'فشل في تحميل الـ :attribute',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة',

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
        'name' => 'الاسم',
        'gender' => 'الجنس',
        'phone' => 'رقم الهاتف',
        'address_' => 'العنوان',
        'latitude' => 'الموقع',
        'longitude' => 'الموقع',
        'logo' => 'الصورة',
        'image' => 'الصورة',
        'password' => 'كلمة المرور',
        'date_of_birth' => 'تاريخ الميلاد',
        'is_active' => 'الموظف متاح',
        'push_token' => 'خدمات جوجل غير مفعلة علي الجهاز',
        'old_password' => 'كلمة المرور الحالية',
        'new_password' => 'كلمة المرور الجديدة',
        'email' => 'البريد الالكتروني',
        'company_id' => 'اسم الشركة',
        'customer_id' => 'العميل',
        'details' => 'التفاصيل',
        'start_datetime' => 'تاربخ ووقت البداية',
        'end_datetime' => 'تاربخ ووقت النهاية',
        'birth_of_date' => 'تاريخ الميلاد',
        'total_amount' => 'المبلغ الاجمالي',
        'discount_amount' => 'قيمة الخصم',
        'id' => 'رقم التعريف',
        'category_id' => 'رقم القسم',
        'title' => ' العنوان',
        'company data is not right' => 'كود الشركة غير صحيح',
        'company_code' => 'كود الشركة',
        'first_name' => 'الاسم',
        'father_name' => 'اسم الاب',
        'last_name' => 'الاسم الاخير',
        'token' => 'الرمز الخاص بك',
        'password_confirmation' => 'تاكيد الباسورد',
        'price' => 'سعر',
        'dis_price' => 'سعر بعد الخصم',
        'notes' => 'ملاحظات',
        'quantity' => 'كمية',
        'delivery_name' => 'اسم',
        'delivery_email' => 'البريد الالكتروني',
        'delivery_mobile' => 'الهاتف',
        'delivery_fees' => 'تكلفة التوصيل',
        'delivery_address' => 'العنوان',
        'short_code' => 'رابط المتجر',
        'not_youtube_url' => 'رابط youtube فقط',
        'img_required' => 'الصورة مطلوبة',
        'address' => ' العنوان',







    ],

    'types' => [
        'string' => 'string',
        'date' => 'date',
        'float' => 'float',
        'integer'=>'integer',
    ],
];
