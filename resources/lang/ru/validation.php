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

    'accepted'             => ':attribute должен быть принят.',
    'active_url'           => ':attribute не является действительным URL',
    'after'                => ':attribute должна быть дата после :date.',
    'alpha'                => ':attribute может содержать только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, цифры и тире.',
    'alpha_num'            => ':attribute может содержать только буквы, цифры.',
    'array'                => ':attribute должен быть массивом.',
    'before'               => ':attribute должно быть дата до :date.',
    'between'=> [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file'    => ':attribute должен быть между :min и :max килобайт.',
        'string'  => ':attribute должен быть между :min и :max строкой.',
        'array'   => ':attribute должно быть между :min и :max номером.',
    ],
    'boolean'              => ':attribute поле должно быть истинным или ложным.',
    'confirmed'            => ':attribute подтверждение не совпадает.',
    'date'                 => ':attribute недействительная дата',
    'date_format'          => ':attribute не соответствует формату :format.',
    'different'            => ':attribute и :other должен быть другим.',
    'digits'               => ':attribute должен быть в цифрах :digits ',
    'digits_between'       => ':attribute должен быть между :min и :max цифрой.',
    'distinct'             => ':attribute поле имеет повторяющееся значение.',
    'email'                => ':attribute адрес эл. почты должен быть действительным.',
    'exists'               => 'Выбор :attribute является недействительным',
    'filled'               => ':attribute поле, обязательное для заполнения.',
    'image'                => ':attribute должно быть изображение.',
    'in'                   => 'Выбор :attribute является недействительным.',
    'in_array'             => ':attribute поле не существует в :other.',
    'integer'              => ':attribute должно быть целым числом',
    'ip'                   => ':attribute должен быть действительный IP-адрес.',
    'json'                 => ':attribute должна быть допустимой строкой JSON.',
    'max'                  => [
        'numeric' => ':attribute не может быть больше чем :max.',
        'file'    => ':attribute не может быть больше чем :max килобайт.',
        'string'  => ':attribute не может быть больше чем :max строкой.',
        'array'   => ':attribute не может иметь больше, чем :max значения.',
    ],
    'mimes'                => ':attribute должен быть файл типа: :values.',
    'min'                  => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file'    => ':attribute должен быть не менее :min килобайт.',
        'string'  => ':attribute должен быть не менее :min строкой.',
        'array'   => ':attribute должен иметь по крайней мере :min значений.',
    ],
    'not_in'               => 'Выбранный :attribute является недействительным',
    'numeric'              => ':attribute должен быть числом.',
    'present'              => ':attribute поле должно присутствовать.',
    'regex'                => ':attribute формат неверен.',
    'required'             => ':attribute поле, обязательное для заполнения.',
    'required_if'          => ':attribute поле обязательно для заполнения, когда :other является :value.',
    'required_unless'      => ':attribute поле обязательно для заполнения, если :other является в :values.',
    'required_with'        => ':attribute поле обязательно для заполнения, когда :values действительное',
    'required_with_all'    => ':attribute поле обязательно для заполнения, когда :values действительное.',
    'required_without'     => ':attribute поле обязательно для заполнения, когда :values не действительное.',
    'required_without_all' => ':attribute поле обязательно для заполнения, когда ни один из :values присутствует.',
    'same'                 => ':attribute и :other должен соответствовать',
    'size'                 => [
        'numeric' => ':attribute должно быть :size.',
        'file'    => ':attribute должно быть :size килобайт.',
        'string'  => ':attribute должно быть :size строкой.',
        'array'   => ':attribute должен содержать :size значение.',
    ],
    'string'               => ':attribute должен быть строкой.',
    'timezone'             => 'Должен быть действительной зоной.:attribute ',
    'unique'               => ':attribute уже занят.',
    'url'                  => ':attribute формат неверен.',

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

    'attributes' => [],

];