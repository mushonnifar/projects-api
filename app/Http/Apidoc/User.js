
/**
 * @api {post} /user/login Login User
 * @apiVersion 0.1.0
 * @apiName Login User
 * @apiGroup User
 *
 * @apiDescription Login user untuk mendapatkan kode akses
 * 
 * @apiParam {String} username username
 * @apiParam {String} password password
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message login successfully
 * @apiSuccess {String} token kode token
 * @apiSuccess {Integer} expires_at expired token
 * 
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan kesalahan
 */


/**
 * @api {post} /user Create User
 * @apiVersion 0.1.0
 * @apiName Create User
 * @apiGroup User
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {String} name nama user
 * @apiParam {String} username username user
 * @apiParam {String} password password user
 * @apiParam {String} email email user
 * @apiParam {Integer} nip nomor induk pegawai
 * @apiParam {Integer} isemployee 1 = employee, 0 = not employee
 * @apiParam {Integer} unit_kerja_id id unit kerja
 * @apiParam {Integer} role_id id role user 
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message data has been added
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {String} data.nip nomor induk pegawai
 * @apiSuccess {String} data.isemployee kode isemployee
 * @apiSuccess {String} data.unit_kerja_id id unit kerja
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan kesalahan
 */

/**
 * @api {post} /user/logout Logout
 * @apiVersion 0.1.0
 * @apiName Logout User
 * @apiGroup User
 * 
 * @apiHeader {String} x-access-token token
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message pesan sukses
 * 
 */

/**
 * @api {get} /user/:id Get User By ID
 * @apiVersion 0.1.0
 * @apiName Get User
 * @apiGroup User
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {String} data.nip nomor induk pegawai
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.role_name nama role
 * @apiSuccess {Integer} data.unit_kerja_id id unit kerja
 * @apiSuccess {String} data.unit_kerja_name nama unit kerja
 * @apiSuccess {Integer} data.isemployee kode isemployee
 * @apiSuccess {String} data.isemployee_txt text isemployee
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {put} /user/:id Update User
 * @apiVersion 0.1.0
 * @apiName Update User
 * @apiGroup User
 * 
 * @apiHeader {String} x-access-token token
 *
 * @apiParam {Integer} id id user
 * @apiParam {String} name nama user
 * @apiParam {String} username username user
 * @apiParam {String} password password user
 * @apiParam {String} email email user
 * @apiParam {Integer} nip nomor induk pegawai
 * @apiParam {Integer} isemployee 1 = employee, 0 = not employee
 * @apiParam {Integer} unit_kerja_id id unit kerja
 * @apiParam {Integer} role_id id role user 
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message data has been updated
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {String} data.unit_kerja_id id unit kerja
 * @apiSuccess {String} data.nip nomor induk pegawai
 * @apiSuccess {String} data.isemployee kode isemployee
 * @apiSuccess {String} data.isactive status aktif user
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /user/:id Delete User
 * @apiVersion 0.1.0
 * @apiName Delete User
 * @apiGroup User
 * 
 * @apiHeader {String} x-access-token token
 *
 * @apiParam {Integer} id id user
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message removed successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {String} data.unit_kerja_id id unit kerja
 * @apiSuccess {String} data.nip nomor induk pegawai
 * @apiSuccess {String} data.isemployee kode isemployee
 * @apiSuccess {String} data.isactive status aktif user
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /user Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup User
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status success
 * @apiSuccess {String} message Get data successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} data.nip nomor induk pegawai
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {Integer} data.isemployee kode isemployee
 * @apiSuccess {String} data.isemployee_txt text isemployee
 * @apiSuccess {Integer} data.unit_kerja_id id unit kerja
 * @apiSuccess {String} data.unit_kerja_name nama unit kerja
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.role_name nama_role
 * @apiSuccess {String} token kode token baru
 * 
 */

/**
 * @api {get} /user/me/role Get My Identity
 * @apiVersion 0.1.0
 * @apiName Get My Identity
 * @apiGroup User
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message pesan
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user role
 * @apiSuccess {String} data.nip NIP
 * @apiSuccess {Integer} data.user_id id user
 * @apiSuccess {String} data.user_name nama user
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.role_name nama role
 * @apiSuccess {Integer} data.unit_kerja_id id unit kerja
 * @apiSuccess {String} data.unit_kerja_name nama unit kerja
 * @apiSuccess {Integer} data.isemployee 1 = employee, 0 = not employee
 *
 */