
/**
 * @api {post} /jabatan/ Create Route
 * @apiVersion 0.1.0
 * @apiName Create Jabatan
 * @apiGroup Jabatan
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {String} name nama jabatan
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {String} data.name nama jabatan
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id jabatan
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /jabatan/:id Get Jabatan By ID
 * @apiVersion 0.1.0
 * @apiName Get Jabatan By ID
 * @apiGroup Jabatan
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id jabatan
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id jabatan
 * @apiSuccess {String} data.name nama jabatan
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
 * @api {put} /jabatan/:id Update Jabatan
 * @apiVersion 0.1.0
 * @apiName Update Jabatan
 * @apiGroup Jabatan
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user
 * @apiParam {String} name nama jabatan
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id jabatan
 * @apiSuccess {String} data.name nama jabatan
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /jabatan/:id Delete Jabatan
 * @apiVersion 0.1.0
 * @apiName Delete Jabatan
 * @apiGroup Jabatan
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id jabatan
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id jabatan
 * @apiSuccess {String} data.name nama jabatan
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /jabatan/ Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup Jabatan
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id jabatan
 * @apiSuccess {String} data.name nama jabatan
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 * 
 */