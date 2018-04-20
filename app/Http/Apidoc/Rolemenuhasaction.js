
/**
 * @api {post} /rolemenuaction/ Set Action of Role's Menu
 * @apiVersion 0.1.0
 * @apiName Set Action of Role's Menu
 * @apiGroup Privilege Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} rolemenu_id id role menu
 * @apiParam {Integer} action_id id action
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.rolemenu_id id role menu
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id
 *
 */

/**
 * @api {get} /rolemenuaction/:id Get Action of Role's Menu By ID
 * @apiVersion 0.1.0
 * @apiName Get Action of Role's Menu By ID
 * @apiGroup Privilege Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id action of role's menu
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id action of role's menu
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.nama_role nama role
 * @apiSuccess {Integer} data.menu_id id menu
 * @apiSuccess {String} data.nama_menu nama menu
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {String} data.nama_action nama action
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {put} /rolemenuaction/:id Update Action of Role's Menu
 * @apiVersion 0.1.0
 * @apiName Update Action of Role's Menu
 * @apiGroup Privilege Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id action of role's menu
 * @apiParam {Integer} rolemenu_id id role menu
 * @apiParam {Integer} action_id id action
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.rolemenu_id id role menu
 * @apiSuccess {String} data.action_id id action
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /rolemenuaction/:id Delete Action of Role's Menu
 * @apiVersion 0.1.0
 * @apiName Delete Action of Role's Menu
 * @apiGroup Privilege Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id action of role's menu
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id action of role's menu
 * @apiSuccess {Integer} data.rolemenu_id id role menu
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
 * @api {get} /rolemenuaction/ Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup Privilege Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role menu
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.nama_role nama role
 * @apiSuccess {Integer} data.menu_id id menu
 * @apiSuccess {String} data.nama_menu nama menu
 * 
 */

/**
 * @api {get} /rolemenuaction/menu/:id Get Menu Action by ID Menu
 * @apiVersion 0.1.0
 * @apiName Get Menu Action by ID Menu
 * @apiGroup Privilege Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id menu
 * 
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id menu action
 * @apiSuccess {Integer} data.menu_id id menu
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {String} data.name namaaction
 * 
 */