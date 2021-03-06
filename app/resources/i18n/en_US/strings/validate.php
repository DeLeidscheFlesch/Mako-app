<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/*
	 * Rule error messages.
	 */
	'after'                    => 'The %1$s field must contain a valid date after %3$s.',
	'alpha_dash_unicode'       => 'The %1$s field must contain only numbers, letters and dashes.',
	'alpha_dash'               => 'The %1$s field must contain only numbers, letters and dashes.',
	'alpha_unicode'            => 'The %1$s field must contain only letters.',
	'alpha'                    => 'The %1$s field must contain only letters.',
	'alphanumeric_unicode'     => 'The %1$s field must contain only letters and numbers.',
	'alphanumeric'             => 'The %1$s field must contain only letters and numbers.',
	'array'                    => 'The %1$s field must contain an array.',
	'before'                   => 'The %1$s field must contain a valid date before %3$s.',
	'between'                  => 'The value of the %1$s field must be between %2$s and %3$s.',
	'date'                     => 'The %1$s field must contain a valid date.',
	'different'                => 'The values of the %1$s field and %2$s field must be different.',
	'email_domain'             => 'The %1$s field must contain a valid e-mail address.',
	'email'                    => 'The %1$s field must contain a valid e-mail address.',
	'exact_length'             => 'The value of the %1$s field must be exactly %2$s characters long.',
	'exists'                   => 'The %1$s doesn\'t exist.',
	'float'                    => 'The %1$s field must contain a float.',
	'greater_than_or_equal_to' => 'The value of the %1$s field must be greater than or equal to %2$s.',
	'greater_than'             => 'The value of the %1$s field must be greater than %2$s.',
	'hex'                      => 'The %1$s field must contain a valid hexadecimal value.',
	'in'                       => 'The %1$s field must contain one of available options.',
	'integer'                  => 'The %1$s field must contain an integer.',
	'ip'                       => 'The %1$s field must contain a valid %2$s address.',
	'is_uploaded'              => 'The %1$s must be an uploaded file.',
	'json'                     => 'The %1$s field must contain valid JSON.',
	'less_than_or_equal_to'    => 'The value of the %1$s field must be less than or equal to %2$s.',
	'less_than'                => 'The value of the %1$s field must be less than %2$s.',
	'match'                    => 'The values of the %1$s field and %2$s field must match.',
	'max_filesize'             => 'The %1$s must be less than %2$s in size.',
	'max_length'               => 'The value of the %1$s field must be less than %2$s characters long.',
	'mimetype'                 => 'The %1$s must be a file of type: %2$s.',
	'min_length'               => 'The value of the %1$s field must be at least %2$s characters long.',
	'natural_non_zero'         => 'The %1$s field must contain a non zero natural number.',
	'natural'                  => 'The %1$s field must contain a natural number.',
	'not_in'                   => 'The %1$s field contains an invalid value.',
	'regex'                    => 'The value of the %1$s field does not match the required format.',
	'required'                 => 'The %1$s field is required.',
	'token'                    => 'Invalid security token.',
	'unique'                   => 'The %1$s must be unique.',
	'url'                      => 'The %1$s field must contain a valid URL.',
	'uuid'                     => 'Invalid UUID.',

	/*
	 * Custom overrides.
	 */
	'overrides' =>
	[
		'fieldnames' =>
		[

		],
		'messages' =>
		[

		],
	],
];
