<?php


drupal_add_library('system', 'drupal.ajax');

function festivais18_preprocess_page(&$variables) {

  if (!empty($variables['node']) && !empty($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  } 

  if( !empty($variables['node'])){
      drupal_add_js(array('nid' => $variables['node']->nid), 'setting'); 
  } 

}


function festivais18_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'excursao_node_form') {
      $form['actions']['submit']['#value'] = '<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar';
    }

    if ($form_id == 'compra_ingressos_node_form') {
      $form['actions']['submit']['#value'] = '<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar';
    }

    if ($form_id == 'venda_ingressos_node_form') {
      $form['actions']['submit']['#value'] = '<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar';
    }

    if ($form_id == 'oferecendo_carona_node_form') {
      $form['actions']['submit']['#value'] = '<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar';
    }

    if ($form_id == 'procura_carona_node_form') {
      $form['actions']['submit']['#value'] = '<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar';
    }
  }







?>