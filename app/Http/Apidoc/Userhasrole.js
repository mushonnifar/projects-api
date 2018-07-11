
/**
 * @api {post} /userrole/ Set User Role
 * @apiVersion 0.1.0
 * @apiName Set User role
 * @apiGroup User has role
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} user_id id user
 * @apiParam {Integer} role_id id role
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.user_id id user
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id userhasrole
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /userrole/:id Get User Role By ID
 * @apiVersion 0.1.0
 * @apiName Get User Role By ID
 * @apiGroup User has role
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user role
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user role
 * @apiSuccess {String} data.user_id id user
 * @apiSuccess {String} data.role_id id role
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update data
 * @apiSuccess {Integer} data.created_by id user yang melakukan create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {put} /userrole/:id Update User Role
 * @apiVersion 0.1.0
 * @apiName Update User Role
 * @apiGroup User has role
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user role
 * @apiParam {Integer} user_id id user
 * @apiParam {Integer} role_id id role
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role
 * @apiSuccess {String} data.user_id id user
 * @apiSuccess {String} data.role_id id role
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /userrole/:id Delete User Role
 * @apiVersion 0.1.0
 * @apiName Delete User Role
 * @apiGroup User has role
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id user role
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user role
 * @apiSuccess {Integer} data.user_id id user
 * @apiSuccess {Integer} data.role_id is role
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0 (fail)
 * @apiError {String} errors pesan eror
 */

/**
 * @api {get} /userrole/ Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup User has role
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user role
 * @apiSuccess {Integer} data.user_id id user
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} page halaman
 * @apiSuccess {Integer} size banyak data per halaman
 * @apiSuccess {Integer} totalCount jumlah seluruh data
 * @apiSuccess {String} token kode token baru
 * 
 */

/**
 * @api {get} /userrole/user/:id Get Role By ID User
 * @apiVersion 0.1.0
 * @apiName Get Role By ID User
 * @apiGroup User has role
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id user role
 * @apiSuccess {Integer} data.user_id id user
 * @apiSuccess {String} data.nama_user nam user
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.nama_role nama role
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */