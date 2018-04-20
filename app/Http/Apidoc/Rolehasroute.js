
/**
 * @api {post} /roleroute/ Set Route of Role
 * @apiVersion 0.1.0
 * @apiName Create Rolehasroute
 * @apiGroup Privilege Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} role_id id role
 * @apiParam {Integer} route_id id route
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id role
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /roleroute/:id Get Role Route By ID
 * @apiVersion 0.1.0
 * @apiName Get Role Route By ID
 * @apiGroup Privilege Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id role route
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role route
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {String} data.nama_route nama route
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.nama_role nama role
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {put} /roleroute/:id Update Role Route
 * @apiVersion 0.1.0
 * @apiName Update Role Route
 * @apiGroup Privilege Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id Role Route
 * @apiParam {Integer} route_id id route
 * @apiParam {Integer} role_id id role
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role route
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /roleroute/:id Delete Role Route
 * @apiVersion 0.1.0
 * @apiName Delete Role Route
 * @apiGroup Privilege Route
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id role route
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role route
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /roleroute/ Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup Privilege Route
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role route
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.nama_role nama role
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {String} data.nama_route nama route
 * @apiSuccess {String} token kode token baru
 */