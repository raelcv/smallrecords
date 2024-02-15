<?php return [
    'plugin' => [
        'name' => 'Pequenos registros',
        'name_short' => 'Registros',
        'name_original' => 'Pequenos registros',
        'description' => 'Plugin de armazenamento de registros universal',
    ],

    'common' => [
        'import' => 'Importar',
        'export' => 'Exportar',
        'edit' => 'Editar',
        'desc' => 'Descendente',
        'asc' => 'Ascendente',

        'menu' => [
            'areas' => 'Listas',
            'area' => 'Lista',
        ],

        'tabs' => [
            'info' => 'Informação',
            'images' => 'Imagens',
            'content' => 'Conteúdo',
            'fields' => 'Campos',
            'notes' => 'Notas',
            'tags' => 'Tags',
            'attributes' => 'Atributos',
            'attachments' => 'Anexos',
            'secondary_categories' => 'Categorias secundárias',
            'testimonials' => 'Depoimentos',
            'content_blocks' => 'Blocos de conteúdo',
            'records' => 'Registros',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nome',
            'slug' => 'Slug',
            'active' => 'Ativo',
            'favourite' => 'Favorito',
            'date' => 'Data',
            'url' => 'URL',
            'description' => 'Descrição',
            'content' => 'Conteúdo',
            'preview_image' => 'Imagem de pré-visualização',
            'preview_image_media' => 'Pré-visualização (Mídia)',
            'images' => 'Imagens',
            'images_media' => 'Imagens (Mídia)',
            'attached_images_count' => 'Imagens',
            'area' => 'Lista',
            'category' => 'Categoria principal',
            'category_comment' => 'Você pode gerenciar itens na <a href="' . Backend::url('janvince/smallrecords/categories/index') . '">página de categorias</a>',
            'tags' => 'Tags',
            'attributes' => 'Atributos',
            'files' => 'Arquivos',
            'categories' => 'Categorias',
            'repeater' => 'Informação',
            'repeater_prompt' => 'Adicionar novo registro ...',
            'testimonials' => 'Depoimentos',
            'testimonials_prompt' => 'Adicionar novo registro ...',
            'created_at' => 'Criado em',
            'updated_at' => 'Atualizado em',
            'created_by' => 'Criado por',
            'updated_by' => 'Atualizado por',
            'sort_order' => 'Ordem personalizada',
            'random' => 'Ordem aleatória',
            'author' => 'Autor',
        ],

        'fields' => [
            'empty_option' => 'Não selecionado ...',
        ],

        'buttons' => [
            'reorder' => 'Reordenar',
            'back_to_list' => 'Voltar à lista',
            'create_and_new' => 'Criar e NOVO',
            'update_and_new' => 'Salvar e NOVO',
        ],

        'import_settings' => [
            'truncate_table' => 'Esvaziar tabela antes da importação',
            'truncate_table_description' => 'Excluir todas as categorias e redefinir a autoincrementação',
            'delete_relations' => 'Excluir relações de registros com categorias',
            'delete_relations_description' => 'Excluir todas as relações de registros com categorias',
        ],

    ],


    'areas' => [
        'new_area' => 'Nova lista de registros',
        'menu_label' => 'Listas de registros',

        'import' => [
            'import_records' => 'Importar registros',
            'export_records' => 'Exportar registros',
            'area_id_description' => 'Você pode exportar dados apenas de uma Lista específica',
            'area_id_empty_option' => '-- Todos os registros --',
        ],

        'columns' => [
            'allowed_fields' => 'Campos de registros disponíveis',
            'allowed_fields_comment' => 'Os campos marcados serão visíveis no formulário de edição de registros. Esta lista é longa, então role para baixo! <br><em>Alguns campos serão visíveis depois de você criar um registro (eles dependem do ID do registro)!</em>',

            'custom_repeater_allow' => 'Permitir blocos de campos de formulário personalizados',
            'custom_repeater_tab_title' => 'Título da aba de campos de formulário personalizados',
            'custom_repeater_prompt' => 'Prompt personalizado "Adicionar novo item"',
            'custom_repeater_min_items' => 'Número mínimo de itens exigidos para campos de formulário personalizados',
            'custom_repeater_max_items' => 'Número máximo de itens permitidos para campos de formulário personalizados',

            'custom_repeater' => [
                'repeater_prompt' => 'Adicionar campo',
                'field_type' => 'Tipo de campo',
                'field_name' => 'Nome do campo',
                'field_name_comment' => 'Nome do campo como: meu_nome_de_registro. Você usará isso no Twig para acessar o valor do campo.',
                'field_label' => 'Rótulo do campo',
                'field_span' => 'Largura do campo',
                'field_mode' => 'Modo',
                'field_size' => 'Tamanho',
                'options' => [
                    'text' => 'Texto',
                    'textarea' => 'Área de texto',
                    'richeditor' => 'Editor de texto rico',
                    'number' => 'Número',
                    'checkbox' => 'Caixa de seleção',
                    'mediafinder' => 'Localizador de mídia',
                    'section' => 'Seção',
                    'left' => 'Esquerda',
                    'right' => 'Direita',
                    'full' => 'Completo',
                    'file' => 'Arquivo',
                    'image' => 'Imagem',
                    'tiny' => 'Pequeno',
                    'small' => 'Pequeno',
                    'large' => 'Grande',
                    'huge' => 'Enorme',
                    'giant' => 'Gigante',
                    'empty_option' => 'Selecionar ...'
                ]
            ],
        ],

        'tabs' => [
            'custom_repeater' => 'Campos de formulário personalizados',
        ]
    ],


    'records' => [
        'menu_label' => 'Registros',
        'return_to_records' => 'Voltar para Registros',
        'reordering_description' => 'Use "Ordem personalizada" na opção de classificação dos componentes.',
        'reorder' => 'Ordem personalizada',

        'images_media' => [
            'image' => 'Imagem',
            'title' => 'Título',
            'description' => 'Descrição',
        ],

        'repeater' => [
            'repeater_prompt' => 'Adicionar item ...',
            'value1' => 'Valor 1',
            'value2' => 'Valor 2',
            'value3' => 'Valor 3',
            'value4' => 'Valor 4',
            'text' => 'Texto',
        ],

        'testimonials' => [
            'title' => 'Título',
            'image' => 'Imagem',
            'author' => 'Autor',
            'date' => 'Data',
            'content' => 'Conteúdo',
        ],

        'content_blocks' => [
            'title' => 'Título',
            'subtitle' => 'Subtítulo',
            'image' => 'Imagem',
            'author' => 'Autor',
            'date' => 'Data',
            'content' => 'Conteúdo',
            'preview_image' => 'Imagem de pré-visualização',
            'description' => 'Descrição',
            'code' => 'Código',
            'disable' => 'Desabilitar',
            'favourite' => 'Favorito',
        ],

        'scoreboard' => [
            'records_count' => 'Contagem de registros',
            'records_active' => 'Ativo',
            'records_hidden' => 'Oculto',
            'records_favourite' => 'Favorito',
            'records_common' => 'Comum',
            'latest_record' => 'Último',
            'latest_record_date' => 'Criado: ',
            'active_area' => '{0} registros em | {1} registro em | [2,Inf[ %count% registros em',
        ]

    ],

    'categories' => [
        'menu_label' => 'Categorias',
        'category' => 'Categoria',
        'new_category' => 'Nova categoria',
        'return_to_categories' => 'Voltar para Categorias',
        'secondary_categories' => 'Mais categorias',
        'delete_confirm' => 'Tem certeza de que deseja excluir esta categoria?',

        'columns' => [
            'main_category' => 'Categoria principal',
            'parent' => 'Categoria pai',
            'parent_comment' => 'Você pode alterar a hierarquia e a ordem na <a href="' . Backend::url('janvince/smallrecords/categories/reorder') . '">página de reordenação</a>',
        ],

        'tabs' => [
            'secondary_categories' => 'Categorias secundárias',
            'secondary_categories_comment' => 'Os registros podem ter uma categoria principal e muitas categorias secundárias',
        ]

    ],

    'attributes' => [
        'menu_label' => 'Atributos',
        'new_attribute' => 'Novo atributo',
        'attribute' => 'Atributo',
        'return_to_attributes' => 'Voltar para Atributos',

        'columns' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'value_text' => 'Texto',
            'value_number' => 'Número',
            'value_boolean' => 'Estado',
            'value_switch' => 'Interruptor (Sim/Não)',
            'value_type' => 'Tipo de dado do valor',
            'value_type_comment' => 'Com base no tipo de dado selecionado, o campo de entrada correto será mostrado no formulário de relação',
            'value_string' => 'String',
        ],

        'tabs' => [
            'attributes' => 'Atributos',
            'attributes_comment' => 'Você pode atribuir atributos e adicionar seus valores',
        ],


    ],

    'tags' => [
        'menu_label' => 'Tags',
        'return_to_tags' => 'Voltar para Tags',
        'new_tag' => 'Nova Tag',
        'tag' => 'Tag',
        'reorder' => 'Reordenar',

        'columns' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'description' => 'Descrição',
            'value' => 'Valor',
            'icon' => 'Ícone',
        ],

        'tabs' => [
            'tags' => 'Tags'
        ]

    ],

    'forms' => [
        'reorder' => 'Reordenar',
        'delete_attached_images' => 'Excluir todas as imagens anexadas',
        'delete_attached_images_confirm' => 'Realmente excluir todas as imagens anexadas na guia Imagens?',
        'deleting_attached_images' => 'Excluindo todas as imagens anexadas...',
    ],

    'components' => [

        'common' => [

            'properties' => [
                'active_only' => 'Apenas Ativos',
                'active_only_description' => 'Filtrar apenas registros ativos',
                'active_records_only' => 'Registros Ativos',
                'active_records_only_description' => 'Filtrar apenas registros ativos',
                'favourite_only' => 'Favoritos',
                'favourite_only_description' => 'Obter apenas registros favoritos (não marcados obterão todos os registros)',
                'root_categories_only' => 'Apenas Categorias Principais',
                'root_categories_only_description' => 'Retornar apenas categorias principais',

                'area_slug' => 'Filtrar registros por lista',
                'area_slug_description' => 'Selecione uma Lista para obter registros dela',
                'category_slug' => 'Slug da Categoria',
                'category_slug_description' => 'Filtrar com parâmetro de URL dinâmico como ":categoria" ou digitado manualmente como "minha-categoria".',
                'record_slug' => 'Slug do Registro',
                'record_slug_description' => 'Filtrar com parâmetro de URL dinâmico como ":registro" ou digitado manualmente como "meu-registro".',
                'tag_slug' => 'Slug da Tag',
                'tag_slug_description' => 'Filtrar com parâmetro de URL dinâmico como ":tag" ou digitado manualmente como "minha-tag".',
                'page_slug' => 'Slug da Paginação',
                'page_slug_description' => 'Filtrar com parâmetro de URL dinâmico como ":pagina" ou digitado manualmente como "1".',
                'parent_category_slug' => 'Slug da Categoria Pai',
                'parent_category_slug_description' => 'Filtrar com parâmetro de URL dinâmico como ":categoria-pai" ou digitado manualmente como "minha-categoria-pai".',

                'record_page' => 'Nome da Página do Registro',
                'record_page_description' => 'Digite o nome da página CMS onde deseja renderizar um único registro (por exemplo, "registro")',
                'record_page_slug' => 'Slug da Página do Registro',
                'record_page_slug_description' => 'Digite o nome do parâmetro de URL usado na página de registro único (por exemplo, "slug" para URL da página como /registro/:slug).',

                'category_page' => 'Nome da Página da Categoria',
                'category_page_description' => 'Digite o nome da página CMS onde deseja renderizar uma única categoria (por exemplo, "categoria")',
                'category_page_slug' => 'Slug da Página da Categoria',
                'category_page_slug_description' => 'Digite o nome do parâmetro de URL usado na página de categoria única (por exemplo, ":categoria" para URL da página como /categoria/:categoria).',
                'categories_page' => 'Nome da Página de Categorias',
                'categories_page_description' => 'Digite o nome da página CMS onde deseja renderizar a lista de categorias (por exemplo, "categorias")',
                'categories_page_slug' => 'Slug da Página de Categorias',
                'categories_page_slug_description' => 'Digite o nome do slug de URL usado na página de categorias (por exemplo, ":categoria" para URL da página como /registros/:categoria).',

                'tag_page' => 'Nome da Página da Tag',
                'tag_page_description' => 'Digite o nome da página CMS onde deseja renderizar uma única tag (por exemplo, "tag")',
                'tag_page_slug' => 'Slug da Página da Tag',
                'tag_page_slug_description' => 'Digite o nome do parâmetro de URL usado na página de tag única (por exemplo, ":tag" para URL da página como /tag/:tag).',
                'tags_page' => 'Nome da Página de Tags',
                'tags_page_description' => 'Digite o nome da página CMS onde deseja renderizar a lista de tags (por exemplo, "tags")',
                'tags_page_slug' => 'Slug da Página de Tags',
                'tags_page_slug_description' => 'Digite o nome do slug de URL usado na página de tags (por exemplo, ":tag" para URL da página como /registros/:tag).',

                'use_main_category' => 'Filtrar por categoria principal',
                'use_main_category_description' => 'Se o slug da categoria estiver definido, retorne apenas registros com essa categoria principal atribuída.',
                'use_multicategories' => 'Filtrar por categoria secundária',
                'use_multicategories_description' => 'Se o slug da categoria estiver definido, retorne apenas registros com essa categoria secundária atribuída.',

                'order_by' => 'Ordenar por',
                'order_by_direction' => 'Ordem de classificação',
                'order_as_collection' => 'Ordenar como coleção',
                'order_as_collection_description' => 'Obtenha todos os dados em uma coleção e ordene-os. Útil quando o banco de dados não pode ordenar os dados corretamente no idioma atual.',

                'allow_limit' => 'Limitar número de registros',
                'allow_limit_description' => 'Se marcado, apenas o número necessário de registros será retornado. Também será permitida uma paginação.',
                'limit' => 'Número de registros retornados',
                'limit_description' => 'Quantos registros serão retornados.',

                'throw404' => 'Erro 404 em caso de erro',
                'throw404_description' => 'Retornar erro 404 quando nenhum registro for encontrado.',
                'set_page_meta' => 'Definir propriedades meta da página',
                'set_page_meta_description' => 'page_title, meta_title e meta_description serão definidos a partir do nome e descrição do registro.',
            ],

            'forms' => [
                'empty_option' => 'Não selecionado',
            ],

            'groups' => [
                'links' => 'Links',
                'order' => 'Ordenar por',
                'limit' => 'Limite',
                'filter_area' => 'Filtrar por Lista',
                'filter_category' => 'Filtrar por Categoria',
                'filter_tag' => 'Filtrar por Tag',
                'filter_records' => 'Filtrar por Registros',
                'seo' => 'SEO',
            ],
        ],

        'records' => [
            'name' => 'Registros',
            'description' => 'Obtener lista de registros',
        ],

        'record' => [
            'name' => 'Registro',
            'description' => 'Obtener un registro específico',
        ],

        'categories' => [
            'name' => 'Categorías',
            'description' => 'Obtener lista de categorías',

            'properties' => [
                'category_slug_description' => 'Establecer parámetro de URL dinámico como ":category" o ingresado manualmente como "mi-categoria". Esto se puede utilizar, por ejemplo, para establecer la categoría activa en el menú de categorías.',
            ],
        ],


        'category' => [
            'name' => 'Categoría',
            'description' => 'Obtener una categoría específica',
        ],

        'tags' => [
            'name' => 'Etiquetas',
            'description' => 'Obtener lista de etiquetas',

            'properties' => [
                'tag_slug_description' => 'Establecer parámetro de URL dinámico como ":tag" o ingresado manualmente como "mi-etiqueta". Esto se puede utilizar, por ejemplo, para establecer la etiqueta activa en el menú de etiquetas.',
            ],
        ],

        'tag' => [
            'name' => 'Etiqueta',
            'description' => 'Obtener una etiqueta específica',
        ],

    ],

    'permissions' => [
        'tab_name' => 'Permisos de Small records',
        'access_areas' => 'Acceder a Listas',
        'access_area' => '> Acceso a la lista ',
        'access_records' => 'Acceder a Registros',
        'access_categories' => 'Acceder a Categorías',
        'access_attributes' => 'Acceder a Atributos',
        'access_settings' => 'Acceder a Configuraciones',
        'access_tags' => 'Acceder a Etiquetas',
        'access_denied' => 'Acceso denegado',
    ],
    
    'settings' => [
        'main_section' => 'Configuraciones de Small records',
        'main_section_comment' => 'Algunas configuraciones para el complemento Small records',
    
        'tabs' => [
            'lists' => 'Listas',
            'connections' => 'Conexiones',
        ],
    
        'fields' => [
            'preview_width' => 'Ancho de imagen para la columna de Vista previa',
            'preview_height' => 'Altura de imagen para la columna de Vista previa',
            'connections_section_blog' => '(Rainlab) Blog',
            'connections_section_pages' => '(Rainlab) Páginas estáticas',
            'allow_records_in_blog_posts' => 'Permitir registros en entradas de Blog',
            'allow_records_in_blog_posts_comment' => 'Mostrar lista de registros en entradas de blog (El complemento Rainlab.Blog debe estar instalado)',
            'allow_records_in_blog_posts_area' => 'Mostrar registros de la Lista',
    
            'allow_records_in_pages' => 'Permitir registros en Páginas estáticas',
            'allow_records_in_pages_comment' => 'Mostrar lista de registros en página estática (El complemento Rainlab.Pages debe estar instalado)',
            'allow_records_in_pages_area' => 'Mostrar registros de la Lista',
        ],
    ],    
];
