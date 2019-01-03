<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * última edición: 22/03/2015
 * Ricardo Ramírez R.
 * Adan Rivera - 12/08/2016
 */

    // For quick cash buttons -  if you need to format the currency please do it according to you system settings
$lang['quick_cash_notes']                           = array('10', '20', '50', '100', '500', '1000', '5000');

$lang['pos_settings']                               = "Ajustes POS";
    /* POS Configuration */
$lang['pos_config']                                 = "Configuración POS";
$lang['pro_limit']                                  = "Cantidad de Productos a mostrar";
$lang['default_category']                           = "Categoría Inicial";
$lang['default_biller']                             = "Facturador por Omisión";
$lang['default_customer']                           = "Cliente por Omisión";
$lang['display_time']                               = "Mostar la Hora";
$lang['onscreen_keyboard']                          = "Mostrar Teclado en Pantalla";
$lang['product_button_color']                       = "Color del Botón de Producto";
$lang['tooltips']                                   = "Tooltips";
$lang['enable_java_applet']                         = "Habilitar Applet de Java";

    /* Custom fields for receipt */
$lang['custom_fileds']                              = "Campos Personalizados para Recibos";
$lang['cf_title1']                                  = "Campo Personalizado 1 - Título";
$lang['cf_value1']                                  = "Campo Personalizado 1 - Valor";
$lang['cf_title2']                                  = "Campo Personalizado 2 - Título";
$lang['cf_value2']                                  = "Campo Personalizado 2 - Valor";

    /* Shortcuts */
$lang['shortcuts']                                  = "Atajos";
$lang['shortcut_heading']                           = "Ctrl, Shift y Alt con otra letra (Ctrl+Shift+A). Las teclas de función (F1 - F12) tambien se pueden usar.";
$lang['focus_add_item']                             = "Ir al campo de entrada de producto";
$lang['add_manual_product']                         = "Adicionar Manualmente Un producto";
$lang['customer_selection']                         = "Entrada de Cliente";

$lang['toggle_category_slider']                     = "Alternar Lámina de Categories";
$lang['toggle_subcategory_slider']                  = "Alternar Lámina de Subcategories";
$lang['cancel_sale']                                = "Cancelar Venta";
$lang['suspend_sale']                               = "Suspender Venta";
$lang['print_items_list']                           = "Imprimir Lista de productos";
$lang['finalize_sale']                              = "Finalizar Venta";
$lang['today_sale']                                 = "Ventas de Hoy";
$lang['open_hold_bills']                            = "Abrir Ventas Suspendidas";
$lang['close_register']                             = "Cerrar Registradora";

    /* Payment Gateways */
$lang['payment_gateways']                           = "Pasarelas de Pagos";
$lang['paypal_pro']                                 = "Paypal Pro";
$lang['ppp']                                        = "Paypal Pro";
$lang['APIUsername']                                = "Paypal Pro API Username";
$lang['APIPassword']                                = "Paypal Pro API Password";
$lang['APISignature']                               = "Paypal Pro API Signature";
$lang['stripe']                                     = "Stripe";
$lang['stripe_secret_key']                          = "Stripe Secret Key";
$lang['stripe_publishable_key']                     = "Stripe Publishable Key";

$lang['update_settings']                            = "Guardar Ajustes";


$lang['pos_module']                                 = "Módulo POS";
$lang['cat_limit']                                  = "Mostrar Categorías";
$lang['barcode_scanner']                            = "Lector de Código de Barras";
$lang['x']                                          = "X";
$lang['qty']                                        = "Cantidad";
$lang['total_items']                                = "Total productos";
$lang['total_payable']                              = "Total por Pagar";
$lang['total_sales']                                = "Total Ventas";
$lang['tax1']                                       = "Impuesto 1";
$lang['total_x_tax']                                = "Total";
$lang['cancel']                                     = "Cancelar";
$lang['payment']                                    = "Pagar";
$lang['pos']                                        = "POS";
$lang['p_o_s']                                      = "Punto de Venta";
$lang['daily_sales']                                = "Ventas Diarias";
$lang['monthly_sales']                              = "Ventas Mensuales";
$lang['loading']                                    = "Cargando...";
$lang['pos_setting_updated']                        = "Ajustes POS actualizados correctamente";
$lang['tax_request_failed']                         = "Falló el requerimiento, Hay un problema con la tasa del impuesto";
$lang['pos_error']                                  = "Un error ha ocurrido en el cálculo. Por favor adicione el producto nuevamente. Gracias!";
$lang['qty_limit']                                  = "Ha alcanzado el límite de 999 productos.";
$lang['max_pro_reached']                            = "Máximo permitido alcanzado! Por favor proceda al pago para este recibo y abra uno nuevo para esté producto y los siguientes. Gracias!";
$lang['code_error']                                 = "Falló Requerimiento, Por favor revise el código e intente nuevamente!";
$lang['x_total']                                    = "Por favor agregue primero un producto y después el pago. Gracias!";
$lang['paid_l_t_payable']                           = "La cantidad que esta pagando es menor a la que debe pagar.";
$lang['suspended_sales']                            = "Ventas Suspendidas";
$lang['sale_suspended']                             = "Venta correctamente Suspendida.";
$lang['sale_suspend_failed']                        = "Falló la Suspensión de la Venta. Por favor intente nuevamente!";
$lang['add_to_pos']                                 = "Agregar esta venta a la pantalla del POS";
$lang['delete_suspended_sale']                      = "Borrar esta venta suspendida";
$lang['save']                                       = "Guardar";
$lang['discount_request_failed']                    = "Falló el Requerimiento, Hay un problema con el descuento!";
$lang['saving']                                     = "Guardando...";
$lang['paid_by']                                    = "Pagado en";
$lang['paid']                                       = "Pagado";
$lang['ajax_error']                                 = "Falló el Requerimiento, Por favor intente nuevamente!";
$lang['close']                                      = "Cerrar";
$lang['finalize_sale']                              = "Finalizar Venta";
$lang['cash_sale']                                  = "Pago en Efectivo";
$lang['cc_sale']                                    = "Pago Con Tarjeta de Crédito";
$lang['ch_sale']                                    = "Pago con Cheque";
$lang['sure_to_suspend_sale']                       = "¿Está seguro de suspend Venta?";
$lang['leave_alert']                                = "Va a perder la información de la venta. Pulse OK para salir o Cancelar para quedarse en ésta página.";
$lang['sure_to_cancel_sale']                        = "¿Está seguro de Cancelar la Venta?";
$lang['sure_to_submit_sale']                        = "¿Está seguro de Enviar la Venta?";
$lang['alert_x_sale']                               = "¿Está seguro de borrar ésta venta suspendida?";
$lang['suspended_sale_deleted']                     = "Venta suspendida borrada correctamente";
$lang['item_count_error']                           = "Un error ha ocurrido mientras se contaban todos los productos. Por favor intente nuevamente!";
$lang['x_suspend']                                  = "Por favor agregue primero un producto y después suspenda la venta. Gracias!";
$lang['x_cancel']                                   = "No hay producto. Gracias!";
$lang['yes']                                        = "Si";
$lang['no1']                                        = "No";
$lang['suspend']                                    = "Suspender";
$lang['order_list']                                 = "Ordenar Lista";
$lang['print']                                      = "Imprimir";
$lang['cf_display_on_bill']                         = "Campo personalizado para presentar en el recibo del POS";

$lang['cash']                                       = "Efectivo";
$lang['cc']                                         = "Tarjeta de Crédito";
$lang['cheque']                                     = "Cheque";
$lang['cc_no']                                      = "Tarjeta de Crédito No";
$lang['cc_holder']                                  = "Nombre en la Tarjeta";
$lang['cheque_no']                                  = "Cheque No";
$lang['email_sent']                                 = "Correo envíado correctamente!";
$lang['email_failed']                               = "Falló al enviar correo!";
$lang['back_to_pos']                                = "Vorver al POS";
$lang['shortcut_key']                               = "Tecla de Atajo";
$lang['shortcut_keys']                              = "Teclas de Atajos";
$lang['keyboard']                                   = "Teclado";
$lang['search_product_by_name_code']                = "Escanear/Buscar producto por Nombre/Código";
$lang['receipt_printer']                            = "Impresora de Recibos";
$lang['cash_drawer_codes']                          = "Codigo para abrir el cajón registradora";
$lang['pos_list_printers']                          = "Lista de impresoras POS (Separadas por |)";
$lang['edit_order_tax']                             = "Editar Impuesto de la Órden";
$lang['select_order_tax']                           = "Seleccionar Impuestdo de la Órden";
$lang['paying_by']                                  = "Pagando en";
$lang['swipe']                                      = "Deslice";
$lang['card_type']                                  = "Tipo de Tarjeta";
$lang['Visa']                                       = "Visa";
$lang['MasterCard']                                 = "MasterCard";
$lang['Amex']                                       = "Amex";
$lang['Discover']                                   = "Discover";
$lang['month']                                      = "Mes";
$lang['year']                                       = "Año";
$lang['cvv2']                                       = "Código de Seguridad";
$lang['total_paying']                               = "Total Entregado";
$lang['balance']                                    = "Cambio";
$lang['serial_no']                                  = "No Serial";
$lang['product_discount']                           = "Descuento de Producto";
$lang['max_reached']                                = "Máximo límite alcanzado.";
$lang['add_more_payments']                          = "Añadir más Pagos";
$lang['sell_gift_card']                             = "Vender Tarjeta de Regalo";
$lang['gift_card']                                  = "Tarjeta de Regalo";
$lang['product_option']                             = "Opción de Producto";
$lang['card_no']                                    = "Tarjeta No";
$lang['value']                                      = "Valor";
$lang['paypal']                                     = "Paypal";
$lang['sale_added']                                 = "Venta POS correctamente añadida";
$lang['invoice']                                    = "factura";
$lang['vat']                                        = "ITBIS";
$lang['web_print']                                  = "Impresión Web";
$lang['ajax_request_failed']                        = "Requerimiento de Ajax falló, por favor intente nuevamente";
$lang['default']                                    = "Por Omisión";
$lang['primary']                                    = "Primario";
$lang['info']                                       = "Información";
$lang['warning']                                    = "Precaución";
$lang['danger']                                     = "Peligro";
$lang['open_register']                              = "Abrir Registro";
$lang['cash_in_hand']                               = "Efectivo en mano";
$lang['total_cash']                                 = "Total Efectivo";
$lang['total_cheques']                              = "Total Cheques";
$lang['total_cc_slips']                             = "Total Tarjeta de Crédito deslizadas";
$lang['CC']                                         = "Tarjeta de Crédito";
$lang['register_closed']                            = "Registro correctamente cerrada";
$lang['register_not_open']                          = "El registro no está abierto, Por favor digite el efectivo en mano y pulse Abrir Registro";
$lang['welcome_to_pos']                             = "Bienvenido a POS";
$lang['previous']                                   = "Anterior";
$lang['next']                                       = "Siguiente";
$lang['view_bill']                                  = "Ver factura";
$lang['view_bill_screen']                           = "Ver pantalla de factura";
$lang['opened_bills']                               = "Facturas abiertas";
$lang['leave_opened']                               = "Dejar Abierta";
$lang['delete_bill']                                = "Borrar Factura";
$lang['delete_all']                                 = "Borrar todo";
$lang['transfer_opened_bills']                      = "Transferir Facturas Abiertas";
$lang['paypal_empty_error']                         = "Falló transacción con Paypal (Retorno un arreglo vacio)";
$lang['payment_failed']                             = "<strong>Falló el Pago!</strong>";
$lang['pending_amount']                             = "Canidad Pendiente";
$lang['available_amount']                           = "Canidad Disponible";
$lang['stripe_balance']                             = "Balance de Stripe";
$lang['paypal_balance']                             = "Balance Paypal";
$lang['view_receipt']                               = "Ver Recibo";
$lang['rounding']                                   = "Redondeado";
$lang['delete_sale']                                = "Borrar Venta";
$lang['return_sale']                                = "Devolución de Venta";
$lang['edit_sale']                                  = "Editar Venta";
$lang['email_sale']                                 = "Enviar Vorreo de Venta";
$lang['add_delivery']                               = "Añadir Despacho";
$lang['add_payment']                                = "Añadir Pago";
$lang['view_payments']                              = "Ver Pagos";
$lang['no_meil_provided']                           = "No se suministró dirección de correo";
$lang['payment_added']                              = "Pago correctamente añadido";
$lang['suspend_sale']                               = "Venta Suspendida";
$lang['reference_note']                             = "Nota de Referencia";
$lang['type_reference_note']                        = "Por favor escriba una nota de referencia y envíe a suspendida esta venta";
$lang['change']                                     = "Cambiar";
$lang['quick_cash']                                 = "Efectivo Rápido";
$lang['sales_person']                               = "Asociado de Ventas";
$lang['pos_setting_updated_payment_failed']         = "Ajustes POS correctamente guardado pero los ajustes de la pasalera de pago falló. Por favor intenete nuevamente";

$lang['edit_order_discount']                        = "Editar Descuento de la Orden";
$lang['sale_note']                                  = "Nota de venta";
$lang['staff_note']                                 = "Nota del Personal";
$lang['list_open_registers']                        = "Ver Lista de Cajas Abiertas";
$lang['open_registers']                             = "Abrir Registradoras";
$lang['opened_at']                                  = "Abierta a las";
$lang['all_registers_are_closed']                   = "Todas las registradoras estan cerradas";
$lang['review_opened_registers']                    = "por favor revisa todas las registradoras abiertas en la siguiente tabla";
$lang['suspended_sale_loaded']                      = "Venta Suspendida Satisfactoriamente Cargada";
$lang['incorrect_gift_card']                        = "El numero de la tarjeta de regalo esta incorrecto o expirado.";
$lang['gift_card_not_for_customer']                 = "El numero de la tarjeta de regalo no pertenece a este cliente.";
$lang['delete_sales']                               = "Eliminar Ventas";
$lang['click_to_add']                               = "Por favor presiona el boton para abrir";
$lang['tax_summary']                                = "Resumen de impuestos";
$lang['qty']                                        = "Cantidad";
$lang['tax_excl']                                   = "Impuesto excluido";
$lang['tax_amt']                                    = "Monto de impuesto";
$lang['total_tax_amount']                           = "Monto total de impuestos";
$lang['tax_invoice']                                = "Factura de impuestos";
$lang['char_per_line']                              = "Caracteres por linea";
$lang['delete_code']                                = "Codigo Pin del POS";
$lang['quantity_out_of_stock_for_%s']               = "La cantidad esta fuera de inventario por %s";
$lang['refunds']                                    = "Reembolsos";
$lang['register_details']                           = "Detalles de Registradora";
$lang['payment_note']                               = "Nota de Pago";
$lang['to_nearest_005']                             = "To nearest 0.05";
$lang['to_nearest_050']                             = "To nearest 0.50";
$lang['to_nearest_number']                          = "To nearest number (integer)";
$lang['to_next_number']                             = "To next number (integer)";
$lang['update_heading']                             = "This page will help you check and install the updates easily with single click. <strong>If there are more than 1 updates available, please update them one by one starting from the top (lowest version)</strong>.";
$lang['update_successful']                          = "Producto Actualizado  Satisfactoriamente";
$lang['using_latest_update']                        = "You are using the latest version.";
$lang['order']                                      = "Orden";
$lang['bill']                                       = "Factura";

$lang['c_name']                                    = "Nombre de Cliente";
$lang['credit_status']                             = "Credito Disponible";
$lang['biller_additional_info']                    = "TIPO DE FACTURA";
$lang['none']                                      = "NINGUNO";
$lang['proof']                                     = "PRUEBA";
$lang['final_consumer']                            = "CONSUMIDOR FINAL";
$lang['credit_fiscal']                             = "CREDITO FISCAL";
$lang['credit_note']                               = "NOTA DE CREDITO";
$lang['special_regime']                            = "REGIMEN ESPECIAL";
$lang['governmental']                              = "GUBERNAMENTAL";
$lang['additional_sl']                             = "NCF";
$lang['authorization_number']                      = "No. Aut.";
$lang['paid_n_e_payable']                          = "La cantidad pagada no es igual a la cantidad total.";
$lang['bill_term']                                 = "Condicion";
$lang['client_phone']                              = "Tel. cliente";


$lang['expire_date']                               = "NCF Vence";
$lang['invoice_expire_date']                       = "Factura Vence";
$lang['vat_number']                                 = "RNC cliente";
$lang['vat_no']                                     = "RNC";
$lang['rate']                                       = "Precio";
$lang['sale_no_ref']                                = "Referencia";
$lang['Product Tax']                                = "Impuestos";
$lang['biller_addition_info']                       = "FACTURA ";
$lang['credit']                                     = "Crédito";
$lang['paid_amount']                                = "Monto De Pagado";
$lang['due_amount']                                 = "Monto Restante";
$lang['credit_sale']                                = "Vender a Credito";
$lang['merchant_copy']                              = "Copia Comercial";



//closing Register
$lang['total_cash_in_hand']                        = "Total efectivo en mano";
$lang['denominations']                             = "Denominaciones";
$lang['denominations_info']                        = "Denominaciones (ingrese la cantidad de efectivo en el registro)";

$lang['cash_payment']                              = "Pago en efectivo";
$lang['credit_payment']                            = "Pago de crédito";
$lang['credit_card_payment']                       = "Pago con tarjeta de crédito";
$lang['cheque_payment']                            = "Cheque de pago";
$lang['gift_payment']                              = "Pago con tarjeta de regalo";
$lang['refund']                                    = "Reembolsos";
$lang['return']                                    = "Devoluciones";
$lang['expense']                                   = "Gastos";
$lang['total_sales']                               = "Ventas totales";
$lang['cash_in_hand']                              = "Dinero en efectivo";
$lang['total_cash']                                = "Total Cash";
$lang['total_credit_card_slip']                    = "Total de tarjetas de crédito";
$lang['total_cheque']                              = "Total Cheques";
$lang['reg_not_authorized']                        = "No estás autorizado para cerrar este registro.";