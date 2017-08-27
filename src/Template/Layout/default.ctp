<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E6FFFF">
  <tr>
    <td>
        <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
          <tr>
            <td bgcolor="#E6FFFF">
              <p><?php echo $this->Html->image('logo.gif',array('width'=>'157','height'=>'22'));?></p>
              <table style="margin-bottom:0px" width="800" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                        <tr>
                          <td><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36','url'=>array('controller'=>'user','action'=>'index')));?></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                        </tr>
                        <tr>
                          <td><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36','url'=>array('controller'=>'user','action'=>'index')));?></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="qr/index.php"><?php echo $this->Html->image('HeaderMenu/menu_qr.gif',array('width'=>'105','height'=>'36'));?></a></td>
                          <td><a href="Shinkies"><?php echo $this->Html->image('HeaderMenu/menu_shinki.gif',array('width'=>'105','height'=>'36'));?></a></td>
                        </tr>
              </table>
            </td>
          </tr>
        </table>
        		<?php echo $this->element('SubHeader');?>
        
            <?= $this->Flash->render() ?>
            <div class="container clearfix">
                <?= $this->fetch('content') ?>
            </div>
            <footer>
            </footer>
    </td> 
  </tr>
</table>
</body>
</html>
