
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
 * @apiSuccess {String} status success
 * @apiSuccess {String} message login successfully
 * @apiSuccess {String} token kode token
 * @apiSuccess {Integer} expires_at expired token
 * 
 * @apiError {Integer} status errors
 * @apiError {String} message pesan kesalahan
 */


/**
 * @api {post} /user/ Create User
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
 * @apiParam {Integer} role_id id role user
 *
 * @apiSuccess {String} status success
 * @apiSuccess {String} message data has been added
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status errors
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
 * @apiSuccess {Integer} status success
 * @apiSuccess {String} data pesan sukses
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
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
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
 *
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status errors
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
 * @apiSuccess {Integer} status success
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data     
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /user/ Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup User
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user
 * @apiSuccess {String} data.name nama user
 * @apiSuccess {String} data.username username user
 * @apiSuccess {String} data.email email user
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 * 
 */

/**
 * @api {get} /user/me/role Get My Identity
 * @apiVersion 0.1.0
 * @apiName Get My Identity
 * @apiGroup User
 *
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user role
 * @apiSuccess {Integer} data.user_id id user
 * @apiSuccess {String} data.nama_user nama user
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.nama_role nama role
 *
 */