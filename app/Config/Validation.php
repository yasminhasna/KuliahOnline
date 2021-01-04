<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];
	public $category = [
        'category_name_matakuliah'     => 'required',
        'category_status'     => 'required'
    ];
     
    public $category_errors = [
        'category_name_matakuliah' => [
            'required'    => 'Nama category wajib diisi.',
        ],
        'category_status'    => [
            'required' => 'Status category wajib diisi.'
        ]
	];
	public $matakuliah = [
		'category_id'           => 'required',
		'kode_matakuliah'          => 'required',
		'semester'         => 'required',
		'sks'           => 'required',
		'prodi_id'           => 'required',
		'status'        => 'required',
		'document'         => 'uploaded[document]|mime_in[document,document/pdf,document/doc,document/docx,document/ppt,document/pptx,document/mp4]|max_size[document,1000]',
		'description'   => 'required'
	];
	 
	public $matakuliah_errors = [
		'category_id'   => [
			'required'  => 'Nama category wajib diisi.',
		],
		'kode_matakuliah'  => [
			'required'  => 'Kode Matakuliah wajib diisi.'
		],
		'semester' => [
			'required'  => 'Semester wajib diisi.'
		],
		'sks'   => [
			'required'  => 'Sks wajib diisi.'
		],
		'prodi_id'   => [
			'required'  => 'prodi wajib diisi.'
		],
		'status'=> [
			'required'  => 'Status  wajib diisi.'
		],
		'document'=> [
			'mime_in'   => 'Document hanya boleh diisi dengan pdf, doc, docx, ppt, pptx, mp4',
			'max_size'  => 'Document maksimal 100mb',
			'uploaded'  => 'Document wajib diisi'
		],
		'description'   => [
			'required'          => 'Description wajib diisi.'
		]
	];
	public $prodi = [
        'prodi'     => 'required',
        
    ];
     
    public $prodi_errors = [
        'prodi' => [
            'required'    => 'Prodi wajib diisi.',
        ],
	];
	public $authlogin = [
		'email'         => 'required|valid_email',
		'password'      => 'required'
	];
	 
	public $authlogin_errors = [
		'email'=> [
			'required'  => 'Email wajib diisi.',
			'valid_email'   => 'Email tidak valid'
		],
		'password'=> [
			'required'  => 'Password wajib diisi.'
		]
	];
	 
	public $authregister = [
		'email'             => 'required|valid_email|is_unique[users.email]',
		'username'          => 'required|alpha_numeric|is_unique[users.username]|min_length[8]|max_length[35]',
		'name'              => 'required|alpha_numeric_space|min_length[3]|max_length[35]',
		'password'          => 'required|string|min_length[8]|max_length[35]',
		'confirm_password'  => 'required|string|matches[password]|min_length[8]|max_length[35]',
	];
	 
	public $authregister_errors = [
		'email'=> [
			'required'      => 'Email wajib diisi',
			'valid_email'   => 'Email tidak valid',
			'is_unique'     => 'Email sudah terdaftar'
		],
		'username'=> [
			'required'      => 'Username wajib diisi',
			'alpha_numeric' => 'Username hanya boleh berisi huruf dan angka',
			'is_unique'     => 'Username sudah terdaftar',
			'min_length'    => 'Username minimal 3 karakter',
			'max_length'    => 'Username maksimal 35 karakter'
		],
		'name'=> [
			'required'              => 'Name wajib diisi',
			'alpha_numeric_spaces'  => 'Name hanya boleh berisi huruf, angka dan spasi',
			'min_length'            => 'Name minimal 3 karakter',
			'max_length'            => 'Name maksimal 35 karakter'
		],
		'password'=> [
			'required'      => 'Password wajib diisi',
			'string'        => 'Password hanya boleh berisi huruf, angka, spasi dan karakter lain',
			'min_length'    => 'Password minimal 8 karakter',
			'max_length'    => 'Password maksimal 35 karakter'
		],
		'confirm_password'=> [
			'required'      => 'Konfirmasi password wajib diisi',
			'string'        => 'Konfirmasi password hanya boleh berisi huruf, angka, spasi dan karakter lain',
			'matches'       => 'Konfirmasi password tidak sama dengan password',
			'min_length'    => 'Konfirmasi password minimal 8 karakter',
			'max_length'    => 'Konfirmasi password maksimal 35 karakter'
		]
	];
	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
