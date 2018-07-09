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
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Data has been added
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role route action
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
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
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Get data successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role route action
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {String} data.route_name nama route
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {String} data.action_name nama action
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
 * @apiSuccess {Integer} status 1
 * @apiSuccess {String} status_txt success
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role route action
 * @apiSuccess {Integer} data.roleroute_id id role route
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 */