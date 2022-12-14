<?php
/**********************************************************************
	Copyright (C) FrontAccounting, LLC.
	Released under the terms of the GNU General Public License, GPL, 
	as published by the Free Software Foundation, either version 3 
	of the License, or (at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
	See the License here <http://www.gnu.org/licenses/gpl-3.0.html>.
***********************************************************************/

$page_security = 'SA_ITEM';
$path_to_root = '../..';
include_once($path_to_root.'/includes/session.inc');
include_once($path_to_root.'/includes/ui.inc');
include_once($path_to_root.'/inventory/includes/db/items_db.inc');

$js = get_js_select_combo_item();

page(_($help_context = 'Items'), true, false, '', $js);

if(get_post('search'))
	$Ajax->activate('item_tbl');

start_form(false, $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);

start_table(TABLESTYLE_NOBORDER);
start_row();

text_cells(_('Description'), 'description');
submit_cells('search', _('Search'), '', _('Search items'), 'default');

end_row();
end_table();

end_form();

div_start('item_tbl');
start_table(TABLESTYLE);

$th = array('', _('Item Code'), _('Description'), _('Category'));
table_header($th);

$k = 0;
$result = get_items_search(get_post('description'), @$_GET['type']);

while ($myrow = db_fetch_assoc($result)) {
	alt_table_row_color($k);

	ahref_cell(_('Select'), 'javascript:void(0)', '', 'selectComboItem(window.opener.document, "'.$_GET['client_id'].'", "'.$myrow['item_code'].'")');
	
	label_cell($myrow['item_code']);
	label_cell($myrow['description']);
	label_cell($myrow['category']);
	end_row();
}

end_table(1);

div_end();
end_page(true);
