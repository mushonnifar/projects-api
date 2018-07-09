
/**
 * @api {post} /role Create role
 * @apiVersion 0.1.0
 * @apiName Create Role
 * @apiGroup Role
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {String} name nama role
 * @apiParam {String} description deskripsi role
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Data has been added
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {String} data.name nama role
 * @apiSuccess {String} data.description deskripsi role
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id role
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /role/:id Get Role By ID
 * @apiVersion 0.1.0
 * @apiName Get Role By ID
 * @apiGroup Role
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id role
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Get data successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role
 * @apiSuccess {String} data.name nama role
 * @apiSuccess {String} data.description deskripsi role
 * @apiSuccess {String} data.isactive status aktif
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update data
 * @apiSuccess {Integer} data.created_by id user yang melakukan create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {put} /role/:id Update Role
 * @apiVersion 0.1.0
 * @apiName Update Role
 * @apiGroup Role
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user
 * @apiParam {String} name nama role
 * @apiParam {String} description deskripsi role
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Data has been updated
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role
 * @apiSuccess {String} data.name nama role
 * @apiSuccess {String} data.description deskripsi role
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /role/:id Delete Role
 * @apiVersion 0.1.0
 * @apiName Delete Role
 * @apiGroup Role
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id role
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role
 * @apiSuccess {String} data.name nama role
 * @apiSuccess {String} data.description deskripsi role
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /role Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup Role
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Get data successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role
 * @apiSuccess {String} data.name nama role
 * @apiSuccess {String} data.description deskripsi role
 * @apiSuccess {String} data.isactive status aktif
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {String} token kode token baru
 */