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

    'accepted'             => ':attribute 是可用的。',
    'active_url'           => ':attribute 不是一个合法的 URL。',
    'after'                => ':attribute 必须是一个在 :date 之后的合法日期。',
    'alpha'                => ':attribute 只能包含字母。',
    'alpha_dash'           => ':attribute 只能包含字母、数字和 -。',
    'alpha_num'            => ':attribute 只能包含字母和数字。',
    'array'                => ':attribute 必须是一个数组。',
    'before'               => ':attribute 必须是一个在 :date 之前的合法日期。',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 和 :max 之间。',
        'file'    => ':attribute 必须在 :min 和 :max KB 之间。',
        'string'  => ':attribute 必须在 :min 和 :max 字符之间。',
        'array'   => ':attribute 必须在 :min 和 :max 项之间。',
    ],
    'boolean'              => ':attribute 必须是 true 或者 false。',
    'confirmed'            => ':attribute 验证不匹配。',
    'date'                 => ':attribute 不是一个有效的日期。',
    'date_format'          => ':attribute 无法和 :format 格式相匹配。',
    'different'            => ':attribute 和 :other 不能相同。',
    'digits'               => ':attribute 必须是 :digits 数字。',
    'digits_between'       => ':attribute 必须是在 :min 和 :max 之间的数字。',
    'email'                => ':attribute 必须是一个合法的邮箱地址。',
    'filled'               => ':attribute 是必填项。',
    'exists'               => '选中的 :attribute 不存在。',
    'image'                => ':attribute 必须是一个图片。',
    'in'                   => '选中的 :attribute 无效。',
    'integer'              => ':attribute 必须是一个整数。',
    'ip'                   => ':attribute 必须是一个合法的 IP 地址。',
    'max'                  => [
        'numeric' => ':attribute 不能超过 :max。',
        'file'    => ':attribute 不能超过 :max KB。',
        'string'  => ':attribute 不能超过 :max 个字符。',
        'array'   => ':attribute 不能超过 :max 项。',
    ],
    'mimes'                => ':attribute 必须是 :values 的文件类型。',
    'min'                  => [
        'numeric' => ':attribute 至少 :min。',
        'file'    => ':attribute 至少 :min KB。',
        'string'  => ':attribute 至少 :min 个字符。',
        'array'   => ':attribute 至少 :min 项。',
    ],
    'not_in'               => '选项 :attribute 无效。',
    'numeric'              => ':attribute 必须是一个数字。',
    'regex'                => ':attribute 格式无效。',
    'required'             => ':attribute 是必填项。',
    'required_if'          => '当 :other 时 :value 时 :attribute 是必填项。',
    'required_with'        => '当 :values 存在时 :attribute 是必填项。',
    'required_with_all'    => '当 :values 存在时 :attribute f是必填项。',
    'required_without'     => '当 :values 不存在时 :attribute 是必填项。',
    'required_without_all' => '当 :values 都不存在时 :attribute 是必填项。',
    'same'                 => ':attribute 和 :other 必须匹配。',
    'size'                 => [
        'numeric' => ':attribute 必须为 :size.',
        'file'    => ':attribute 必须为 :size KB。',
        'string'  => ':attribute m必须为 :size 个字符。',
        'array'   => ':attribute 必须包含 :size 几项。',
    ],
    'unique'               => ':attribute 已经存在。',
    'url'                  => ':attribute 格式无效。',
    'timezone'             => ':attribute 必须是一个有效的时区。',

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
            'rule-name' => '自定义消息',
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
        'link-url' => '链接 URL'
    ],

];
