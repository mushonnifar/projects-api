
/**
 * @api {post} /rolerouteaction/ Set Action of Role's Route
 * @apiVersion 0.1.0
 * @apiName Set Action of Role's Route
 * @apiGroup Privilege Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} roleroute_id id role route
 * @apiParam {Integer} action_id id action
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.roleroute_id id role route
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id
 *
 */

/**
 * @api {get} /rolerouteaction/:id Get Action of Role's Route By ID
 * @apiVersion 0.1.0
 * @apiName Get Action of Role's Route By ID
 * @apiGroup Privilege Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id action of role's route
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id action of role's route
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.nama_role nama role
 * @apiSuccess {Integer} data.route_id id route
 * @apiSuccess {String} data.nama_route nama route
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {String} data.nama_action nama action
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {put} /rolerouteaction/:id Update Action of Role's Route
 * @apiVersion 0.1.0
 * @apiName Update Action of Role's Route
 * @apiGroup Privilege Route
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id action of role's route
 * @apiParam {Integer} roleroute_id id role route
 * @apiParam {Integer} action_id id action
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.roleroute_id id role route
 * @apiSuccess {String} data.action_id id action
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /rolerouteaction/:id Delete Action of Role's Route
 * @apiVersion 0.1.0
 * @apiName Delete Action of Role's Route
 * @apiGroup Privilege Route
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id action of role's route
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id action of role's route
 * @apiSuccess {Integer} data.roleroute_id id role route
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} message Removed successfully
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /rolerouteaction/ Get All Data
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
 * 
 */