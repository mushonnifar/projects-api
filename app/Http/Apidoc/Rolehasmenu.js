
/**
 * @api {post} /rolemenu/ Set Route of Role
 * @apiVersion 0.1.0
 * @apiName Create Rolehasmenu
 * @apiGroup Privilege Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} role_id id role
 * @apiParam {Integer} menu_id id menu
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.menu_id id menu
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id role
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /rolemenu/:id Get Role Menu By ID
 * @apiVersion 0.1.0
 * @apiName Get Role Menu By ID
 * @apiGroup Privilege Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id role menu
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role menu
 * @apiSuccess {Integer} data.menu_id id menu
 * @apiSuccess {String} data.nama_menu nama menu
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {String} data.nama_role nama role
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {String} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {put} /rolemenu/:id Update Role Menu
 * @apiVersion 0.1.0
 * @apiName Update Role Menu
 * @apiGroup Privilege Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id Role Menu
 * @apiParam {Integer} menu_id id menu
 * @apiParam {Integer} role_id id role
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role menu
 * @apiSuccess {Integer} data.menu_id id menu
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
 * @api {delete} /rolemenu/:id Delete Role Menu
 * @apiVersion 0.1.0
 * @apiName Delete Role Menu
 * @apiGroup Privilege Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id role menu
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role menu
 * @apiSuccess {Integer} data.menu_id id menu
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
 * @api {get} /rolemenu/ Get All Data
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
 * @apiSuccess {String} token kode token baru
 */

/**
 * @api {post} /rolemenu/setaction Set Privilege Menu
 * @apiVersion 0.1.0
 * @apiName Set Privilege Menu
 * @apiGroup Privilege Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} role_id id role
 * @apiParam {Integer} menu_id id menu
 * @apiParam {Integer} action_id id action
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.menu_id id menu
 * @apiSuccess {Integer} data.role_id id role
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id role menu
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /rolemenu/getaction/:id Get All Menu Action by ID Role
 * @apiVersion 0.1.0
 * @apiName Get All Menu Action by ID Role
 * @apiGroup Privilege Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id role
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id menu action
 * @apiSuccess {Integer} data.menu_id id menu
 * @apiSuccess {String} data.nama_menu nama menu
 * @apiSuccess {Integer} data.action_id id action
 * @apiSuccess {String} data.nama_action nama action
 * @apiSuccess {String} token kode token baru
 */

/**
 * @api {delete} /rolemenu/deleteaction/:id Unset Privilege Menu
 * @apiVersion 0.1.0
 * @apiName Unset Privilege Menu
 * @apiGroup Privilege Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id role menu action
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id role menu action
 * @apiSuccess {Integer} data.menu_id id menu
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