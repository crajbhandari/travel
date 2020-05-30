<?php
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/grapesjs/dist/css/grapes.min.css');
$this->registerCssFile(Yii::$app->request->baseUrl . '/resources/libs/grapesjs-web/dist/grapesjs-preset-webpage.min.css');


//$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/lib/editor-js/dist/editor.js');
//$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/lib/');
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/libs/grapesjs/dist/grapes.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/libs/grapesjs-web/dist/grapesjs-preset-webpage.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/resources/js/grape-init.js');
?>
<style>
   .panel {
      width: 90%;
      max-width: 700px;
      border-radius: 3px;
      padding: 30px 20px;
      margin: 150px auto 0px;
      background-color: #D983A6;
      box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.25);
      color: rgba(255, 255, 255, 0.75);
      font: caption;
      font-weight: 100;
   }

   .welcome {
      text-align: center;
      font-weight: 100;
      margin: 0px;
   }

   .logo {
      width: 70px;
      height: 70px;
      vertical-align: middle;
   }

   .logo path {
      pointer-events: none;
      fill: none;
      stroke-linecap: round;
      stroke-width: 7;
      stroke: #FFFFFF
   }

   .big-title {
      text-align: center;
      font-size: 3.5rem;
      margin: 15px 0;
   }

   .description {
      text-align: justify;
      font-size: 1rem;
      line-height: 1.5rem;
   }
</style>
<div class="v-editor">
   <div id = "gjs" style = "height:0px; overflow:hidden">
      <div class = "panel">
         <h1 class = "welcome">Welcome to</h1>
         <div class = "big-title">
            <span>GrapesJS</span>
         </div>
         <div class = "description">
            This is a demo content from index.html. For the development, you shouldn't edit this file, instead you can
            copy and rename it to _index.html, on next server start the new file will be served, and it will be ignored by git.
         </div>
      </div>

   </div>
</div>