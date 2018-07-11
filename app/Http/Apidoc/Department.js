
/**
 * @api {post} /department/ Create department
 * @apiVersion 0.1.0
 * @apiName Create department
 * @apiGroup Department
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {String} name nama department
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {String} data.name nama department
 * @apiSuccess {Integer} data.created_by id user yang melakukan create data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Integer} data.id id department
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /department/:id Get Department By ID
 * @apiVersion 0.1.0
 * @apiName Get Department By ID
 * @apiGroup Department
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id department
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id department
 * @apiSuccess {String} data.name nama department
 * @apiSuccess {Integer} data.created_by id user yang melakukan create data
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {put} /department/:id Update Department
 * @apiVersion 0.1.0
 * @apiName Update Department
 * @apiGroup Department
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user
 * @apiParam {String} name nama department
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id department
 * @apiSuccess {String} data.name nama department
 * @apiSuccess {Integer} data.created_by id user yang melakukan create data
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /department/:id Delete Department
 * @apiVersion 0.1.0
 * @apiName Delete Department
 * @apiGroup Department
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id department
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id department
 * @apiSuccess {String} data.name nama department
 * @apiSuccess {Integer} data.created_by id user yang melakukan create data
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /department/ Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup department
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id department
 * @apiSuccess {String} data.name nama department
 * @apiSuccess {Integer} data.created_by id user yang melakukan create data
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {String} token kode token baru
 */