Plugin ACL - CakePHP - Lista de Controle de Acesso
==================================================

- Versão: 2.1.0
- Data:    04/02/2012
- Autor:   Nicolas Rod <nico@alaxos.com>
- Website: http://www.alaxos.net/blaxos/pages/view/plugin_acl
- License: http://www.opensource.org/licenses/mit-license.php The MIT License

Esse plugin CakePHP é uma interface para gerenciar uma aplicação protegida com ACL.

É feita para trabalhar com ACL já configurado. A documentação para configurar o ACL
pode ser encontrada nos links seguintes:

- http://book.cakephp.org/2.0/en/core-libraries/components/access-control-lists.html
- http://book.cakephp.org/2.0/en/tutorials-and-examples/simple-acl-controlled-application/simple-acl-controlled-application.html

Redesenho da versão original do plugin Alaxos ACL para funcionar melhor com a biblioteca Bootstrap. 
- http://twitter.github.com/bootstrap/index.html

Instalação
----------

1. Baixe o plugin e coloque na sua aplicação em 'app/Plugin' ou no diretório 'plugin'

2. Configure a rota 'admin' (veja http://book.cakephp.org/2.0/en/development/routing.html)

3. Configure o plugin de acordo com a sua aplicação:

    Algumas configurações devem ser lidas assim que o plugin for carregado.
    Elas podem ser encontradas no arquivo 'Acl/Config.bootstrap.php'.

    Você tem duas opções para usar essas configurações, como o CakePHP não carrega
    automaticamente o arquivo bootstrap.php em plugins:

    1. Copie todas as configurações (em Acl/Config/bootstrap.php) para seu arquivo app/Config/bootstrap.php

    ou

    2. Carregue o bootstrap do plugin (adicione no final do seu arquivo app/Config/bootstrap.php):

            CakePlugin::load('Acl', array('bootstrap' => true));

- Acesse o plugin navegando até /admin/acl

Screenshot
----------
![Permissões de Grupos](https://raw.github.com/hewerthomn/alaxos_acl_bootstrap/master/Screenshots/Acl2.png "Permissões de Grupos")



ACL Plugin for CakePHP 2.0
===========================

- Version: 2.1.0
- Date: 2012-02-04
- Author: Nicolas Rod <nico@alaxos.com>
- Website: http://www.alaxos.net/blaxos/pages/view/plugin_acl
- License: http://www.opensource.org/licenses/mit-license.php The MIT License

This CakePHP plugin is an interface to manage an ACL protected web application.

It is made to work with ACL already configured. The documentation to configure the ACL 
can be found on the following links :

- http://book.cakephp.org/2.0/en/core-libraries/components/access-control-lists.html
- http://book.cakephp.org/2.0/en/tutorials-and-examples/simple-acl-controlled-application/simple-acl-controlled-application.html


Redesign the original version of Alaxos ACL plugin to works better with Bootstrap framework.
- http://twitter.github.com/bootstrap/index.html

Installation
-------------

- Download the plugin and put it in your 'app/Plugin' or 'plugins' folder
- Configure the 'admin' route (see http://book.cakephp.org/2.0/en/development/routing.html)
- Configure the plugin according to your web application:

    Some settings have to be read by CakePHP when the plugin is loaded. They can be found
    in the 'Acl/Config/bootstrap.php' file.
    
    You have two options to use these settings, as CakePHP doesn't automatically load 
    the bootstrap.php files in plugins:
    
    1.  Copy all the settings in your app/config/bootstrap.php file
    
    or
    
    2.  Load the plugin bootstrap with the plugin
    
            CakePlugin::load('Acl', array('bootstrap' => true));

- Access the ACL plugin by navigating to /admin/acl