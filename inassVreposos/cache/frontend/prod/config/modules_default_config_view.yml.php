<?php
// auto-generated by sfViewConfigHandler
// date: 2013/06/25 21:01:27
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Sistema Automatizado para el Registro y Control de Reposos de los Obreros y Empleados del INASS', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addJavascript('functions.js', '', array ());
  $response->addJavascript('jquery-1.5.2.min.js', '', array ());


