/**
 * @api {get} /action/ Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup Action
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id action
 * @apiSuccess {String} data.name nama action
 * @apiSuccess {String} data.description deskripsi action
 * @apiSuccess {Integer} data.created_by id user yg melakukan create
 * @apiSuccess {Integer} data.updated_by id user yg melakukan update
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * 
 */

