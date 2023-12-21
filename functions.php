<?php

header("Content-Type: application/json");


/*function adicionar_tamanho_imagem_personalizado() {
    add_image_size( 'imagem-530x353', 530, 353, true ); // Largura, altura, cortar?
}
add_action( 'after_setup_theme', 'adicionar_tamanho_imagem_personalizado' );
*/

add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {
    add_action( 'init', 'add_support_to_pages' );
}

function add_support_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
    unregister_post_type('post');
}

add_theme_support( 'post-thumbnails' );

function ocultar_tipo_de_post_do_menu() {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'ocultar_tipo_de_post_do_menu');

/****************Post customizado LOJAS****************** *

function registrar_lojas() {
    $labels = array(
        'name'               => 'Lojas',
        'singular_name'      => 'Loja',
        'menu_name'          => 'Lojas',
        'name_admin_bar'     => 'Lojas',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo loja',
        'new_item'           => 'Novo loja',
        'edit_item'          => 'Editar loja',
        'view_item'          => 'Visualizar  loja',
        'all_items'          => 'Todos os loja',
        'search_items'       => 'Pesquisar loja',
        'parent_item_colon'  => 'Meus loja Pai:',
        'not_found'          => 'Nenhum loja encontrado.',
        'not_found_in_trash' => 'Nenhum loja encontrado na lixeira.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'lojas' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title',  'thumbnail' ),
    );

    register_post_type( 'lojas', $args );
}
add_action( 'init', 'registrar_lojas' );

function adicionar_campos_personalizados() {
    add_meta_box(
        'meus_campos',
        'Meus Campos Personalizados',
        'exibir_campos_personalizados',
        'lojas',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'adicionar_campos_personalizados' );
add_action( 'save_post', 'myplugin_save_postdata' );

function exibir_campos_personalizados( $post ) {
    // Recupere os valores salvos dos campos personalizados

    $area_atuacao = get_post_meta( $post->ID, 'area_atuacao', true );
    $rede_social = get_post_meta( $post->ID, 'rede_social', true );
    $link_rede_social = get_post_meta( $post->ID, 'link_rede_social', true );
    $tipo_rede_social = get_post_meta( $post->ID, 'tipo_rede_social', true );
    $telefone = get_post_meta( $post->ID, 'telefone', true );

    
    ?>
     
    <label for="area_atuacao">Área:</label><br>
    <input type="text" id="area_atuacao" name="area_atuacao" value="<?php echo esc_attr( $area_atuacao ); ?>" /><br><br>

    <label for="rede_social">Rede social:</label><br>
    <input type="text" id="rede_social" name="rede_social" value="<?php echo esc_attr( $rede_social ); ?>" /><br><br>

    <label for="link_rede_social">link da Rede Social:</label><br>
    <input type="text" id="link_rede_social" name="link_rede_social" value="<?php echo esc_attr( $link_rede_social ); ?>" /><br><br>

    <label for="tipo_rede_social">Tipo da Rede Social:</label><br>
    <select id="tipo_rede_social" name="tipo_rede_social">
        <option value="instagram" <?php selected( $tipo_rede_social, 'instagram' ); ?>>Instagram</option>
        <option value="facebook" <?php selected( $tipo_rede_social, 'facebook' ); ?>>Facebook</option>
        <option value="site" <?php selected( $tipo_rede_social, 'site' ); ?>>Site</option>
        <option value="twitter" <?php selected( $tipo_rede_social, 'twitter' ); ?>>Twitter</option>
    </select><br><br>

    <label for="telefone">Telefone:</label><br>
    <input type="text" id="telefone" name="telefone" value="<?php echo esc_attr( $telefone ); ?>" /><br><br>


    <?php
}

/* When the post is saved, saves our custom data *
function myplugin_save_postdata( $post_id ) {



    // verify if this is an auto save routine. 
    // If it is our form has not been submitted, so we dont want to do anything
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;
  
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( ( isset ( $_POST['myplugin_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename( __FILE__ ) ) ) )
        return;
  
    // Check permissions
    if ( ( isset ( $_POST['post_type'] ) ) && ( 'lojas' == $_POST['post_type'] )  ) {
      if ( ! current_user_can( 'edit_page', $post_id ) ) {
        return;
      }    
    }
    else {
      if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
      }
    }

    $fields = array( 'area_atuacao','rede_social', 'link_rede_social', 'tipo_rede_social','telefone');
    foreach ($fields as $key => $value) {
        if ($value === 'tipo_rede_social') {
            // Lidar com o campo tipo_rede_social como um campo de seleção (select)
            if ( isset( $_POST['tipo_rede_social'] ) ) {
                update_post_meta( $post_id, 'tipo_rede_social', sanitize_text_field( $_POST['tipo_rede_social'] ) );
            }
        } else {
            // Lidar com os outros campos como antes
            updateCustomField($value,$post_id);
        }
    }   
  
  }

  function updateCustomField($slug,$post_id){
    if ( isset ( $_POST[$slug] ) ) {
        update_post_meta( $post_id, $slug, $_POST[$slug] );
    }
  }

  /****************FIM - Post customizado LOJAS****************** */

  

/*************Post customizado DEMONSTRATIVO FINANCEIRO ***********************/

// Registrar o tipo de post personalizado 'Demonstrativo Financeiro'
function registrar_tipo_demon_financeiro() {
    $labels = array(
        'name'               => 'Demonstrativos Financeiros',
        'singular_name'      => 'Demonstrativo Financeiro',
        'menu_name'          => 'Demonstrativos Financeiros',
        'name_admin_bar'     => 'Demonstrativo Financeiro',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Demonstrativo Financeiro',
        'new_item'           => 'Novo Demonstrativo Financeiro',
        'edit_item'          => 'Editar Demonstrativo Financeiro',
        'view_item'          => 'Visualizar Demonstrativo Financeiro',
        'all_items'          => 'Todos os Demonstrativos Financeiros',
        'search_items'       => 'Pesquisar Demonstrativos Financeiros',
        'not_found'          => 'Nenhum demonstrativo financeiro encontrado.',
        'not_found_in_trash' => 'Nenhum demonstrativo financeiro encontrado na lixeira.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'demon_financeiro'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'excerpt'),
        'exclude_from_search' => false,
    );

    register_post_type('demon_financeiro', $args);
}
add_action('init', 'registrar_tipo_demon_financeiro');

// Remover suporte à imagem de destaque, discussão e resumo
function remover_suporte_metaboxes_demon_financeiro() {
    remove_post_type_support('demon_financeiro', 'thumbnail');
    remove_post_type_support('demon_financeiro', 'comments');
    remove_post_type_support('demon_financeiro', 'excerpt');
}
add_action('init', 'remover_suporte_metaboxes_demon_financeiro');


/****************FIM - Post customizado DEMONSTRATIVO FINANCEIRO ***********************/

  /*************Post customizado DIRETORIA ***********************/

  // Registrar o tipo de post personalizado 'diretoria'
function registrar_tipo_diretoria() {
    $labels = array(
        'name'               => 'Diretorias',
        'singular_name'      => 'Diretoria',
        'menu_name'          => 'Diretoria',
        'name_admin_bar'     => 'Diretoria',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Grupo Diretor',
        'new_item'           => 'Novo Grupo Diretor',
        'edit_item'          => 'Editar Grupo Diretor',
        'view_item'          => 'Visualizar Grupo Diretor',
        'all_items'          => 'Todos as Diretorias',
        'search_items'       => 'Pesquisar Diretorias',
        'not_found'          => 'Nenhuma diretoria encontrado.',
        'not_found_in_trash' => 'Nenhuma diretoria encontrado na lixeira.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'diretoria'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'exclude_from_search' => false,
    );

    register_post_type('diretoria', $args);
}
add_action('init', 'registrar_tipo_diretoria');

// Remover suporte à imagem de destaque
function remover_suporte_imagem_destaque() {
    remove_post_type_support('diretoria', 'thumbnail');
}
add_action('init', 'remover_suporte_imagem_destaque');

function remover_metaboxes_diretoria() {
    remove_meta_box('commentstatusdiv', 'diretoria', 'normal');
    remove_meta_box('postexcerpt', 'diretoria', 'normal');
}
add_action('admin_menu', 'remover_metaboxes_diretoria');

/****************FIM - Post customizado DIRETORIA ***********************/

/*************Post customizado CONSELHO FISCAL ***********************/

// Registrar o tipo de post personalizado 'conselho_fiscal'
function registrar_tipo_conselho_fiscal() {
    $labels = array(
        'name'               => 'Conselho Fiscal',
        'singular_name'      => 'Conselho Fiscal',
        'menu_name'          => 'Conselho Fiscal',
        'name_admin_bar'     => 'Conselho Fiscal',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Grupo Conselho Fiscal',
        'new_item'           => 'Novo Grupo Conselho Fiscal',
        'edit_item'          => 'Editar Grupo Conselho Fiscal',
        'view_item'          => 'Visualizar Grupo Conselho Fiscal',
        'all_items'          => 'Todos os Conselhos Fiscais',
        'search_items'       => 'Pesquisar Conselhos Fiscais',
        'not_found'          => 'Nenhum conselho fiscal encontrado.',
        'not_found_in_trash' => 'Nenhum conselho fiscal encontrado na lixeira.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'conselho_fiscal'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'excerpt', 'comments'),
        'exclude_from_search' => false,
    );

    register_post_type('conselho_fiscal', $args);
}
add_action('init', 'registrar_tipo_conselho_fiscal');

// Remover suporte à imagem de destaque
function remover_suporte_imagem_destaque_conselho_fiscal() {
    remove_post_type_support('conselho_fiscal', 'thumbnail');
}
add_action('init', 'remover_suporte_imagem_destaque_conselho_fiscal');

function remover_metaboxes_conselho_fiscal() {
    remove_meta_box('commentstatusdiv', 'conselho_fiscal', 'normal');
    remove_meta_box('postexcerpt', 'conselho_fiscal', 'normal');
}
add_action('admin_menu', 'remover_metaboxes_conselho_fiscal');

/****************FIM - Post customizado CONSELHO FISCAL ***********************/

 
  /****************Adicionando campo personalizados em Configurações****************** */



    // Função para exibir os campos personalizados no formulário de configurações
function exibir_campos_personalizados_configuracao() {
    ?>
    <h2>Configurações Personalizadas</h2>
    <form action="options.php" method="post">
        <?php settings_fields( 'configuracoes-personalizadas' ); ?>
        <?php do_settings_sections( 'configuracoes-personalizadas' ); ?>
        <table class="form-table" style="width:350px">
            <tr valign="top">
                <th scope="row">Email:</th>
                <td><input type="text" name="email_field" value="<?php echo esc_attr( get_option( 'email_field' ) ); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Endereço:</th>
                <td><textarea name="endereco_field"><?php echo esc_textarea( get_option( 'endereco_field' ) ); ?></textarea></td>
            </tr>
            <tr valign="top">
                <th scope="row">Copyright:</th>
                <td><textarea name="copyright_field"><?php echo esc_attr( get_option( 'copyright_field' ) ); ?></textarea></td>
            </tr>

            <tr valign="top">
                <th scope="row">Parceiros:</th>
                </tr>
                                  
                    <?php
                    // Recupere a lista de parceiros salvos
                    $parceiros = get_option('parceiros', array());
                    
                    // Exiba os campos para cada parceiro
                    $index = 0;
                    foreach ($parceiros as $index => $parceiro) {
                        ?>
                        <tr valign="top" class="parceiro">
                            <td>
                                    <label for="parceiro_image_<?php echo $index; ?>">Imagem do Parceiro:</label>
                                    <input type="text" name="parceiros[<?php echo $index; ?>][imagem]" id="parceiro_image_<?php echo $index; ?>" value="<?php echo esc_attr($parceiro['imagem']); ?>" />
                            </td>
                            <td>   
                                    <label for="parceiro_link_<?php echo $index; ?>">Link do Parceiro:</label>
                                    <input type="text" name="parceiros[<?php echo $index; ?>][link]" id="parceiro_link_<?php echo $index; ?>" value="<?php echo esc_attr($parceiro['link']); ?>" />
                            </td>
                            <td>    
                                    <button class="remove-parceiro" type="button">Remover Parceiro</button>

                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                <tr valign="top" class="parceiro">
                        <?php  
                            $index++;
                            ?>
                            <td>
                                <label for="parceiro_image_<?php echo $index; ?>">Imagem do Parceiro:</label>
                                <input type="text" name="parceiros[<?php echo $index; ?>][imagem]" id="parceiro_image_<?php echo $index; ?>" value="" />
                                </td><td>
                                <label for="parceiro_link_<?php echo $index; ?>">Link do Parceiro:</label>
                                <input type="text" name="parceiros[<?php echo $index; ?>][link]" id="parceiro_link_<?php echo $index; ?>" value="" />
                                </td><td>
                                <button class="remove-parceiro" type="button">Remover Parceiro</button>
                            </td>
                </tr>      
            
        </table>
        <br><br><button class="add-parceiro" type="button">Adicionar Parceiro</button>
        <?php submit_button(); ?>
    </form>
    <script>
        // Adicione scripts para adicionar/remover dinamicamente campos de parceiros
        // Certifique-se de validar e sanitizar os dados antes de salvar
    </script>
    <?php
}

// Adicionar as configurações personalizadas ao menu
function adicionar_pagina_configuracoes_personalizadas() {
    add_options_page( 'Configurações Personalizadas', 'Configurações Personalizadas', 'manage_options', 'configuracoes-personalizadas', 'exibir_campos_personalizados_configuracao' );
}
add_action( 'admin_menu', 'adicionar_pagina_configuracoes_personalizadas' );

// Registrar os campos personalizados e seus valores
function registrar_campos_personalizados() {
    // Registrar campos para salvar
    register_setting( 'configuracoes-personalizadas', 'email_field' );
    register_setting( 'configuracoes-personalizadas', 'endereco_field' );
    register_setting( 'configuracoes-personalizadas', 'copyright_field' );
    register_setting( 'configuracoes-personalizadas', 'parceiros', 'sanitize_parceiros'); // Adicione uma função de sanitização

}
add_action( 'admin_init', 'registrar_campos_personalizados' );
function sanitize_parceiros($parceiros) {
    // Sanitize cada campo de cada parceiro
    foreach ($parceiros as $index => $parceiro) {
        $parceiros[$index]['imagem'] = sanitize_text_field($parceiro['imagem']);
        $parceiros[$index]['link'] = esc_url_raw($parceiro['link']); // Use esc_url_raw para URLs
    }
    // Remover parceiros vazios ou com campos vazios
    $parceiros = array_filter($parceiros, function ($parceiro) {
        return !empty($parceiro['imagem']) || !empty($parceiro['link']);
    });
    return $parceiros;
}

// Funções para exibir os campos nos formulários
function exibir_email_field() {
    echo '<input type="text" name="email_field" value="' . esc_attr( get_option( 'email_field' ) ) . '" />';
}

function exibir_endereco_field() {
    echo '<textarea name="endereco_field">'.esc_textarea( get_option( 'endereco_field' ) ).'</textarea>';
}
function exibir_copyright_field() {
    echo '<textarea name="copyright_field" >' . esc_attr( get_option( 'copyright_field' ) ) . '</textarea>';
}

add_action('admin_footer', 'adicionar_scripts_parceiros');

function adicionar_scripts_parceiros() {
    ?>
    <script>
        jQuery(document).ready(function ($) {
            var $parceirosContainer = $('td').find('.parceiro');

            $('.add-parceiro').on('click', function () {
                var $newParceiro = $parceirosContainer.first().clone();
                $newParceiro.find('input').val(''); // Limpa os valores
                $newParceiro.appendTo($parceirosContainer.parent());
            });

            $('td').on('click', '.remove-parceiro', function () {
                $(this).parent().parent('.parceiro').remove();
            });
        });
    </script>
    <?php
}



  /****************FIM - Adicionando campo personalizados em Configurações****************** */

  /**************** Rest API LOJAS****************** */

  function adicionar_cors_headers() {
    header( 'Access-Control-Allow-Origin: *' );
    header( 'Access-Control-Allow-Methods: GET,POST' );
    header( 'Access-Control-Allow-Credentials: true' );
    header( 'Access-Control-Expose-Headers: Link' );
}

add_action( 'rest_api_init', function() {
    add_filter( 'rest_pre_serve_request', 'adicionar_cors_headers' );
}, 15 );

 function registrar_endpoint() {

    register_rest_route('astecom/v1', '/pagina/', array(
        'methods' => 'GET',
        'callback' => 'obter_pagina_por_id',
        'args' => array(
            'id' => array(
                'validate_callback' => function($param, $request, $key) {
                    return is_string($param);
                }
            ),
        ),
    ));

    register_rest_route('astecom/v1', '/paginas-filha/', array(
        'methods' => 'GET',
        'callback' => 'obter_paginas_filha_por_id',
        'args' => array(
            'id' => array(
                'validate_callback' => function($param, $request, $key) {
                    return is_string($param);
                }
            ),
        ),
    ));

    register_rest_route('astecom/v1', '/configuracoes-personalizadas/', array(
        'methods' => 'GET',
        'callback' => 'obter_configuracoes_personalizadas',
    ));

    register_rest_route( 'astecom/v1', '/enviar-email/', array(
        'methods' => 'POST',
        'callback' => 'enviar_email',
        'args' => array(
            'email' => array(
                'required' => true,
                'validate_callback' => function($param, $request, $key) {
                    return is_email($param);
                }
            ),
            'telefone' => array(
                'required' => false,
            ),
            'nome' => array(
                'required' => false,
            ),
            'mensagem' => array(
                'required' => true,
            ),
        ),
    ) );

    register_rest_route('astecom/v1', '/diretorias/', array(
        'methods' => 'GET',
        'callback' => 'obter_diretorias',
    ));
    // Endpoint para obter diretorias por ID
    register_rest_route('astecom/v1', '/diretorias/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'obter_diretoria_por_id',
    ));

    register_rest_route('astecom/v1', '/demonstrativos_financeiro/', array(
        'methods' => 'GET',
        'callback' => 'obter_demonstrativos_financeiros',
    ));

    // Endpoint para obter demonstrativos financeiros por ID
    register_rest_route('astecom/v1', '/demonstrativos_financeiro/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'obter_demonstrativo_financeiro_por_id',
    ));
    
    register_rest_route('astecom/v1', '/conselho_fiscal/', array(
        'methods' => 'GET',
        'callback' => 'obter_conselho_fiscal',
    ));
    
    // Endpoint para obter conselho fiscal por ID
    register_rest_route('astecom/v1', '/conselho_fiscal/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'obter_conselho_fiscal_por_id',
    ));

}

add_action('rest_api_init', 'registrar_endpoint');


function obter_pagina_por_id($data) {
    $pagina_id = $data['id'];
    $pagina = get_post($pagina_id);

    if ($pagina) {
        $resposta = array(
            'id' => $pagina->ID,
            'titulo' => $pagina->post_title,
            'conteudo' => apply_filters('the_content', $pagina->post_content),
            // Adicione outros campos personalizados conforme necessário
        );
        return rest_ensure_response($resposta);
    } else {
        return new WP_Error('nao_encontrado', 'Página não encontrada', array('status' => 404));
    }
}

function obter_paginas_filha_por_id($data) {
    $pagina_id = $data['id'];
    $paginas = get_children( array('post_parent' => $pagina_id,'orderby' => 'none') );
    $resposta = array();

    foreach ($paginas as $pagina) {
        $resposta[] = array(
            'id' => $pagina->ID,
            'titulo' => $pagina->post_title,
            'conteudo' => apply_filters('the_content', $pagina->post_content)
        );
    }

    return rest_ensure_response($resposta);


    if ($pagina) {
        $resposta = array(
            'id' => $pagina->ID,
            'titulo' => $pagina->post_title,
            'conteudo' => apply_filters('the_content', $pagina->post_content),
            // Adicione outros campos personalizados conforme necessário
        );
        return rest_ensure_response($pagina);
    } else {
        return new WP_Error('nao_encontrado', 'Página não encontrada', array('status' => 404));
    }
}

function obter_configuracoes_personalizadas() {
    $configuracoes = array(
        'email' => get_option('email_field'),
        'endereco' => get_option('endereco_field'),
        'copyright' => get_option('copyright_field'),
        'parceiros' => get_option('parceiros', array()),
    );

    return rest_ensure_response($configuracoes);
}

add_filter('wp_mail_content_type', function( $content_type ) {
    return 'text/html';
});

function enviar_email( $data ) {
    $from = $data['email'];
    $telefone = $data['telefone'];
    $nome = $data['nome'];
    $to = get_option('email_field');
    $message = $data['mensagem'].'<br><br>De: '.$nome.'<br><br>Telefone: '.$telefone;

    $headers = "From: $nome <$from>". "\r\n" .
               "Reply-To: $from" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $result = wp_mail( $to, "Mensagem enviada do site por ".$nome, $message, $headers );

    if ( $result ) {
        return rest_ensure_response( array( 'message' => 'E-mail enviado com sucesso!','status' => 'ok' ) );
    } else {
        return rest_ensure_response( array( 'message' => 'Falha ao enviar o e-mail.','status' => 'error' ) );
    }
}

function obter_diretorias($data) {
    $args = array(
        'post_type' => 'diretoria',
        'posts_per_page' => -1,
    );

    $diretorias = get_posts($args);

    $resposta = array();

    foreach ($diretorias as $diretoria) {
        $resposta[] = array(
            'id' => $diretoria->ID,
            'titulo' => $diretoria->post_title,
            'conteudo' => $diretoria->post_content,
        );
    }

    return rest_ensure_response($resposta);
}

function obter_demonstrativos_financeiros($data) {
    $args = array(
        'post_type' => 'demon_financeiro',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $demonstrativos_financeiros = get_posts($args);

    $resposta = array();

    foreach ($demonstrativos_financeiros as $demonstrativo_financeiro) {
        $resposta[] = array(
            'id' => $demonstrativo_financeiro->ID,
            'titulo' => $demonstrativo_financeiro->post_title,
            'conteudo' => $demonstrativo_financeiro->post_content,
        );
    }

    //$json = json_encode($resposta, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE)

    return $resposta;

   // return rest_ensure_response($json);
}

function obter_conselho_fiscal($data) {
    $args = array(
        'post_type' => 'conselho_fiscal',
        'posts_per_page' => -1,
    );

    $conselho_fiscal = get_posts($args);

    $resposta = array();

    foreach ($conselho_fiscal as $membro) {
        $resposta[] = array(
            'id' => $membro->ID,
            'titulo' => $membro->post_title,
            'conteudo' => $membro->post_content,
        );
    }

    return rest_ensure_response($resposta);
}

// Função para obter diretoria por ID
function obter_diretoria_por_id($data) {
    $diretoria_id = $data['id'];
    $diretoria = get_post($diretoria_id);
    
    if (!$diretoria) {
        return new WP_Error('404', 'Diretoria não encontrada', array('status' => 404));
    }

    return rest_ensure_response(array(
        'id' => $diretoria->ID,
        'titulo' => $diretoria->post_title,
        'conteudo' => $diretoria->post_content,
    ));
}

// Função para obter demonstrativo financeiro por ID
function obter_demonstrativo_financeiro_por_id($data) {
    $demonstrativo_financeiro_id = $data['id'];
    $demonstrativo_financeiro = get_post($demonstrativo_financeiro_id);
    
    if (!$demonstrativo_financeiro) {
        return new WP_Error('404', 'Demonstrativo financeiro não encontrado', array('status' => 404));
    }

    return rest_ensure_response(array(
        'id' => $demonstrativo_financeiro->ID,
        'titulo' => $demonstrativo_financeiro->post_title,
        'conteudo' => $demonstrativo_financeiro->post_content,
    ));
}

// Função para obter conselho fiscal por ID
function obter_conselho_fiscal_por_id($data) {
    $conselho_fiscal_id = $data['id'];
    $conselho_fiscal = get_post($conselho_fiscal_id);
    
    if (!$conselho_fiscal) {
        return new WP_Error('404', 'Conselho fiscal não encontrado', array('status' => 404));
    }

    return rest_ensure_response(array(
        'id' => $conselho_fiscal->ID,
        'titulo' => $conselho_fiscal->post_title,
        'conteudo' => $conselho_fiscal->post_content,
    ));
}


 /**************** FIM - Rest API astecom****************** */