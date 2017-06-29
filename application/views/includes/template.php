<?php $this->load->view('includes/header'); ?>

<!--<?php $this->load->view($main_content); ?>-->
<div id="section-container" >
  <p>This is some text</p>
  <div ng-controller="registerCtrl">
    
    <ul>
      <li><?php print anchor('#/register','home'); ?></li>
       <li><?php print anchor('#/login','Login'); ?></li>
      
    </ul>
      <div ng-view>
          
          
          
      </div>
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>