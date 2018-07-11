
/**
 * @api {post} /unitkerja Create unit kerja
 * @apiVersion 0.1.0
 * @apiName Create Unit Kerja
 * @apiGroup Unit Kerja
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {String} name nama unit kerja
 * @apiParam {Integer} department_id id department
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Data has been added
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {String} data.name nama unit kerja
 * @apiSuccess {Integer} data.department_id id department
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id unit kerja
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /unitkerja/:id Get unit kerja By ID
 * @apiVersion 0.1.0
 * @apiName Get Unit Kerja By ID
 * @apiGroup Unit Kerja
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id unitkerja
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Get data successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id unit kerja
 * @apiSuccess {String} data.name nama unit kerja
 * @apiSuccess {Integer} data.department_id id department
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
 * @api {put} /unitkerja/:id Update Unit Kerja
 * @apiVersion 0.1.0
 * @apiName Update Unit Kerja
 * @apiGroup Unit Kerja
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id user
 * @apiParam {String} name nama unitkerja
 * @apiParam {Integer} department_id id department
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Data has been updated
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id unit kerja
 * @apiSuccess {String} data.name nama unit kerja
 * @apiSuccess {Integer} data.department_id id department
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /unitkerja/:id Delete Unit Kerja
 * @apiVersion 0.1.0
 * @apiName Delete Unit Kerja
 * @apiGroup Unit Kerja
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id unit kerja
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id unit kerja
 * @apiSuccess {String} data.name nama unit kerja
 * @apiSuccess {Integer} data.department_id id department
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status 0
 * @apiError {String} status_txt errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /unitkerja Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup Unit Kerja
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Get data successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id unit kerja
 * @apiSuccess {String} data.name nama unit kerja
 * @apiSuccess {Integer} data.department_id id department
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 * 
 */