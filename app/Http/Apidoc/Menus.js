/**
 * @api {post} /menu/ Create menu
 * @apiVersion 0.1.0
 * @apiName Create Menu
 * @apiGroup Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} parent menu parent (opsional)
 * @apiParam {String} name nama menu
 * @apiParam {String} description deskripsi menu
 * @apiParam {String} link link menu
 * @apiParam {String} icon icon menu
 * @apiParam {Integer} order nomor urut menu
 *
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {String} data.name nama menu
 * @apiSuccess {String} data.description deskripsi menu
 * @apiSuccess {String} link link menu
 * @apiSuccess {String} icon icon menu
 * @apiSuccess {Integer} order nomor urut menu
 * @apiSuccess {Integer} data.created_by id user yang melakukan create
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {Integer} data.id id menu
 * @apiSuccess {String} token kode token baru
 *
 */

/**
 * @api {get} /menu/id/:id Get Menu By ID
 * @apiVersion 0.1.0
 * @apiName Get Menu By ID
 * @apiGroup Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id menu
 *
 * @apiSuccess {String} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id menu
 * @apiSuccess {String} data.name nama menu
 * @apiSuccess {String} data.description deskripsi menu
 * @apiSuccess {String} data.link link menu
 * @apiSuccess {String} data.icon icon menu
 * @apiSuccess {Integer} data.order nomor urut menu
 * @apiSuccess {Integer} data.updated_by id user yang melakukan update data
 * @apiSuccess {Integer} data.created_by id user yang melakukan create data
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {put} /menu/:id Update Menu
 * @apiVersion 0.1.0
 * @apiName Update Menu
 * @apiGroup Menu
 *
 * @apiHeader {String} x-access-token token autentikasi
 * 
 * @apiParam {Integer} id id menu
 * @apiParam {Integer} parent menu parent (opsional)
 * @apiParam {String} name nama menu
 * @apiParam {String} description deskripsi menu
 * @apiParam {String} link link menu
 * @apiParam {String} icon icon menu
 * @apiParam {Integer} order nomor urut menu
 *
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id menu
 * @apiSuccess {String} data.name nama menu
 * @apiSuccess {String} data.description deskripsi menu
 * @apiSuccess {String} data.link link menu
 * @apiSuccess {String} data.icon icon menu
 * @apiSuccess {Integer} data.order nomor urut menu
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {delete} /menu/:id Delete Menu
 * @apiVersion 0.1.0
 * @apiName Delete Menu
 * @apiGroup Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiParam {Integer} id id menu
 *
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id menu
 * @apiSuccess {String} data.name nama menu
 * @apiSuccess {String} data.description deskripsi menu
 * @apiSuccess {String} data.link link menu
 * @apiSuccess {String} data.icon icon menu
 * @apiSuccess {Integer} data.order nomor urut menu
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} message Removed successfully
 * @apiSuccess {String} token kode token baru
 *
 * @apiError {Integer} status errors
 * @apiError {String} message pesan eror
 */

/**
 * @api {get} /menu/ Get All Data
 * @apiVersion 0.1.0
 * @apiName Get All Data
 * @apiGroup Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id menu
 * @apiSuccess {String} data.name nama menu
 * @apiSuccess {String} data.description deskripsi menu
 * @apiSuccess {String} data.link link menu
 * @apiSuccess {String} data.icon icon menu
 * @apiSuccess {Integer} data.order nomor urut menu
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} data.parent_name nama parent
 * @apiSuccess {String} token kode token baru
 * 
 */

/**
 * @api {get} /menu/parent Get All Data Parent
 * @apiVersion 0.1.0
 * @apiName Get All Data Parent
 * @apiGroup Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id menu
 * @apiSuccess {Integer} data.parent 0
 * @apiSuccess {String} data.name nama menu
 * @apiSuccess {String} data.description deskripsi menu
 * @apiSuccess {String} data.link link menu
 * @apiSuccess {String} data.icon icon menu
 * @apiSuccess {Integer} data.order nomor urut menu
 * @apiSuccess {Timestamp} data.updated_at waktu update data
 * @apiSuccess {Timestamp} data.created_at waktu create data
 * @apiSuccess {String} token kode token baru
 * 
 */

/**
 * @api {get} /menu/getmenu/ Get Menu for Sidebar
 * @apiVersion 0.1.0
 * @apiName Get Menu
 * @apiGroup Menu
 * 
 * @apiHeader {String} x-access-token token autentikasi
 *
 * @apiSuccess {Integer} status success
 * @apiSuccess {Array[]} data array data
 * @apiSuccess {Integer} data.id id menu
 * @apiSuccess {String} data.name nama menu
 * @apiSuccess {String} data.description deskripsi menu
 * @apiSuccess {String} data.link link menu
 * @apiSuccess {String} data.icon icon menu
 * @apiSuccess {Integer} data.order nomor urut menu
 * @apiSuccess {Array[]} data.child child dari parent menu
 * @apiSuccess {Integer} data.data.id id menu
 * @apiSuccess {String} data.data.name nama menu
 * @apiSuccess {String} data.data.description deskripsi menu
 * @apiSuccess {String} data.data.link link menu
 * @apiSuccess {String} data.data.icon icon menu
 * @apiSuccess {Integer} data.data.order nomor urut menu
 * @apiSuccess {Integer} page halaman
 * @apiSuccess {Integer} size banyak data per halaman
 * @apiSuccess {Integer} totalCount jumlah seluruh data
 * 
 */