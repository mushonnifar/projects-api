
/**
 * @api {post} /route Create route
 * @apiVersion 0.1.0
 * @apiName Create Route
 * @apiGroup Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {String} name nama route
 * @apiParam {String} description deskripsi route
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Data has been added
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {String} data.name nama route
 * @apiSuccess {String} data.description deskripsi route
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id route
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /route/:id Get route By ID
 * @apiVersion 0.1.0
 * @apiName Get Route By ID
 * @apiGroup Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id route
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Get data successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id route
 * @apiSuccess {String} data.name nama route
 * @apiSuccess {String} data.description deskripsi route
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
 * @api {put} /route/:id Update Route
 * @apiVersion 0.1.0
 * @apiName Update Route
 * @apiGroup Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user
 * @apiParam {String} name nama route
 * @apiParam {String} description deskripsi route
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Data has been updated
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id route
 * @apiSuccess {String} data.name nama route
 * @apiSuccess {String} data.description deskripsi route
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /route/:id Delete Route
 * @apiVersion 0.1.0
 * @apiName Delete Route
 * @apiGroup Route
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id route
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id route
 * @apiSuccess {String} data.name nama route
 * @apiSuccess {String} data.description deskripsi route
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /route Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup Route
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Get data successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id route
 * @apiSuccess {String} data.name nama route
 * @apiSuccess {String} data.description deskripsi route
 * @apiSuccess {String} data.isactive status aktif
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 * 
 */