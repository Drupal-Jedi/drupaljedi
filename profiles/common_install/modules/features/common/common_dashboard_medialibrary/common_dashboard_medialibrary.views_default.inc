<?php
/**
 * @file
 * common_dashboard_medialibrary.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function common_dashboard_medialibrary_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'dashboard_medialibrary';
  $view->description = 'Médiathèque';
  $view->tag = 'dashboard';
  $view->base_table = 'asset';
  $view->human_name = 'Dashboard Multimedia library';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Media Images / Video';
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['use_more'] = TRUE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['use_more_text'] = 'Tous les médias';
  $handler->display->display_options['link_display'] = 'custom_url';
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['distinct'] = TRUE;
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['exposed_form']['options']['reset_button'] = TRUE;
  $handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Trier par';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '20';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['expose']['items_per_page_label'] = 'Éléments par page';
  $handler->display->display_options['pager']['options']['expose']['items_per_page_options_all_label'] = '- Tout -';
  $handler->display->display_options['pager']['options']['expose']['offset_label'] = 'Décalage';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'sitename' => 'sitename',
    'aid' => 'aid',
    'title' => 'title',
    'field_asset_image' => 'field_asset_image',
    'field_asset_video' => 'field_asset_image',
    'name' => 'name',
    'field_user_name' => 'field_user_name',
    'edit_asset' => 'edit_asset',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'sitename' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 1,
    ),
    'aid' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_asset_image' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_asset_video' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'name' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_user_name' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'edit_asset' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 1,
    ),
  );
  $handler->display->display_options['style_options']['empty_table'] = TRUE;
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = 'Aucun résultat';
  $handler->display->display_options['empty']['area']['format'] = 'filtered_html';
  /* Relationship: Media Asset: Author */
  $handler->display->display_options['relationships']['uid']['id'] = 'uid';
  $handler->display->display_options['relationships']['uid']['table'] = 'asset';
  $handler->display->display_options['relationships']['uid']['field'] = 'uid';
  $handler->display->display_options['relationships']['uid']['label'] = 'Auteur';
  $handler->display->display_options['relationships']['uid']['required'] = TRUE;
  /* Relationship: Media Asset: Asset type */
  $handler->display->display_options['relationships']['type']['id'] = 'type';
  $handler->display->display_options['relationships']['type']['table'] = 'asset';
  $handler->display->display_options['relationships']['type']['field'] = 'type';
  $handler->display->display_options['relationships']['type']['required'] = TRUE;
  /* Field: Media Asset: Aid */
  $handler->display->display_options['fields']['aid']['id'] = 'aid';
  $handler->display->display_options['fields']['aid']['table'] = 'asset';
  $handler->display->display_options['fields']['aid']['field'] = 'aid';
  $handler->display->display_options['fields']['aid']['label'] = '';
  $handler->display->display_options['fields']['aid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['aid']['element_label_colon'] = FALSE;
  /* Field: Asset type: Machine-readable name */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'asset_type';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['relationship'] = 'type';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  /* Field: Media Asset: Image */
  $handler->display->display_options['fields']['field_asset_image']['id'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['table'] = 'field_data_field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['field'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['label'] = 'Vignette';
  $handler->display->display_options['fields']['field_asset_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_asset_image']['hide_empty'] = TRUE;
  /* Field: Titre */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'asset';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Titre';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['asset_tooltip'] = 'tooltip';
  $handler->display->display_options['fields']['title']['link_to_asset'] = FALSE;
  /* Field: Asset type: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'asset_type';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'type';
  $handler->display->display_options['fields']['name']['label'] = 'Type';
  $handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
  /* Field: Global: Reference button */
  $handler->display->display_options['fields']['ref_dialog_button']['id'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['table'] = 'views';
  $handler->display->display_options['fields']['ref_dialog_button']['field'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['label'] = '';
  $handler->display->display_options['fields']['ref_dialog_button']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['ref_dialog_button']['text'] = 'Ajouter';
  /* Sort criterion: Media Asset: Date created */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'asset';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Media Asset: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'asset';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['operator'] = 'contains';
  $handler->display->display_options['filters']['title']['group'] = 1;
  $handler->display->display_options['filters']['title']['exposed'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['label'] = 'Title';
  $handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
  $handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Media Asset: Asset type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'asset';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['filters']['type']['exposed'] = TRUE;
  $handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['label'] = 'Type';
  $handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';

  /* Display: Médiathèque */
  $handler = $view->new_display('panel_pane', 'Médiathèque', 'pane_1');
  $handler->display->display_options['defaults']['use_ajax'] = FALSE;
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'aid' => 'aid',
    'type' => 'type',
    'title' => 'title',
    'name' => 'name',
    'field_asset_image' => 'field_asset_image',
    'name_1' => 'name_1',
    'common_edit_asset' => 'common_edit_asset',
    'common_delete_asset' => 'common_delete_asset',
    'changed' => 'changed',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'aid' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'type' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'name' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_asset_image' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'name_1' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'common_edit_asset' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'common_delete_asset' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'changed' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['empty_table'] = TRUE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Media Asset: Aid */
  $handler->display->display_options['fields']['aid']['id'] = 'aid';
  $handler->display->display_options['fields']['aid']['table'] = 'asset';
  $handler->display->display_options['fields']['aid']['field'] = 'aid';
  $handler->display->display_options['fields']['aid']['label'] = '';
  $handler->display->display_options['fields']['aid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['aid']['element_label_colon'] = FALSE;
  /* Field: Media Asset: Image */
  $handler->display->display_options['fields']['field_asset_image']['id'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['table'] = 'field_data_field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['field'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['label'] = 'Thumbnail';
  $handler->display->display_options['fields']['field_asset_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_asset_image']['settings'] = array(
    'image_style' => 'asset_list_preview',
    'image_link' => '',
  );
  /* Field: Media Asset: Video url */
  $handler->display->display_options['fields']['field_asset_video']['id'] = 'field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['table'] = 'field_data_field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['field'] = 'field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['label'] = '';
  $handler->display->display_options['fields']['field_asset_video']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_asset_video']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_asset_video']['type'] = 'emvideo_snapshot';
  $handler->display->display_options['fields']['field_asset_video']['settings'] = array(
    'width' => '100',
    'class' => '',
  );
  /* Field: Asset type: Machine-readable name */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'asset_type';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['relationship'] = 'type';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  /* Field: Titre */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'asset';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Titre';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['asset_tooltip'] = 'tooltip';
  $handler->display->display_options['fields']['title']['link_to_asset'] = FALSE;
  /* Field: Asset type: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'asset_type';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'type';
  $handler->display->display_options['fields']['name']['label'] = 'Type';
  $handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
  /* Field: User: Name */
  $handler->display->display_options['fields']['name_1']['id'] = 'name_1';
  $handler->display->display_options['fields']['name_1']['table'] = 'users';
  $handler->display->display_options['fields']['name_1']['field'] = 'name';
  $handler->display->display_options['fields']['name_1']['relationship'] = 'uid';
  $handler->display->display_options['fields']['name_1']['label'] = 'Author';
  /* Field: Media Asset: Le site asset edit link */
  $handler->display->display_options['fields']['common_edit_asset']['id'] = 'common_edit_asset';
  $handler->display->display_options['fields']['common_edit_asset']['table'] = 'asset';
  $handler->display->display_options['fields']['common_edit_asset']['field'] = 'common_edit_asset';
  $handler->display->display_options['fields']['common_edit_asset']['label'] = 'Edit';
  /* Field: Media Asset: Le site asset delete link */
  $handler->display->display_options['fields']['common_delete_asset']['id'] = 'common_delete_asset';
  $handler->display->display_options['fields']['common_delete_asset']['table'] = 'asset';
  $handler->display->display_options['fields']['common_delete_asset']['field'] = 'common_delete_asset';
  $handler->display->display_options['fields']['common_delete_asset']['label'] = 'Delete';
  /* Field: Media Asset: Date changed */
  $handler->display->display_options['fields']['changed']['id'] = 'changed';
  $handler->display->display_options['fields']['changed']['table'] = 'asset';
  $handler->display->display_options['fields']['changed']['field'] = 'changed';
  $handler->display->display_options['fields']['changed']['label'] = '';
  $handler->display->display_options['fields']['changed']['exclude'] = TRUE;
  $handler->display->display_options['fields']['changed']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['changed']['date_format'] = 'custom';
  $handler->display->display_options['fields']['changed']['custom_date_format'] = 'his';
  $handler->display->display_options['pane_title'] = 'Media';
  $handler->display->display_options['pane_category']['name'] = 'Tableau de bord';
  $handler->display->display_options['pane_category']['weight'] = '5';
  $handler->display->display_options['allow']['use_pager'] = 0;
  $handler->display->display_options['allow']['items_per_page'] = 0;
  $handler->display->display_options['allow']['offset'] = 0;
  $handler->display->display_options['allow']['link_to_view'] = 0;
  $handler->display->display_options['allow']['more_link'] = 0;
  $handler->display->display_options['allow']['path_override'] = 0;
  $handler->display->display_options['allow']['title_override'] = 'title_override';
  $handler->display->display_options['allow']['exposed_form'] = 0;
  $handler->display->display_options['allow']['fields_override'] = 0;

  /* Display: Search Image */
  $handler = $view->new_display('references_dialog', 'Search Image', 'references_dialog_1');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Media Asset: Aid */
  $handler->display->display_options['fields']['aid']['id'] = 'aid';
  $handler->display->display_options['fields']['aid']['table'] = 'asset';
  $handler->display->display_options['fields']['aid']['field'] = 'aid';
  $handler->display->display_options['fields']['aid']['label'] = '';
  $handler->display->display_options['fields']['aid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['aid']['element_label_colon'] = FALSE;
  /* Field: Media Asset: Image */
  $handler->display->display_options['fields']['field_asset_image_1']['id'] = 'field_asset_image_1';
  $handler->display->display_options['fields']['field_asset_image_1']['table'] = 'field_data_field_asset_image';
  $handler->display->display_options['fields']['field_asset_image_1']['field'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image_1']['label'] = 'Vignette';
  /* Field: Titre */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'asset';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Titre';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['asset_tooltip'] = 'tooltip';
  $handler->display->display_options['fields']['title']['link_to_asset'] = FALSE;
  /* Field: Global: Reference button */
  $handler->display->display_options['fields']['ref_dialog_button']['id'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['table'] = 'views';
  $handler->display->display_options['fields']['ref_dialog_button']['field'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['label'] = '';
  $handler->display->display_options['fields']['ref_dialog_button']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['ref_dialog_button']['text'] = 'Ajouter';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Media Asset: Asset type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'asset';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'image' => 'image',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Media Asset: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'asset';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['operator'] = 'contains';
  $handler->display->display_options['filters']['title']['group'] = 1;
  $handler->display->display_options['filters']['title']['exposed'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['label'] = 'Titre';
  $handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
  $handler->display->display_options['attach'] = array(
    0 => 'node:field_article_media:article',
    1 => 'asset:field_asset_diaporama:gallery',
    2 => 'node:field_folder_illustration:folder',
  );

  /* Display: Search all assets */
  $handler = $view->new_display('references_dialog', 'Search all assets', 'references_dialog_4');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Media Asset: Asset type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'asset';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'image' => 'image',
    'video' => 'video',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['filters']['type']['exposed'] = TRUE;
  $handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['label'] = 'Type';
  $handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';
  $handler->display->display_options['filters']['type']['expose']['reduce'] = TRUE;
  /* Filter criterion: Media Asset: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'asset';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['operator'] = 'contains';
  $handler->display->display_options['filters']['title']['group'] = 1;
  $handler->display->display_options['filters']['title']['exposed'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['label'] = 'Titre';
  $handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
  /* Filter criterion: Media Asset: Asset type */
  $handler->display->display_options['filters']['type_1']['id'] = 'type_1';
  $handler->display->display_options['filters']['type_1']['table'] = 'asset';
  $handler->display->display_options['filters']['type_1']['field'] = 'type';
  $handler->display->display_options['filters']['type_1']['value'] = array(
    'all' => 'all',
    'diaporama' => 'diaporama',
    'image' => 'image',
    'poll' => 'poll',
    'video' => 'video',
  );
  $handler->display->display_options['filters']['type_1']['group'] = 1;
  /* Filter criterion: Broken/missing handler */
  $handler->display->display_options['filters']['field_asset_free_crop_value_1']['id'] = 'field_asset_free_crop_value_1';
  $handler->display->display_options['filters']['field_asset_free_crop_value_1']['table'] = 'field_data_field_asset_free_crop';
  $handler->display->display_options['filters']['field_asset_free_crop_value_1']['field'] = 'field_asset_free_crop_value';
  $handler->display->display_options['filters']['field_asset_free_crop_value_1']['operator'] = 'empty';
  $handler->display->display_options['filters']['field_asset_free_crop_value_1']['group'] = 2;
  $handler->display->display_options['attach'] = array(
    0 => 'node:field_factual_media:factual',
  );

  /* Display: Médiathèque Dashboard */
  $handler = $view->new_display('panel_pane', 'Médiathèque Dashboard', 'panel_pane_1');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['link_url'] = 'admin/dashboard/multimedia';
  $handler->display->display_options['defaults']['access'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    3 => '3',
    4 => '4',
    5 => '5',
  );
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'field_asset_image' => 'field_asset_image',
    'field_asset_video' => 'field_asset_image',
    'aid' => 'aid',
    'title' => 'title',
    'name' => 'name',
    'name_1' => 'name_1',
    'edit_asset' => 'edit_asset',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'field_asset_image' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_asset_video' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'aid' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'name' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'name_1' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'edit_asset' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['empty_table'] = TRUE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Media Asset: Video url */
  $handler->display->display_options['fields']['field_asset_video']['id'] = 'field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['table'] = 'field_data_field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['field'] = 'field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['label'] = 'Video';
  $handler->display->display_options['fields']['field_asset_video']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_asset_video']['type'] = 'emvideo_snapshot';
  $handler->display->display_options['fields']['field_asset_video']['settings'] = array(
    'width' => '100',
    'class' => '',
  );
  /* Field: Media Asset: Aid */
  $handler->display->display_options['fields']['aid']['id'] = 'aid';
  $handler->display->display_options['fields']['aid']['table'] = 'asset';
  $handler->display->display_options['fields']['aid']['field'] = 'aid';
  $handler->display->display_options['fields']['aid']['label'] = '';
  $handler->display->display_options['fields']['aid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['aid']['element_label_colon'] = FALSE;
  /* Field: Titre */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'asset';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Titre';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['asset_tooltip'] = 'tooltip';
  $handler->display->display_options['fields']['title']['link_to_asset'] = FALSE;
  /* Field: Asset type: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'asset_type';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'type';
  $handler->display->display_options['fields']['name']['label'] = 'Type';
  $handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
  /* Field: User: Name */
  $handler->display->display_options['fields']['name_1']['id'] = 'name_1';
  $handler->display->display_options['fields']['name_1']['table'] = 'users';
  $handler->display->display_options['fields']['name_1']['field'] = 'name';
  $handler->display->display_options['fields']['name_1']['relationship'] = 'uid';
  $handler->display->display_options['fields']['name_1']['label'] = 'Author';
  /* Field: Media Asset: Edit link */
  $handler->display->display_options['fields']['edit_asset']['id'] = 'edit_asset';
  $handler->display->display_options['fields']['edit_asset']['table'] = 'asset';
  $handler->display->display_options['fields']['edit_asset']['field'] = 'edit_asset';
  $handler->display->display_options['fields']['edit_asset']['label'] = 'Edit';
  $handler->display->display_options['fields']['edit_asset']['alter']['text'] = '<a href="/admin/content/assets/manage/[aid]?destination=admin/dashboard">Modifier</a>';
  $handler->display->display_options['fields']['edit_asset']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['edit_asset']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['edit_asset']['text'] = 'edit';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Media Asset: Asset type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'asset';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'image' => 'image',
    'video' => 'video',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['label'] = 'Type';
  $handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';
  $handler->display->display_options['pane_title'] = 'Les derniers médias Images / Vidéos';
  $handler->display->display_options['pane_category']['name'] = 'Tableau de bord';
  $handler->display->display_options['pane_category']['weight'] = '5';
  $handler->display->display_options['allow']['use_pager'] = 0;
  $handler->display->display_options['allow']['items_per_page'] = 0;
  $handler->display->display_options['allow']['offset'] = 0;
  $handler->display->display_options['allow']['link_to_view'] = 0;
  $handler->display->display_options['allow']['more_link'] = 0;
  $handler->display->display_options['allow']['path_override'] = 0;
  $handler->display->display_options['allow']['title_override'] = 'title_override';
  $handler->display->display_options['allow']['exposed_form'] = 0;
  $handler->display->display_options['allow']['fields_override'] = 0;

  /* Display: Search Media */
  $handler = $view->new_display('references_dialog', 'Search Media', 'references_dialog_5');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Media Asset: Aid */
  $handler->display->display_options['fields']['aid']['id'] = 'aid';
  $handler->display->display_options['fields']['aid']['table'] = 'asset';
  $handler->display->display_options['fields']['aid']['field'] = 'aid';
  $handler->display->display_options['fields']['aid']['label'] = '';
  $handler->display->display_options['fields']['aid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['aid']['element_label_colon'] = FALSE;
  /* Field: Media Asset: Image */
  $handler->display->display_options['fields']['field_asset_image']['id'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['table'] = 'field_data_field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['field'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['label'] = 'Vignette';
  $handler->display->display_options['fields']['field_asset_image']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_asset_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_asset_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_asset_image']['hide_empty'] = TRUE;
  /* Field: Media Asset: Video url */
  $handler->display->display_options['fields']['field_asset_video']['id'] = 'field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['table'] = 'field_data_field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['field'] = 'field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['label'] = '';
  $handler->display->display_options['fields']['field_asset_video']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_asset_video']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_asset_video']['type'] = 'emvideo_snapshot';
  $handler->display->display_options['fields']['field_asset_video']['settings'] = array(
    'width' => '100',
    'class' => '',
  );
  /* Field: Titre */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'asset';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Titre';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['asset_tooltip'] = 'tooltip';
  $handler->display->display_options['fields']['title']['link_to_asset'] = FALSE;
  /* Field: Media Asset: Asset type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'asset';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  /* Field: Global: Reference button */
  $handler->display->display_options['fields']['ref_dialog_button']['id'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['table'] = 'views';
  $handler->display->display_options['fields']['ref_dialog_button']['field'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['label'] = '';
  $handler->display->display_options['fields']['ref_dialog_button']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['ref_dialog_button']['text'] = 'Ajouter';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Media Asset: Asset type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'asset';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'all' => 'all',
    'gallery' => 'gallery',
    'free_html' => 'free_html',
    'image' => 'image',
    'poll' => 'poll',
    'video' => 'video',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['filters']['type']['exposed'] = TRUE;
  $handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['label'] = 'Asset type';
  $handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';
  $handler->display->display_options['filters']['type']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
    5 => 0,
    6 => 0,
  );
  $handler->display->display_options['filters']['type']['expose']['reduce'] = TRUE;
  /* Filter criterion: Media Asset: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'asset';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['operator'] = 'contains';
  $handler->display->display_options['filters']['title']['group'] = 1;
  $handler->display->display_options['filters']['title']['exposed'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['label'] = 'Titre';
  $handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
  $handler->display->display_options['attach'] = array(
    0 => 'node:field_article_media:article',
    1 => 'taxonomy_term:field_banner:place',
    2 => 'taxonomy_term:field_banner:institution',
    3 => 'taxonomy_term:field_picture:personality',
    4 => 'taxonomy_term:field_illustration:event',
    5 => 'node:field_article_main_media:article',
  );

  /* Display: Search Illustration */
  $handler = $view->new_display('references_dialog', 'Search Illustration', 'references_dialog_6');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Media Asset: Aid */
  $handler->display->display_options['fields']['aid']['id'] = 'aid';
  $handler->display->display_options['fields']['aid']['table'] = 'asset';
  $handler->display->display_options['fields']['aid']['field'] = 'aid';
  $handler->display->display_options['fields']['aid']['label'] = '';
  $handler->display->display_options['fields']['aid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['aid']['element_label_colon'] = FALSE;
  /* Field: Media Asset: Image */
  $handler->display->display_options['fields']['field_asset_image']['id'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['table'] = 'field_data_field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['field'] = 'field_asset_image';
  $handler->display->display_options['fields']['field_asset_image']['label'] = 'Vignette';
  $handler->display->display_options['fields']['field_asset_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_asset_image']['hide_empty'] = TRUE;
  /* Field: Titre */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'asset';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Titre';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['asset_tooltip'] = 'tooltip';
  $handler->display->display_options['fields']['title']['link_to_asset'] = FALSE;
  /* Field: Media Asset: Asset type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'asset';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = 'Type';
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  /* Field: Global: Reference button */
  $handler->display->display_options['fields']['ref_dialog_button']['id'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['table'] = 'views';
  $handler->display->display_options['fields']['ref_dialog_button']['field'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['label'] = '';
  $handler->display->display_options['fields']['ref_dialog_button']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['ref_dialog_button']['text'] = 'Ajouter';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Media Asset: Asset type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'asset';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'image' => 'image',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['label'] = 'Asset type';
  $handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';
  $handler->display->display_options['filters']['type']['expose']['required'] = TRUE;
  /* Filter criterion: Media Asset: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'asset';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['operator'] = 'contains';
  $handler->display->display_options['filters']['title']['group'] = 1;
  $handler->display->display_options['filters']['title']['exposed'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['label'] = 'Titre';
  $handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
  $handler->display->display_options['attach'] = array(
    0 => 'node:field_article_media:article',
    1 => 'field_collection_item:field_bloc_image_asset:field_bloc_item_collection',
  );

  /* Display: Search Diaporama Media */
  $handler = $view->new_display('references_dialog', 'Search Diaporama Media', 'references_dialog_7');
  $handler->display->display_options['display_description'] = 'Images search for diaporama';
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Media Asset: Aid */
  $handler->display->display_options['fields']['aid']['id'] = 'aid';
  $handler->display->display_options['fields']['aid']['table'] = 'asset';
  $handler->display->display_options['fields']['aid']['field'] = 'aid';
  $handler->display->display_options['fields']['aid']['label'] = '';
  $handler->display->display_options['fields']['aid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['aid']['element_label_colon'] = FALSE;
  /* Field: Media Asset: Video url */
  $handler->display->display_options['fields']['field_asset_video']['id'] = 'field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['table'] = 'field_data_field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['field'] = 'field_asset_video';
  $handler->display->display_options['fields']['field_asset_video']['label'] = '';
  $handler->display->display_options['fields']['field_asset_video']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_asset_video']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_asset_video']['type'] = 'emvideo_snapshot';
  $handler->display->display_options['fields']['field_asset_video']['settings'] = array(
    'width' => '100',
    'class' => '',
  );
  /* Field: Titre */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'asset';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Titre';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['asset_tooltip'] = 'tooltip';
  $handler->display->display_options['fields']['title']['link_to_asset'] = FALSE;
  /* Field: Media Asset: Asset type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'asset';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  /* Field: Global: Reference button */
  $handler->display->display_options['fields']['ref_dialog_button']['id'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['table'] = 'views';
  $handler->display->display_options['fields']['ref_dialog_button']['field'] = 'ref_dialog_button';
  $handler->display->display_options['fields']['ref_dialog_button']['label'] = '';
  $handler->display->display_options['fields']['ref_dialog_button']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['ref_dialog_button']['text'] = 'Ajouter';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Media Asset: Asset type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'asset';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'image' => 'image',
    'video' => 'video',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['filters']['type']['exposed'] = TRUE;
  $handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['label'] = 'Asset type';
  $handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';
  $handler->display->display_options['filters']['type']['expose']['reduce'] = TRUE;
  /* Filter criterion: Media Asset: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'asset';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['operator'] = 'contains';
  $handler->display->display_options['filters']['title']['group'] = 1;
  $handler->display->display_options['filters']['title']['exposed'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['label'] = 'Titre';
  $handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
  $handler->display->display_options['attach'] = array(
    0 => 'asset:field_asset_diaporama:diaporama',
  );
  $export['dashboard_medialibrary'] = $view;

  return $export;
}
