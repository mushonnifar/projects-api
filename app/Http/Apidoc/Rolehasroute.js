/**
 * @api {post} /roleroute/setaction Set Privilege Route
 * @apiVersion 0.1.0
 * @apiName Set Privilege Route
 * @apiGroup Privilege Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} role_id id role
 * @apiParam {Integer} route_id id route
 * @apiParam {Integer} action_id id action
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id role route
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /roleroute/getaction/:id Get All Route Action by ID Role
 * @apiVersion 0.1.0
 * @apiName Get All Route Action by ID Role
 * @apiGroup Privilege Route
 * 
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id role
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id route action
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {String} data.nama_route nama route
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {String} data.nama_action nama action
 * @apiSuccess {String} token kode token baru
 */

/**
 * @api {delete} /roleroute/deleteaction/:id Unset Privilege Route
 * @apiVersion 0.1.0
 * @apiName Unset Privilege Route
 * @apiGroup Privilege Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id role route action
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role route action
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {String} token kode token baru
 *
 */